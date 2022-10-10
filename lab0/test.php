<?php
function calculator(string $str): string
{   $result = [];
    $numbers = [];
    $operations = [];
    $operationsCount = 0;
    $temp = '';

    for($i = 0; $i < strlen($str); $i++){
        if($str[$i] === '+' || $str[$i] === '-'){
          $operations[$operationsCount] = $str[$i];
          $operationsCount++;
        }
      }
    

    if (count($operations) > 4) {
        return 'Ошибка ввода';
    }
    $correctInput = '0123456789+-';
    for ($i = 0; $i < strlen($str); $i++) {
        if (!strpos($correctInput, $str[$i])) {
            return 'Ошибка ввода';
        }
    }

    preg_match_all('!\d+!',$str,$numbers);
    var_dump($numbers);
    for($i = 0;$i <= count($numbers);$i++){
     $numbers[$i] = $temp;
        echo $temp;
    }
    /*for($i = 0;$i <= count($numbers);$i++)
    {   
        if($operations[$i] = '+')
        {
            $result[$i] = (int)$numbers[$i] + (int)$numbers[$i + 1];
        }
        if($operations[$i] = '-')
        {
           $result[$i] = (int)$numbers[$i] - (int)$numbers[$i + 1];
        }
        
    }*/
    
    
    return $str;
}
$str = "12 + 3 - 1";
calculator($str);
