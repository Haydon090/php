<?php
function calculator($str):string
{ 
    $chisla = array(20);
    $znaki = array(10);
    $str1 = '';
    for($i = 0; $i < strlen($str);$i++)
    {  
        if($str[$i] == "+" || $str[$i] == "-")
        {
            $znaki[$i] = $str[$i];
        }

    } 
  return $str;
}
$str = "12 + 3 - 1";
calculator($str);

?>