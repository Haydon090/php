<?php
// Работу выполнил студент группы П-31
// Поликарпов Владимир
require_once('Date.php');
$date1 = new Date(10, 6, 2000);
$date2 = new Date(30, 12, 2000);
echo $date1->format('ru') . PHP_EOL; //13.12.2022
echo $date2->format('en') . PHP_EOL; //2022-12-31
echo 'Разница равна: ' . $date1->diffDay($date2) . ' дней' . PHP_EOL; //7954
echo $date1->minusDay(5, 'ru') . PHP_EOL; //8.12.2022
echo $date1->getDayOfWeek() . PHP_EOL; //Tuesday
echo $date2->getDayOfWeek(); //Saturday