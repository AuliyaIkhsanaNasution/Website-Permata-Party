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
    <h3 class="text-2xl font-bold mb-4">Edit Pesanan Pelanggan</h3>

    <?php 
        include 'function.php';
        $id = $_GET['id'];
        $data = mysqli_query($conn,"select * from services where id= '$id'") ;
        while ($a = mysqli_fetch_array($data)) {
    ?>

    <form action="proseseditpesanan.php" method="post">
    <div class="mb-4">
            <input type="hidden" id="id" name="id" value="<?php echo $a['id']; ?>" class="w-full p-3 border rounded-md" required />
          </div>

          <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-semibold">Nama Pemesan</label>
            <input type="text" id="nama" name="nama" value="<?php echo $a['nama']; ?>" class="w-full p-3 border rounded-md" required />
          </div>

          <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold">Email Pemesan</label>
            <input type="email" id="email" name="email" value="<?php echo $a['email']; ?>" class="w-full p-3 border rounded-md" required />
        </div>

          <div class="mb-4">
            <label for="layanan" class="block text-gray-700 font-semibold">layanan anda</label>
            <input type="text" id="layanan" name="layanan" value="<?php echo $a['layanan']; ?>" class="w-full p-3 border rounded-md" readonly />
          </div>

          <div class="mb-4">
            <label for="alamat" class="block text-gray-700 font-semibold">Alamat Acara</label>
            <input type="text" id="alamat" name="alamat" value="<?php echo $a['alamat']; ?>" class="w-full p-3 border rounded-md"  />
          </div>

          <div class="mb-4">
            <label for="no_hp" class="block text-gray-700 font-semibold">No Telepon</label>
            <input type="number" id="no_hp" name="no_hp" value="<?php echo $a['no_hp']; ?>" class="w-full p-3 border rounded-md" readonly />
          </div>
          
          <div class="mb-4">
            <label for="tanggal" class="block text-gray-700 font-semibold">Tanggal Acara</label>
            <input type="date" id="tanggal" name="tanggal" value="<?php echo $a['tanggal_pemesanan']; ?>" class="w-full p-3 border rounded-md" required />
          </div>
          <div class="mb-5">
            <label for="paket" class="block text-gray-700 font-semibold">Paket Acara</label>
            <select id="paket" name="paket" class="w-full p-3 border rounded-md" required>
              <option selected value="<?php echo $a['paket']; ?>" >Paket <?php echo $a['paket']; ?> </option>
              <option value="sapphire">Paket SAPPHIRE -- layanan decor</option>
              <option value="emerald">Paket EMERALD -- layanan decor</option>
              <option value="diamond">Paket DIAMOND -- layanan decor</option>
              <option value="elegan">Paket Elegan dan Sederhana -- layanan gaun</option>
              <option value="mewah">Paket Mewah dan Kustom -- layanan gaun</option>
              <option value="glamour">Paket Glamour dan tradisional -- layanan gaun</option>
              <option value="Natural Elegance">Paket Natural Elegance -- layanan makeup</option>
              <option value="Glamourous Diva">Paket Glamourous Diva -- layanan makeup</option>
              <option value="Royal Family Special">Paket Royal Family Special -- layanan makeup</option>
            </select>
          </div>
          <button type="submit" class="outline outline-offset-2 outline-[#1e293b] bg-[#0c0a09] text-white font-semibold px-4 py-2 rounded-md hover:bg-[#6b7280]">Simpan</button>
    </form>

    <?php 
        }
    ?>
  </div>
</body>
</html>


