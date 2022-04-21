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
<form action="" method="">
    <table>
        <tr>
            <td width="200">Jumlah Positif </td> 
            <td><input type="text" name="Positif"></td>
        </tr>
        <tr>
        <td width="200">Jumlah Di Rawat </td> 
            <td><input type="text" name="Di_Rawat"></td>
        </tr>
        <tr>
        <td width="200">Jumlah Sembuh </td> 
            <td><input type="text" name="Sembuh"></td>
        </tr>
        <tr>
        <td width="200">Jumlah Meninggal </td> 
            <td><input type="text" name="Meninggal"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="Submit" value="Simpan" name="proses">
            </td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into Pasien set
    Positif = '$_POST[Positif]', 
    Di_Rawat = '$_POST[Di_Rawat]', 
    Sembuh = '$_POST[Sembuh]', 
    Meninggal= '$_POST[Meninggal]' ");

    echo "Data Tersimpan";
}
?>