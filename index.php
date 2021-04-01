<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Struk</title>

</head>

<body>  
    <center> <h2> Ibnu Store<h2></center>
    <center>
       
    <table border="1" width="800px" height="360px">
        <thead>
            <tr>
                <th bgcolor="red">No</th>
                <th bgcolor="red">Nama Barang</th>
                <th bgcolor="red">Harga Barang</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td bgcolor="yellow">1</td>
                <td bgcolor="yellow">Kursi</td>
                <td bgcolor="yellow"> Rp.200.000</td>
            </tr>

            <tr>
                <td bgcolor="yellow">2</td>
                <td bgcolor="yellow">Meja</td>
                <td bgcolor="yellow">Rp.350.000</td>
            </tr>
            <tr>
                <td bgcolor="yellow">3</td>
                <td bgcolor="yellow">Lemari</td>
                <td bgcolor="yellow">Rp.700.000</td>
            </tr>

            <tr>
                <td bgcolor="yellow">4</td>
                <td bgcolor="yellow">Panci</td>
                <td bgcolor="yellow">Rp.80.000</td>
            </tr>

            <tr>
                <td bgcolor="yellow">5</td>
                <td bgcolor="yellow">Kompor</td>
                <td bgcolor="yellow">Rp.150.000</td>
            </tr>
            

        </tbody>

    </table>
    </center>
    <hr>
<form action="" method="post">
    
<center>
<h3>Form Data Pembelian Ibnu Store</h3>  
<table border="0">
        <thead>
           
        </thead>
        <tbody>
            <tr>
                <th>Pilih Barang </th>
                <td>:</td>
                <td>
                    <select name="barang" id="">
                        <option value="">Pilih barang</option>
                        <option value="kursi">Kursi</option>
                        <option value="meja">Meja</option>
                        <option value="lemari">Lemari</option>
                        <option value="panci">Panci</option>
                        <option value="kompor">Kompor</option>
                    </select>
            </td>
            </tr>

            <tr>
                <th>Tanggal Beli</th>
                <td>:</td>
                <td><input type="date" name="tanggal"></td>
          </tr>

            <tr>
                <th>Jumlah Barang</th>
                <td>:</td>
                <td><input type="number" name="jumlah_barang"></td>
            </tr>

            <!-- <tr>
                <th>Total Harga</th>
                <td>:</td>
                <td><input type="number" name="total_harga"></td>
            </tr> -->

        <tr>
            <td>
                <button type="submit" name="hitung">Submit</button>
            </td>
        </tr>
        </tbody>

    </table>
    </center>
</form>

<?php 

$barang= @$_POST['barang'];
$tgl_beli= @$_POST['tanggal'];
$jumlah_barang= @$_POST['jumlah_barang'];
$harga= 0;
$totalharga= 0;
if(isset($_POST['hitung'])){
  

    if($barang == "kursi"){
        $harga = 200000;
        $totalharga = $jumlah_barang*$harga;
       
    }

    if($barang == "meja"){
        $harga = 350000;
        $totalharga = $jumlah_barang*$harga;
       
    }
    if($barang == "lemari"){
        $harga = 700000;
        $totalharga = $jumlah_barang*$harga;
       
    }
    if($barang == "panci"){
        $harga = 80000;
        $totalharga = $jumlah_barang*$harga;
       
    }
    if($barang == "kompor"){
        $harga = 150000;
        $totalharga = $jumlah_barang*$harga;
       
    }
header("location:bayar.php?total_harga=$totalharga&barang=$barang&tgl_beli=$tgl_beli&jumlah_barang=$jumlah_barang");

  
}


?>
</body>
</html>