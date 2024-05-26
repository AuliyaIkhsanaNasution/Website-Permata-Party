<?php 
session_start();
    require "koneksi.php";

    if (isset($_SESSION["user"])) {
        $user = $_SESSION["user"];
      }

    $nama=$_POST["nama"];
    $email=$user;
    $alamat=$_POST["alamat"];
    $no_hp=$_POST["no_hp"];
    $tanggal = $_POST["tanggal"];
    $paket = $_POST["paket"];
    $layanan = "make up";

    if ($paket == "Natural Elegance") {
        $harga = 1000000;
    } else if ($paket == "Glamourous Diva") {
        $harga = 2500000;
    } else if ($paket == "Royal Family Special") {
        $harga = 4000000;
    } else {
        $harga = 0;
    }

    mysqli_query($conn,"insert into temp (id, nama, email, alamat,no_hp, layanan, paket, harga, tanggal_pemesanan) values ('', '$nama', '$email', '$alamat','$no_hp', '$layanan', '$paket', $harga, '$tanggal')");

    header("Location: makeup.php?sukses=true#card");


?>