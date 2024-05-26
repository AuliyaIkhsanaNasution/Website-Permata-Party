<?php
session_start();

// pemeriksaan session login
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Permata party</title>

      <!-- tailwind -->
      <script src="https://cdn.tailwindcss.com"></script>

      <!-- icon -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


      <!-- font -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Marhey:wght@300&display=swap" rel="stylesheet">

</head>

<body class="font-[marhey] bg-[#d1d5db]">

  <header class="bg-gray-500 text-white p-4 flex items-center justify-between">
    <h3 class="text-3xl font-bold mr-5">Dashboard</h3>
    <img src="../img/logo.png" alt="Logo" class="w-20 h-20 rounded-full ml-5">
  </header>

  <div class="container mx-auto mt-8">

    <nav class="bg-gray-500 p-4 flex justify-between items-center rounded-lg">
      <h2 class="text-2xl font-bold text-slate-100">Semangat Admin 🙌</h2>
      <div class="flex space-x-4">
        <a href="index.php" class="text-lg text-slate-100 hover:text-gray-800 transition duration-300 active:text-blue-700 active:underline">Data Pesanan / </a>
        <a href="konfirmasi.php" class="text-lg text-slate-100 hover:text-gray-800 transition duration-300 active:text-blue-700 active:underline">konfirmasi Pesanan / </a>
        <a href="index2.php" class="text-lg text-slate-100 hover:text-gray-800 transition duration-300 active:text-blue-700 active:underline">Data Help / </a>
        <a href="index3.php" class="text-lg text-yellow-300 hover:text-gray-800 transition duration-300 active:text-blue-700 active:underline">Data User</a>
        <a href="logout.php" class="text-lg font-bold text-red-500 hover:text-gray-800 transition duration-300 active:text-blue-700 active:underline">Logout</a>
      </div>
    </nav>

    <?php
        if (isset($_GET['hapus'])) : ?>
          <script> alert ("Data Users Berhasil Dihapus")</script>
        <?php endif; ?>
  
    <div class="mt-4">
      <h4 class="text-xl font-semibold mb-2">Data User</h4>
    
      <table class="w-full text-center bg-white border border-gray-500 rounded-lg overflow-hidden">
        <thead class="bg-gray-400">
        <tr>
            <th class="py-2 px-4 border-b">Nomor</th>
            <th class="py-2 px-4 border-b">Email</th>
            <th class="py-2 px-4 border-b" colspan="2">Control</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          <?php 
              include "function.php";
              $data = mysqli_query ($conn,"select * from users");
              $num = 1;
              while( $a = mysqli_fetch_array($data) ) {
          ?>
            <td class="py-2 px-4 border-b"><?php echo $num ?></td>
            <td class="py-2 px-4 border-b"><?php echo $a ['email'] ?></td>
            <td class="py-2 px-4 border-b"><a href="deleteusers.php?id= <?php echo $a['id'];?>" onclick=" return confirm ('Apakah Anda Yakin Ingin Menghapus data Ini ?');"><i class="material-icons">delete</i></a></td>
          </tr>

          <?php $num++;
              }
          ?>

        </tbody>

</html>