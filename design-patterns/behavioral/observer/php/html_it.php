<?php

/**
 * la classe Observer implementa l’interfaccia SplObserver 
 * e introduce i due metodi che verranno invocati al momento 
 * della registrazione di una modifica di stato del subject
 */
class Observer implements SplObserver {
    
    protected $papero;
    
    public function __construct($papero) {
        $this->papero = $papero;
    }
    
    /**
     * il nome della classe viene concatenato al costruttore
     * 
     * @return type
     */
    public function __toString() {
        return "(".__CLASS__.") ".$this->papero;
    }
    
    /**
     * il metodo update() introduce i metodi richiamati in seguito all’evento in cui è coinvolto il subject
     * 
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject) {
        
        if ($subject->menoDiMille() == true) {
            echo $this . ": - Te li presto. <br />";
        }
        
        if ($subject->piuDiMille() == true) {
            echo $this . ": - Ma in due rate. <br />";
        }
    }
}


/**
 * il secondo observer viene definito all’interno di una sottoclasse che estende 
 * la classe del primo observer
 */ 
class ObserverB extends Observer {
        public function update(SplSubject $sub) {
            if ($sub->piuDiMille() == true) {
            echo $this . ": - Non ti do un centesimo. <br />";
        }
    }
}

  
/**
 * la classe Subject implementa l’interfaccia SplSubject
 */
class Subject implements SplSubject {
    
    private $papero;
    private $observers = array();
    private $menodimille = false;
    private $piudimille = false;
    
    public function __construct($papero) {
        $this->papero = $papero;
    }
    
    public function __toString() {
        return "(".__CLASS__.") ".$this->papero;
    }
    
    /**
     * il metodo attach() attribuisce gli observers al subject
     * 
     * @param SplObserver $obs
     */
    public function attach(SplObserver $obs) {
        $this->observers[] = $obs;
    }
    
    /**
     * il metodo detach() dissocia gli observers al subject
     * 
     * @param SplObserver $obs
     */
    public function detach(SplObserver $obs) {
        $this->observers = array_diff($this->observers, array($obs));
    }
    
    /**
     * notify() segnala il verificarsi di un evento a carico del subject
     */
    public function notify() {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }
    
    /**
     * definizione dei valori di ritorno
     * 
     * @param type $val
     */
    public function chiedePiuDiMille($val) {
        $this->piudimille = $val;
        if ($val == true) {
            echo $this . ": - Mi servono 1.200 Dollari. <br />";
        }
        $this->notify();
    }
    
    public function piuDiMille() {
        return $this->piudimille;
    }
    
    public function chiedeMenoDiMille($val) {
        $this->menodimille = $val;
        if ($val == true) {
            echo $this . ": - Mi servono 500 Dollari. <br />";
        }
        $this->notify();
    }
    
    public function menoDiMille() {
        return $this->menodimille;
    }
}

/**
 * Istanza delle classi e generazione degli oggetti 
 * associati a subject ed observers
 */
$observer = new Observer("Paperoga");
$observerB = new ObserverB("Paperone");
$subject = new Subject("Paperino");
# invocazione dei metodi
$subject->attach($observer);
$subject->attach($observerB);
$subject->chiedeMenoDiMille(false);
$subject->chiedeMenoDiMille(true);
$subject->chiedePiuDiMille(true);
$subject->detach($observerB);
$subject->chiedePiuDiMille(true);