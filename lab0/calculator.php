<?php
function calculator($str): string
{
    $numbers = array(20);
    $operations = array(10);
    $str1 = '';
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === '+' || $str[$i] === '-') {
            $operations[$i] = $str[$i];
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


    return $str;
}
$str = "12+3-1";
calculator($str);
