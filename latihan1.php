<?php
require_once __DIR__ . '/helpers.php';

echo "Konversi Suhu: " . konversiCelciusKeFahrenheit(30) . " °F";
echo "<br>";

echo "Predikat Nilai: " . tentukanStatusNilai(80);
echo "<br>";

echo "Total Belanja: " . formatRupiah(hitungTotal(15000, 3));
?>