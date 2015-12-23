<?php

class Fibonacci
{
    /**
     * @param int $n
     * @return int
     * @throws Exception
     */
    public function calculate($n)
    {
        if ($n <= 0) {
            throw new Exception("Fibonacci can be calculated only with positive integers greater than 0");
        }

        if ($n == 1 || $n == 2) {
            return 1;
        } else {
            return $this->calculate($n - 1) + $this->calculate($n - 2);
        }
    }
}

$fibonacci = new Fibonacci();

$num = 10;
for($i=1; $i<=$num; $i++) {
    echo $fibonacci->calculate($i)."<br>";
}