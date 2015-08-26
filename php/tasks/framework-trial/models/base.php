<?php

/**
 *  Classe generica che implementa un "Model"
 *  tutte le classi che saranno create come Modelli dovranno avere come
 *  nome Model<NomeTabella> , es: ModelPersone , ModelCitta , ...
 **/
class ModelBase {

	/**
	 * nome della tabella di riferimento del modello
	 * @var string
	 **/
	protected $tabella = 'anagrafica';

	/**
	 * id relativo al record "modellato" dalla classe Model in uso.
	 *
	 * @var int
	 **/
	public $campo__id = -1;

	public $campo__nome;

	public $campo__cognome;

	public $campo__email;
	
	/**
	 * metodo che riceve una stringa e la ritorna modificata facendo si
	 * che sia ri-formattata in modo da non generare problemi nella 
	 * query in cui verrà usato
	 *
	 * @param  mixed $value valore da "pulire"
	 * 
	 * @return string
	 **/
	public function cleanString($value) {
		return filter_var($value, FILTER_SANITIZE_STRING);
	}

	/**
	 * metodo che riceve un valore e lo ritorna modificato facendo si
	 * che sia ri-formattato in un numero intero
	 *
	 * @param  mixed $value valore da "pulire"
	 *
	 * @return int
	 **/
	public function cleanNumberInt($value) {
		return intval($value);
	}

	/**
	 * metodo che riceve un valore e lo ritorna modificato facendo si
	 * che sia ri-formattato in un numero decimale
	 *
	 * @param  mixed $value valore da "pulire"
	 *
	 * @return float
	 **/
	public function cleanNumberFloat($value) {
		return filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	}

	/**
	 * metodo che permette di estrarre i record corrispondenti alla 
	 * condizione "$campo" = "$valore". il risultato è un array
	 * di oggetto di tipo ModelXXX
	 * 
	 * @param string $campo  nome del campo da usare per la query
	 * @param string $valore valore del campo da usare per la query
	 * 
	 * @return array
	 **/
	public function select($campo, $valore) {
		/**
		 * costruire variabile $sql in modo che rappresenti la query
		 * di estrazione dati, in cui la condizione per l'estrazione
		 * sia riferita alla condizione "$campo" = "$valore".
		 * Esempio: $campo = "aaa" , $valore = "1"
		 *          query => SELECT * FROM tabella WHERE aaa=1
		 **/
		$sql = "SELECT * FROM ".$this->tabella." WHERE $campo = '$valore' ";

		return DB::getRecordsAsArray($sql, $this->tabella);
	}

	/**
	 * metodo che permette di salvare un nuovo record (id=-1) oppure 
	 * aggiornarne uno già esistente (id>0) e di ritornare l'id del 
	 * record modificato/generato
	 *
	 * @return int
	 **/
	public function save() {
		$id = $this->campo__id;
		$campi = array();
		foreach ($this as $prop=>$val) {
			if (substr($prop,0,7) == 'campo__') {
				$campi[ substr($prop,7) ] = $val;
			}
		}
		if ($id==-1) {
			$valori = array();
			foreach ($campi as $v) {
				$valori[] = "'".$v."'";
			}
			$sql = 'INSERT INTO '.$this->tabella.' ('.implode(',',array_keys($campi)).') VALUES ('.implode(',',$valori).')';
		} else {
			$id = $this->cleanNumberInt($id);
			$valori = array();
			foreach ($campi as $k=>$v) {
				$valori[] = $k . " = '".$v."' ";
			}
			$sql = 'UPDATE '.$this->tabella.' SET '.implode(', ',$valori).' WHERE id='.$id;
		}
		return DB::executeAndReturnID($sql);
	}

}
