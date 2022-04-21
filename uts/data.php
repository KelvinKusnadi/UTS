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

<h3>Data Pasien</h3>

<table border="1">
    <tr> 
        <th>No</th>
        <th>Positif</th>
        <th>Di Rawat</th>
        <th>Sembuh</th>
        <th>Meninggal</th>
    </tr>

    <?php
$No=1;
include "koneksi.php";
$ambildata = mysqli_query($koneksi, "select * from pasien");
while ($tampil = mysqli_fetch_array($ambildata))
{
    echo "
    <tr>
    <td>$no</td>
    <td>$tampil[Positif]</td>
    <td>$tampil[Di_Rawat]</td>
    <td>$tampil[Sembuh]</td>
    <td>$tampil[Meninggal]</td>
    </tr> "; 
    $No++;
}
    ?>
</table>