<?php 
$namaToko="minimarket natan sejahtera";
$lokasiToko="kampung sukadana";

/* Harga Produk */
$hargaBeras = 75000;
$hargaMinyak = 18000;
$hargaGula = 14000;
$hargaDaging = 50000;
$hargaTepung = 17000;
$hargaMieInstan = 104000;

/* Jumlah Pembelian Pelanggan Kedua */
$jumlahMinyak = 7;
$jumlahMie = 2;
$jumlahDaging = 5;
$jumlahTepung = 1;
$jumlahGula = 2.5;
$jumlahBeras = 3;

/* Total per produk */
$totalMinyak = $hargaMinyak * $jumlahMinyak;
$totalMie = $hargaMieInstan * $jumlahMie;
$totalDaging = $hargaDaging * $jumlahDaging;
$totalTepung = $hargaTepung * $jumlahTepung;
$totalGula = $hargaGula * $jumlahGula;
$totalBeras = $hargaBeras * $jumlahBeras;

/* Total Belanja */
$totalBelanja = $totalMinyak + $totalMie + $totalDaging + $totalTepung + $totalGula + $totalBeras;

/* Pajak dan Plastik */
$pajakPersen = 11;
$biayaPlastik = 2000;

$pajak = ($totalBelanja * $pajakPersen) / 100;

$totalAkhir = $totalBelanja + $pajak + $biayaPlastik;

/* Output */
echo "<h2>$namaToko</h2>";
echo "Lokasi: $lokasiToko <hr>";

echo "7 Minyak Goreng = Rp $totalMinyak <br>";
echo "2 Dus Mie Instan = Rp $totalMie <br>";
echo "5 Kg Daging = Rp $totalDaging <br>";
echo "1 Kg Tepung = Rp $totalTepung <br>";
echo "2.5 Kg Gula = Rp $totalGula <br>";
echo "3 Kg Beras = Rp $totalBeras <br>";

echo "<hr>";

echo "Total Belanja: Rp $totalBelanja <br>";
echo "Pajak (11%): Rp $pajak <br>";
echo "Biaya Plastik: Rp $biayaPlastik <br>";

echo "<strong>Total Akhir: Rp $totalAkhir</strong>";

?>