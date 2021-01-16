<?php
function double($number){
    echo $number*2 ;
}
echo double(3);
echo "\n";

function ab($a, $b){
    echo $a + $b;
}
echo ab(4, 8);
echo "\n";

$D = [1, 3, 5, 7, 9];
function c($arr) {
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
echo c($D);
echo "\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array($D);
echo "\n";

$text = '<p>Test paragraph.</p><a>Other text</a>';
echo strip_tags($text, '<p>') . "\n";
array_push($D, 11, 12);
print_r($D);

$E = array_merge($D, $D);
print_r($E);
$time1 = time();
echo $time1 . "\n";
$time2 = mktime(0, 0, 0, 11, 23, 1997);
echo $time2 . "\n";
echo date('Y/m/d H:i:s');
echo date('Y/m/d H:i:s', 10);
