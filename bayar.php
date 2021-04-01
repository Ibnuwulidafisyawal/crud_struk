<?php


        include "koneksi.php";
        $total=$_GET['total_harga'];
        $barang= $_GET['barang'];
        $tgl_beli= $_GET['tgl_beli'];
        $jumlah_barang= $_GET['jumlah_barang'];
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar Ibnu Store</title>
</head>
<body>  
        <center><h2>Pembayaran Ibnu Store</h2></center>
        <center>
        <form action="" method="post">
        <table>
            <tr>
                <th>Total Harga Pembelian</th>
                <td>:</td>
                <td><input type="text" value="<?php echo $_GET['total_harga']; ?>" readonly></td>
            </tr>

            <tr>
                <th>Bayar</th>
                <td>:</td>
                <td><input type="text" name="bayar"></td>
            </tr>

            <tr>
                <td>
                    <button type="submit" name="beli">Submit</button>
                </td>
            </tr>
        </table>
        </form>
        </center>



        
        <?php 

        $bayar= @$_POST['bayar'];
        $totalKembali = $bayar - $total;

        $nama_barang= $_GET['barang'];
        $jumlah= $_GET['jumlah_barang'];
        
        if (isset($_POST['beli'])) {
            // $insert = mysqli_query($koneksi, "INSERT INTO data_struk(tanggal,nama_barang,jumlah,total_pembelian,bayar,kembalian) VALUES ('$tanggal','$nama_barang','$jumlah','$total','$bayar','$totalKembali')");
            
            $insert = mysqli_query($koneksi, "INSERT INTO `data_struk`(`tanggal`, `nama_barang`, `jumlah_barang`, `total_pembelian`, `bayar`, `kembalian`) VALUES ('$tgl_beli','$barang','$jumlah_barang','$total','$bayar','$totalKembali')");
            echo 'i';
            echo $insert;
            if ($insert == 1) {
                header("location:struk.php?subtotal=$totalKembali&barang=$barang&tgl_beli=$tgl_beli&total_harga=$total&jumlah_barang=$jumlah_barang&bayar=$bayar");
            } else {
                echo 'Cek kembali input anda';
            }
        }

       
        ?>
</body>
</html>
