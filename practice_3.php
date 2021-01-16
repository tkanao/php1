<?php
$name = "Kanao";
if ($name == "Kanao") {
    echo "私の名前は金尾です";
} else {
    echo "金尾ではありません";
}

$total = 0 ;
for($i = 1; $i < 10001; $i++){
    $total += $i;
}
echo $total;
echo "\n";

$fruits = array("apple", "banana", "melon", "tomato", "cherry");
foreach($fruits as $fruit){
    echo "要素は".$fruit;
    echo "\n";
}

// for文の初めの値を定義する
$start = 1;
// for文の終わりの値を定義する
$end = 100;

for ($i = $start; $i <= $end; $i++){
    // ５で割り切れたら{}内を実行する
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}