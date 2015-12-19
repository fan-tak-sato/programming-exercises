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

    /**
     * @var Pizza
     */
    protected $pizza;

    /**
     * @return mixed
     */
    public function getPizza() {
        return $this->pizza;
    }
 
    public function createNewPizzaProduct() {
        $this->pizza = new Pizza();
    }
 
    abstract public function buildDough();
    abstract public function buildSauce();
    abstract public function buildTopping();
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

    /**
     * @param PizzaBuilder $pizzaBuilder
     */
    public function setPizzaBuilder(PizzaBuilder $pizzaBuilder) {
        $this->pizzaBuilder = $pizzaBuilder;
    }

    /**
     * @return mixed
     */
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

echo "<h1>Pizza Builder (pattern) test</h1>";

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