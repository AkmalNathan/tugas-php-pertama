<?php

//data array antrian
$antrian=array ("B 1234 AA", "D 5678 BB", "F 9101 CC", "D 4637YH", "D 6758 IU", "A 5654 KL");

//menampilkan data antrian
echo "<pre>";
print_r ($antrian);
echo "<pre>";

//tambahkan kendaraan baru
array_push($antrian, "Z 2222 DD", "E 3333 EE");

echo "<pre>";
print_r ($antrian);
echo "<pre>";

//menghapus pakai fungsi unset
unset($antrian[0]);

echo "<pre>";
print_r ($antrian);
echo "<pre>";

//menambahkan ke paling awal 
array_unshift($antrian, "B 9999 VIP");

echo "<pre>";
print_r ($antrian);
echo "<pre>";

//mengurutkan secara ascending
sort($antrian);

echo "<pre>";
print_r ($antrian);
echo "<pre>";
