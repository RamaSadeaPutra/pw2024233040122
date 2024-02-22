<?php 

$first ="Sadea";
$last="Putra";




// $no = 1;
// while ($no <= 10){
//     echo $no++;
for ($no = 1; $no <= 100; $no++ ){
    if ($no % 3 == 0 && $no %5 == 0){
        echo $first.$last ."</br>";
    }else if ($no % 3 === 0 ){
        echo $first ."<br>";
    }else if ($no % 5 === 0){
        echo $last."<br>";
    }else{
        echo $no ."<br>";
    }
    
}








?>