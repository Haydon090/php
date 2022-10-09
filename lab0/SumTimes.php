<?php
function SumtTimes(string $str1, string $str2): string
{
    $time1 = array(10);
    $time2 = array(10);
    $result = array(20);

    $time1 = explode(':', $str1);
    $time2 = explode(':', $str2);

    for ($i = 0; $i < count($time1); $i++) {

        $result[$i] = $time1[$i] + $time2[$i];
    }

    if ($result[2] >= 60) {
        $temp = 60 - $time1[2];
        $temp = $time2[2] - $temp;
        $result[2] = $temp;
        $result[1]++;
    }

    if ($result[1] >= 60) {
        $temp = 60 - $time1[1];
        $temp = $time2[1] - $temp;
        $result[1] = $temp;
        $result[0]++;
    }

    if ($result[0] >= 24) {
        $temp =  24 - $time1[0];
        $temp = $time2[0] - $temp;
        $result[0] = $temp;
    }

    return $result[0] . ':' . $result[1] . ':' . $result[2];
}

$str1 = '20:20:50';
$str2 = '10:20:30';
echo SumtTimes($str1, $str2);
