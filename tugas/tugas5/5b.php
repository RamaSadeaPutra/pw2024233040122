<?php 
$bulan = ["Januari","Febuari","Maret"];
print_r($bulan);

echo "</br>";
echo"----------------------------------------------------------------";
echo"</br>";
echo"Array Pop :";
// UNTTUK MENGHAPUS ELEMEN TERAKHIR PADA ARRAY
echo"</br>";
$setelah = array_pop($bulan);  
print_r($bulan);
echo "</br>";
echo"----------------------------------------------------------------";
echo"</br>";
echo"Array Push :";
//MENAMBAH ELEMEN TERAKHIR PADA ARRAY
echo"</br>";
$setelah =array_push($bulan,"Maret","April","Mei","Juni");
print_r($bulan);
echo "</br>";
echo"----------------------------------------------------------------";
echo"</br>";
echo"Array Shift :";
//MENGHAPUS AWAL ELEMEN PADA ARRAY
echo"</br>";
$setelah =array_shift($bulan);
print_r($bulan);
echo "</br>";
echo"----------------------------------------------------------------";
echo"</br>";
echo"Array Unshift :";
//MANMBAH AWAL ELEMEN PADA ARRAY
echo"</br>";
$setelah=array_unshift($bulan,"Januari");
print_r($bulan);
echo "</br>";
echo"----------------------------------------------------------------";
echo"</br>";
echo"Array Slice :";
//MEMILIH SEBAGIAN ELEMEN MENGGUNAKAN INDEXS
echo"</br>";
$setelah = array_slice($bulan,0,3);
print_r($bulan);
?>