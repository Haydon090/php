<?php
class Snack
{
  public string $name;
  public string $chocolate;
  public $toppings = [];
  public function __construct(string $name,string $chocolate,array $toppings)
  {
    $this->name = $name;
    $this->$chocolate = $chocolate;
    $this->toppings = $toppings;
  }  public function prepare():self
  {
    $toppingsString = '';
    foreach ($this->toppings as $topping) {
      $toppingsString += "$topping\n";
    }
    print("Началось создание snack-a{$this->name}");
    print("Добавляется шоколад {$this->chocolate}");
    print("Добавлены начинок: \n{$toppingsString} ");
    return $this;
  }
  public function cut(): self
    {
        print('Данный Snack нарезают по вертикали.');
        return $this;
    }
}



