<?php
session_start();

// pemeriksaan session login
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

//koneksi ke db
include "function.php";

//menyimpan data
$id = $_GET['id'];

//query hapus data
mysqli_query($conn,"delete from services where id='$id'");

    //mengalihkan ke halaman kembali
    header ("location:index.php?hapus=true");
?>