<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembelian ibnu Store</title>
</head>
<body>
    <table border="1">
        <center><h2>Data Pembelian Ibnu Store</h2></center>
    <tr>
        <th width=1%>No</th>
        <th>Tanggal</th>
        <th>Nama Barang</th>
        <th>Jumlah Barang</th>
        <th>Total Pembelian</th>
        <th>Bayar</th>
        <th>Kembalian</th>
    </tr>

 


<?php 
include "koneksi.php";

$no=0;
$data =  mysqli_query($koneksi, "SELECT * FROM data_struk");
while ($datanya= mysqli_fetch_array($data)){
    $no++; 

?>

<tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $datanya['tanggal'];?></td>
    <td><?php echo $datanya['nama_barang'];?></td>
    <td><?php echo $datanya['jumlah_barang'];?></td>
    <td><?php echo $datanya['total_pembelian'];?></td>
    <td><?php echo $datanya['bayar'];?></td>
    <td><?php echo $datanya['kembalian'];?></td>

</tr>

<?php
}
?>
   </table>
</body>
</html>