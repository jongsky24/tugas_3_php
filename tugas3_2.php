<?php
echo "Tabungan Awal = Rp 150000 <br>";
echo "Bunga Setahun = 12.5% <br>";
echo "Total Tabungan Setahun = ? <br>";
echo "Jawaban : ";

$x = 150000;
$y = 12.5;

$z = $x + ($x * $y / 100);
echo "Rp $z";
