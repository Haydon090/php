<?php
  function calculator(string $str) : string{
    $operations = [];
    $numbers = [];
    

    for($i = 0; $i < strlen($str); $i++){
      if($str[$i] == '+' || $str[$i] == '-'){
        $operations[$i] = $str[$i];
        
      }
    }
    
    $error = '0123456789+-';
    for($i = 0; $i < strlen($str); $i++){
      if(!strpos($error, $str[$i])){
        return 'Ошибка ввода';
     }
    }

    $numbers = explode('+', $str);
    $numberOfOperations = 0;
    $temp = '';
    $sum = 0;

    foreach($numbers as $num){
      $minusPos = strpos($num, '-');
      if($minusPos){
        $numbersWithMinus = explode('-', $num);
        foreach($numbersWithMinus as $keyMinus => $numMinus){
          if($keyMinus === 0){
            $temp = $numMinus;
            $numberOfOperations++;
          }
          else{
            $temp = $temp - (int)$numMinus;
            $numberOfOperations++;
          }
        }
        $sum += $temp;
      }
      else{
        $sum += $num;
        $numberOfOperations++;
      }
    }
    return $sum;
  }
  echo calculator('1+4-3');