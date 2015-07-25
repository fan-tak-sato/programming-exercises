<?php

function rpn($params)
{
    $params = explode(' ', $params);
    $count = sizeof($params);
    $result = null;
    $numeric = array();

    for($i = 0; $i < $count; $i++)
    {
        if (is_numeric($params[$i])) {
            $numeric[] = $params[$i];
        } else {

            switch ($params[$i])
            {
                case "+":
                        $result = array_pop($numeric) + array_pop($numeric);
                break;

                case "-":
                        $result = array_pop($numeric) - array_pop($numeric);
                break;

                case "*":
                        $result = array_pop($numeric) * array_pop($numeric);
                break;

                case "/":
                        $result = array_pop($numeric) / array_pop($numeric);
                break;
            }
            array_push($numeric, $result);

        }
    }

    return $result;
}

echo "Input: 5, 8, 3, + *. Result: ".rpn("5 8 3 + *")."<br>";
echo "Input: 1 2 + 4 * 3 +. Result: ".rpn("1 2 + 4 * 3 +")."<br>";
echo "Input: 1 2 3 + -. Result: ".rpn("1 2 3 + -")."<br>";
