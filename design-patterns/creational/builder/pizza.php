<?php

class Pizza {
 
    protected $dough;
    protected $sauce;
    protected $topping;
 
    public function setDough($dough) {
        $this->dough = $dough;
    }
 
    public function setSauce($sauce) {
        $this->sauce = $sauce;
    }
 
    public function setTopping($topping) {
        $this->topping = $topping;
    }
 
    public function showIngredients() {
        echo "Dough   : ".$this->dough."<br/>";
        echo "Sauce   : ".$this->sauce."<br/>";
        echo "Topping : ".$this->topping."<br/>";
    }
}
 
abstract class PizzaBuilder {
 
    protected $pizza;
 
    public function getPizza() {
        return $this->pizza;
    }
 
    public function createNewPizzaProduct() {
        $this->pizza = new Pizza();
    }
 
    public abstract function buildDough();
    public abstract function buildSauce();
    public abstract function buildTopping();
}


class HawaiianPizzaBuilder extends PizzaBuilder {
	public function buildDough() {
		$this->pizza->setDough("cross");
	}

	public function buildSauce() {
		$this->pizza->setSauce("mild");
	}

	public function buildTopping() {
		$this->pizza->setTopping("ham + pineapple");
	}
}


class SpicyPizzaBuilder extends PizzaBuilder {
 
    public function buildDough() {
        $this->pizza->setDough("pan baked");
    }
 
    public function buildSauce() {
        $this->pizza->setSauce("hot");
    }
 
    public function buildTopping() {
        $this->pizza->setTopping("pepperoni + salami");
    }
}


class Waiter {
 
    protected $pizzaBuilder;
 
    public function setPizzaBuilder(PizzaBuilder $pizzaBuilder) {
        $this->pizzaBuilder = $pizzaBuilder;
    }
 
    public function getPizza() {
        return $this->pizzaBuilder->getPizza();
    }

    public function constructPizza()
	{
        $this->pizzaBuilder->createNewPizzaProduct();
        $this->pizzaBuilder->buildDough();
        $this->pizzaBuilder->buildSauce();
        $this->pizzaBuilder->buildTopping();
    }
}


class Tester {

    public static function main()
	{
        $oWaiter               = new Waiter();
        $oHawaiianPizzaBuilder = new HawaiianPizzaBuilder();
        $oSpicyPizzaBuilder    = new SpicyPizzaBuilder();

        $oWaiter->setPizzaBuilder($oHawaiianPizzaBuilder);
        $oWaiter->constructPizza();

        $pizza = $oWaiter->getPizza();
        $pizza->showIngredients();

        echo "<br/>";

		$oWaiter->setPizzaBuilder($oSpicyPizzaBuilder);
		$oWaiter->constructPizza();

		$pizza = $oWaiter->getPizza();
		$pizza->showIngredients();
    }
	
}
 
Tester::main();