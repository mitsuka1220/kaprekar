<?php
// 入力を受け取る
$n = trim(fgets(STDIN));

while (true) {
    for ($i = $n; $i <= 1000000000; $i++) {
        if (kaprekar($i)) {
            echo $i . "\n";
            return true;
        }
    }
}
/**
 * @param $number
 * @return bool
 */
function kaprekar($number)
{
    $string = sprintf($number);

    $array = str_split($string);
    $array2 = $array;

    sort($array);
    $minArray = implode('', $array);
    rsort($array);
    $maxArray = implode('', $array);

    $result = $maxArray - $minArray;

    return $result == $number;
}
