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
    <title>Edit Pesanan</title>

          <!-- tailwind -->
          <script src="https://cdn.tailwindcss.com"></script>

      <!-- font -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Marhey:wght@300&display=swap" rel="stylesheet">
          
</head>
<body class="font-[marhey] bg-[#d1d5db]">

<header class="bg-gray-500 text-white p-4 flex items-center justify-between">
    <h3 class="text-3xl font-bold mr-5">ADMIN PERMATA PARTY</h3>
    <img src="../img/logo.png" alt="Logo" class="w-20 h-20 rounded-full ml-5">
  </header>

  <div class="container mx-auto mt-8 p-4">
    <h3 class="text-2xl font-bold mb-4">Edit Help Pelanggan</h3>

    <?php 
        include 'function.php';
        $id = $_GET['id'];
        $data = mysqli_query($conn,"select * from help where id= '$id'") ;
        while ($a = mysqli_fetch_array($data)) {
    ?>

    <form action="prosesedithelp.php" method="post">
    <div class="mb-4">
            <input type="hidden" id="id" name="id" value="<?php echo $a['id']; ?>" class="w-full p-3 border rounded-md" required />
          </div>

          <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-semibold">Nama</label>
            <input type="text" id="nama" name="nama" value="<?php echo $a['nama']; ?>" class="w-full p-3 border rounded-md" readonly />
          </div>

          <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold">Email </label>
            <input type="email" id="email" name="email" value="<?php echo $a['email']; ?>" class="w-full p-3 border rounded-md" readonly />
        </div>

          <div class="mb-4">
            <label for="saran" class="block text-gray-700 font-semibold">Saran</label>
            <input type="text" id="saran" name="saran" value="<?php echo $a['saran']; ?>" class="w-full p-3 border rounded-md" required />
          </div>
          
          <button type="submit" class="outline outline-offset-2 outline-[#1e293b] bg-[#0c0a09] text-white font-semibold px-4 py-2 rounded-md hover:bg-[#6b7280]">Simpan</button>
    </form>

    <?php 
        }
    ?>
  </div>
</body>
</html>


