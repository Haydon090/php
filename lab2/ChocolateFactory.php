<?php
require_once 'Snack';
abstract class chocolateFactory{
  public abstract function createSnack(string $SnackType): Snack;
public function orderSnack(string $type):void
{
    $snack = $this->createSnack($type);
    $snack->prepare()->cut();
}


}
