<?php
class buyer{

 private string $name;
  private string $surname;
  private string $patronymic;
  private string $adres;
  private string $creditCardNumber;
  private int $bankAccountNumber;

  public function __construct($surname,$name,$patronymic,$adres,$creditCardNumber,$bankAccountNumber)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->patronymic = $patronymic;
    $this->adres = $adres;
    $this->creditCardNumber = $creditCardNumber;
    $this->bankAccountNumber = $bankAccountNumber;
  }
 public function setName(string $newName):void
 {
    $this->name = $newName;
 }
 public function setSurname(string $newSurename):void
 {
    $this->surname = $newSurename;
 }
 public function setPatronymic(string $newPatronymic):void
 {
    $this->patronymic = $newPatronymic;
 }
 public function setAdres(string $newAdres):void
 {
    $this->adres = $newAdres;
 }
 public function setCreditCardNumber(string $newCreditCardNumber):void
 {
    $this->creditCardNumber = $newCreditCardNumber;
 }
 public function setBankAccountNumber(int $newBankAccountNumber):void
 {
    $this->bankAccountNumber = $newBankAccountNumber;
 }
 public function getName():string
 {
    return $this->name;
 }
 public function getSurname():string
 {
    return $this->surname;
 }
 public function getPatronymic():string
 {
    return $this->patronymic;
 }
 public function getAdres():string
 {
    return $this->adres;
 }
 public function getCreditCardNumber():string
 {
    return $this->creditCardNumber;
 }
 public function getBankAccountNumber():int
 {
    return $this->bankAccountNumber;
 }
 public function ShowBuyers():string
 {
  return 'ФИО: ' . $this->surname . ' ' . $this->name.' ' . $this->patronymic . PHP_EOL . 'Адрес: ' . $this->adres. PHP_EOL .
  'Номер кредитной карты: ' . $this->creditCardNumber . PHP_EOL . 'Номер банковского счета: ' . $this->bankAccountNumber . PHP_EOL;
 }
 

}



