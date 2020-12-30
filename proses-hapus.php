

<?php
// memanggil class siswa
require_once "function/siswa.php";
// instance objek siswa
$siswa = new siswa();

$nis = $_GET['id'];

$siswa->delete($nis);						
?>