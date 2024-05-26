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
    $saran=$_POST["saran"];


    //update ke database
    mysqli_query($conn,"update help set id='$id', nama='$nama', email='$email', saran='$saran' where id='$id'");

    //mengalihkan ke halaman kembali
    header ("location:index2.php?sukses=true");
?>