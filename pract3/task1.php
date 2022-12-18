<?php
require_once "classBuyer.php";
$Buyers = [
  new buyer('Поликарпов', 'Владимир', 'Владимирович', 'Город Йошкар-ола,советская 156', '4276555432112', '673021458555'),
  new buyer('Урванцев', 'Иван', 'Иванович', 'город Йошкар-Ола,советская 111', '427790890898', '67308971897'),
  new buyer('Петров', 'Иван', 'Иванович', 'Юринский р-он,центральная 122', '555897987897', '4234234242')
];
$alphavit = 'АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ';

function sortCustomersByAlphabet(array $customers): array
{
    $sortOrder = "АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ";
    $sortedArray = [];
    $customersAdded = 0;
    for ($i = 0; $i < strlen($sortOrder); $i++){
        for($j = 0; $j < count($customers); $j++){
            $sortLetter = mb_substr($sortOrder, $i, 1);
            if(preg_match("/^{$sortLetter}[А-ЯA-Zа-яa-z]/i", $customers[$j]->getSurname())){
                $sortedArray[] = $customers[$j];
                $customersAdded++;
            }
        }
        if($customersAdded === count($customers)){
            break;
        } 
    }
    return $sortedArray;
}

$Buyers = sortCustomersByAlphabet($Buyers);
foreach($Buyers as $buyer){
  echo $buyer->ShowBuyers();
}




