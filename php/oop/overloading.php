<?php

class test
{
    public function __construct()
    {

    }
    
    public function __call($method_name , $parameter)
    {
        if($method_name == "overlodedFunction")
        {
            $count = count($parameter);
            switch($count)
            {
                case "1":
                    echo "You are passing 1 argument <br>";
                break;
                case "2":
                    echo "You are passing 2 parameter <br>";
                break;
                default:
                    throw new exception("Bad argument");
            }
        } else {
            throw new exception("Function $method_name does not exists ");
        }
    }
}

$a = new test();
$a->overlodedFunction("ankur");
$a->overlodedFunction("techflirt", "ankur");
