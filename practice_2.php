<?php
$a = 3 ;
$b = 7 ;
echo $a + $b ;

$array = ["１月", "２月", "３月", "４月", "５月", "６月", 
"７月", "８月", "９月", "１０月", "１１月", "１２月"];
echo $array[7] ;

$hello = "Hello";
$name = "Kanao";
$world = "'s World";
echo $hello . $name . $world;

$tech_boost ="tech";
$tech_boost .='boost';
echo $tech_boost;

$calendar_2018 = [
    "January" => "１月", 
    "February" => "２月", 
    "March" => "３月", 
    "April" => "４月", 
    "May" => "５月", 
    "Jun" => "６月", 
    "July" => "７月", 
    "August" => "８月",
    "September" => "9月", 
    "October" => "10月", 
    "November" => "11月", 
    "December" => "12月"
    ];
    
    //12月を表示する
    echo $calendar_2018["December"];