<HTML>
<HEAD>
<TITLE> UTS/Pemrograman Web 2/Kelvin Kusnadi </TITLE>
</HEAD>
<BODY>
<center>
<h2>
<?php
$sekarang = getdate();
$bulan = $sekarang['month'];
$hari = $sekarang ['mday'];
$tahun = $sekarang ['year'];
$jam = $sekarang['hours'];
?>
</h2>
<h2> Data Pemantaun Covid-19 wilayah Jawa Barat</h2>
<h2> Per <?php echo "$hari $bulan $tahun"; ?></h2>
<h2> Kelvin Kusnadi/191011402059</h2>
</BODY>
</HTML>
