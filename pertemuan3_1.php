<?php
    #error_reporting(0);
    session_start();
    $nilai_pertama = $_POST ["nilaipertama"];
    $opr = $_POST ["operator"];
    $nilai_kedua = $_POST ["nilaikedua"];
    if ($opr=='*'){
        $hasil=$nilai_pertama*$nilai_kedua;
        print("hasil perkalian = <b>$hasil</b>");
    }elseif($opr=='/'){
        $hasil=$nilai_pertama/$nilai_kedua;
        print("hasil pembagian = <b>$hasil</b>");
    }elseif($opr=='%'){
        $hasil=$nilai_pertama%$nilai_kedua;
        print("hasil modulus = <b>$hasil</b>");
    }elseif($opr=='+'){
        $hasil=$nilai_pertama+$nilai_kedua;
        print("hasil penjumlahan = <b>$hasil</b>");
    }elseif($opr=='-'){
        $hasil=$nilai_pertama-$nilai_kedua;
        print("hasil pengurangan = <b>$hasil</b>");
    }          
    $_SESSION ["nilai_pertama"]=$_POST['nilaipertama'];
    $_SESSION ["opr"]=$_POST['operator'];
    $_SESSION ["nilai_kedua"]=$_POST['nilaikedua'];
    $_SESSION ["hasil"]=$hasil;
?>
