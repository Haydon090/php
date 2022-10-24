<?php
function sumtTimes(string $str1, string $str2): string
{
    $time1 = [];
    $time2 = [];
    $result = [];

    $time1 = explode(':', $str1);
    $time2 = explode(':', $str2);

    $result[2] = $time1[2] + $time2[2];
    $result[1] = $time1[1] + $time2[1];
    $result[0] = $time1[0] + $time2[0];

    //часы
    if ($result[0] > 24) {
        while ($result[0] > 24) {

            $result[0] = $result[0] - 24;
        }
    }
    if ($result[0] === 24) {
        $result[0] = 0;
    }

    //минуты
    if ($result[1] > 60) {
        while ($result[1] > 60) {
            $result[1] = $result[1] - 60;
            $result[0]++;
        }
    }
    if ($result[1] === 60) {
        $result[1] = 0;
        $result[0]++;
    }
    //секунды
    if ($result[2] === 60) {
        $result[2] = 0;
        $result[1] = $result[1] + 1;
    }
    if ($result[2] > 60) {
        while ($result[2] > 60) {
            $result[2] = $result[2] - 60;
            $result[1]++;
        }
    }

    return $result[0] . ':' . $result[1] . ':' . $result[2];
}

$str1 = '50:50:50';
$str2 = '50:50:50';

echo sumtTimes($str1, $str2);
