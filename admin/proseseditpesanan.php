<?php 

session_start();

// pemeriksaan session login
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}


    //menghubungkan ke database
    include 'function.php';

    //menangkap data yang dikirim dari form
    $id =$_POST['id'];
    $nama=$_POST["nama"];
    $email=$_POST["email"];
    $alamat=$_POST["alamat"];
    $no_hp=$_POST["no_hp"];
    $layanan=$_POST["layanan"];
    $tanggal = $_POST["tanggal"];
    $paket = $_POST["paket"];

    if ($paket == "sapphire") {
        $harga = 13000000;
    } else if ($paket == "emerald") {
        $harga = 15000000;
    } else if ($paket == "diamond") {
        $harga = 18000000;
    } else if ($paket == "elegan") {
        $harga = 4000000;
    } else if ($paket == "mewah") {
        $harga = 5500000;
    } else if ($paket == "glamour") {
        $harga = 7000000;
    } else if ($paket == "Natural Elegance") {
        $harga = 1000000;
    } else if ($paket == "Glamourous Diva") {
        $harga = 2500000;
    } else if ($paket == "Royal Family Special") {
        $harga = 4000000;
    } else {
        $harga = 0;
    }

    //update ke database
    mysqli_query($conn,"update services set id='$id', nama='$nama', email='$email', layanan='$layanan',alamat='$alamat',no_hp='$no_hp', paket='$paket', harga='$harga', tanggal_pemesanan='$tanggal' where id='$id'");

    //mengalihkan ke halaman kembali
    header ("location:index.php?sukses=true");
?>