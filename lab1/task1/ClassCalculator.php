<?php
class Calculator
{   
    private float $result;

    public function __construct()
    {
    $this->result = 0;
    }
  
    public function minus (float $number):self
    {
     $this->result -= $number;
     return $this;   
    }

    public function product(float $number):self
    {
        $this->result *= $number;
        return $this;   
    }

    public function division(float $number):self
    {
        if($number === 0.0)
        {
            $this->result = 0;
        }
        else
        {
            $this->result /= $number;
        }
        return $this;   
    }

    public function getResult() : float
    {
        return $this->result;
    }

}

$calculator = new Calculator();
echo $calulator->sum(1)->getResult();