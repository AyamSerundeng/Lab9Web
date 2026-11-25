<?php
require_once __DIR__ . '/helpers.php';

echo "Konversi Suhu: " . konversiCelciusKeFahrenheit(100) . " °F";
echo "<br>";

echo "Predikat Nilai: " . tentukanStatusNilai(90);
echo "<br>";

echo "Total Belanja: " . formatRupiah(hitungTotal(25000, 4));
?>