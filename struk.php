<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian</title>
</head>
<body>
<div><a href="data.php " target="_blank">Lihat Data Pembelian Ibnu Store</a></div>
<div><a href="index.php">Tambah Pembelian</a></div>
   <center><h2>Struk Pembelian </h2></center> 
<hr>

<center><h3>Ibnu Store</h3> </center>
<center>
<?php 

echo "<br><b>Tanggal : </b> ".$_GET['tgl_beli'];
echo "<br><b>Nama barang</b> : ".$_GET['barang'];
echo "<br><b>Jumlah Barang</b> :". $_GET['jumlah_barang'];
echo "<br><b>Total Pembelian </b> :". $_GET['total_harga'];
echo "<br><b>Bayar </b> :". $_GET['bayar'];
echo "<br><b>Total Kembalian </b> : ".$_GET['subtotal'];



echo "<script window:alert>print</script>"

?>


</center>
<script>
    window.print()
</script>
</body>
</html>






