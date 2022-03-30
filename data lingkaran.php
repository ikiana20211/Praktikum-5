<?php
// memanggil file atau class_lingkaran.php 
require_once 'class_lingkran.php';
echo "Nilai PHI adalah = " . Lingkaran:: PHI ; 
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);
echo "<br/>";
// menghitung luas lingkaran menggungakn fumgsi get luas
echo 'Luas Lingkaran 1 adalah = ' . $lingkar1->getluas();
echo 'Luas Lingkaran 2 adalah = ' . $lingkar2->getluas();
echo '<br/>';

// menghitung keliling ,ingkaran menggunakan fungsi get keliling
echo 'Keliling Lingkaran 1 adalah = ' . $lingkar1->getkeliling();
echo 'Keliling Lingkaran 2 adalah = ' . $lingkar2->getkeliling();

?>