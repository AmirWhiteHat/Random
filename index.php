<?php
$min = 0;
$max = 1000;
$mid = round(($max + $min)/2);
$status = true;
$fake=0;

while(($max-$min)>0){
    $base = explode(" ",microtime())[0];
    $base = str_replace("0.","",$base);
for($i = 0;$i < 7;$i++)
     $fake += $base[$i];
    if((($fake) % 2) ==0)
    {
        $min = $mid;
        $mid = round(($max + $min)/2);
    }else{
        $max = $mid;
        $mid = round(($max + $min)/2);
    }
}

echo $mid;
