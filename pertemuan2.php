<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output pertemuan 2</title>
</head>
<body>
<?php
    //tipe data string
    $judul= ("PENENTUAN DISKON <BR> TOKO PAKAN TERNAK<br> BERKAH LEMBU <br> 
    Jalan Raya Balong-Ponorogo, Karangmojo,Balong <br>");

    echo $judul;
    echo("=========================================<br>");

    //tipe data array
    $jual = array ("Tetes Tebu = 10.000/liter","Pur Burung = 5000","Jagung = 3500/kg",
    "Bekatul = 8000/kg","Pelet ikan = 10000","Ulat Hongkong = 2000","Jangkrik = 5000");

    echo $jual [0]."<br>";
    echo $jual [1]."<br>";
    echo $jual [2]."<br>";
    echo $jual [3]."<br>";
    echo $jual [4]."<br>";
    echo $jual [5]."<br>";
    echo $jual [6]."<br>";
    
    echo("=========================================<br>");
    ?>

<form name="diskon" method ="post" action="pertemuan2.php">
    <table> 
        <tr>
            <td>Perhitungan Diskon</td>
        </tr>
        <tr>
            <td>Jumlah Pembelian Rp.<input name="beli" type="text"></td>
        </tr>
        <tr>
            <td><input type="submit" name="proses" value ="Harga Akhir"></input></td>
        </tr>
    </table>
</form>
<?php
    //type data integer
    error_reporting(0);
    $beli=$_POST['beli'];
    if ($beli!=""){
        $beli=intval($beli);
        $diskon=0;
        if($beli>=1000){
            $diskon=intval(0.5*$beli);
        $jumlah= $diskon;
        $total = ($beli-$diskon);

        echo $total ;
        }
    }
?>
</body>
</html>