<?php

class Calculator
{
    function sum($fNumber, $sNumber)
    {
        return $fNumber + $sNumber;
    }

    function sub($fNumber, $sNumber)
    {
        return $fNumber - $sNumber;
    }

    function mul($fNumber, $sNumber)
    {
        return $fNumber * $sNumber;
    }

    function div($fNumber, $sNumber)
    {
        if ($sNumber == 0)
            throw new Exception("Khong co phep chia cho 0");
        return $fNumber / $sNumber;
    }

}

?>
