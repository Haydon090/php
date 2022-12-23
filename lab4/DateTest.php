<?php

require_once __DIR__ . "/../lab1/task2/Date.php";
require_once "vendor/autoload.php";
use PHPUnit\Framework\TestCase;
class dateTest extends TestCase
{
  private Date $date;
  public function setUp():void
  {
    $this->date = new Date(10,6,2000);
  
  }
  public function testFormat():void
  {
    $this->assertEquals("10.6.2000", $this->date->Format("ru"));
  }
  public function testDiffday():void
  {
    $date2 = new Date(11,6,2000);
    $this->assertEquals("1", $this->date->diffDay($date2));
  }
  public function testMinusDay():void
  {
    $this->assertEquals("09.06.2000", $this->date->minusDay(1, "ru"));
  }
  public function testGetDayOfWeek():void
  {
    $this->assertEquals("Saturday", $this->date->getDayOfWeek());
  }
  public function testConstruct():void
  {
    $this->expectException("InvalidArgumentException");
    $date3 = new Date(50, 13, 3333333);

  }

}