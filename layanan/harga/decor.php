<?php 

      require "../../user/function.php";

      session_start();  

if (isset($_SESSION["user"])) {
  $user = $_SESSION["user"];
}
?>

<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Harga Wedding Decor</title>

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Lora:ital@1&display=swap" rel="stylesheet">

<!-- aos animasi -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<body class=" overflow-x-hidden bg-cover bg-center h-screen font-[lora]" style="background-image: url('../../img/bgpermata.png');">
    <!-- hero -->
    <section data-aos="fade-down">
      <img src="../../img/pelaminan1.jpeg" alt="hero" class="block h-screen w-screen object-cover brightness-[20%]" />
      <h1 class="text-3xl ms-5 text-cyan-100 font-extrabold tracking-wide absolute top-36 left-0 w-2/3 lg:ms-24 lg:w-1/2 lg:text-8xl lg:top-23" style="font-family: 'Great Vibes';">
        Dekorasi pelaminan impian, hadirkan bersama 
        <span class="font-extrabold text-cyan-600">Permata Party</span>
      </h1>
    </section>
    <!-- akhir hero -->

    <!-- list harga -->
    <section data-aos="fade-left">
      <div class="px-4 my-24">
        <div class="max-w-3xl mx-auto">
          <h1 class="text-white text-3xl font-bold text-center mb-2 lg:mb-8 lg:text-6xl" style="font-family: 'Great Vibes';">Harga Sewa Dekorasi Perpaket</h1>
          <div class="container mx-auto py-4">
            <div class="flex flex-wrap content-center font-[lora] -mx-4">
              <div class="w-full sm:w-1/2 md:w-1/3 p-4 cursor-pointer">
                <a href="#form"
                  ><div class="bg-white  hover:bg-yellow-300 hover:scale-110 transition-all rounded-lg p-4 shadow">
                    <h2 class="text-xl font-semibold mb-2">Paket SAPPHIRE</h2>
                    <p class="text-gray-600">
                      <span class="font-semibold">Fasilitas:</span> Dekorasi pelaminan,Sofa pengantin,Lighting,Taman pelaminan (Fresh Flowers),Bunga artificial premium,Dekorasi meja kursi akad 6 set,Dekorasi Altar jalan,Gazebo,photobooth,
                      Welcome Gate, Welcome sign,Backdrop penerima tamu,backdrop band. <br /><span class="font-semibold">Free:</span> Design Dekorasi,Hand Bouquet,Buku Tamu
                    </p>
                    <p class="text-2xl font-semibold mt-2">Rp 13.000.000</p>
                  </div>
                </a>
              </div>

              <div class="w-full sm:w-1/2 md:w-1/3 p-4 cursor-pointer">
                <a href="#form"
                  ><div class="bg-white hover:bg-yellow-300 hover:scale-110 transition-all rounded-lg p-4 shadow">
                    <h2 class="text-xl font-semibold mb-2">Paket EMERALD</h2>
                    <p class="text-gray-600">
                      <span class="font-semibold">Fasilitas:</span> Dekorasi pelaminan,Sofa pengantin,Lighting,Taman pelaminan (Fresh Flowers),Bunga artificial premium,Dekorasi meja kursi akad 6 set,Lantai putih/Red Carpet,Dekorasi Altar
                      jalan,Gazebo,Dekorasi foyer,Welcome Gate, Welcome sign,Backdrop penerima tamu,backdrop band. <br /><span class="font-semibold">Free:</span> Design Dekorasi,Hand Bouquet,Buku Tamu
                    </p>
                    <p class="text-2xl font-semibold mt-2">Rp 15.000.000</p>
                  </div>
                </a>
              </div>

              <div class="w-full sm:w-1/2 md:w-1/3 p-4 cursor-pointer">
                <a href="#form"
                  ><div class="bg-white hover:bg-yellow-300 hover:scale-110 transition-all rounded-lg p-4 shadow">
                    <h2 class="text-xl font-semibold mb-2">Paket DIAMOND</h2>
                    <p class="text-gray-600">
                      <span class="font-semibold">Fasilitas:</span> Dekorasi pelaminan,Sofa pengantin,Lighting,Taman pelaminan (Fresh Flowers),Bunga artificial premium,Dekorasi meja kursi akad 6 set,Lantai putih/Red Carpet,Dekorasi Altar
                      jalan,Gazebo full bunga, Lantai Kaca Gazebo, Dekorasi foyer,Welcome Gate, Welcome sign,Backdrop penerima tamu,backdrop band. <br /><span class="font-semibold">Free:</span> Design Dekorasi,Hand Bouquet,Buku Tamu
                    </p>
                    <p class="text-2xl font-semibold mt-2">Rp 18.000.000</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir list harga -->

    <!-- foto -->
    <section data-aos="fade-right">
      <div class="px-4 my-24">
        <div class="max-w-3xl mx-auto">
          <h1 class="text-white text-3xl font-bold text-center mb-2 lg:mb-8 lg:text-6xl" style="font-family: 'Great Vibes';">Foto Hasil Dekorasi</h1>

          <div class="container mx-auto">
            <div class="flex flex-wrap -m-5">
              <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="rounded-lg shadow-md">
                  <img src="../../img/pelaminan1.jpeg" alt="Foto 1" class="w-full object-cover hover:scale-150 transition-all rounded-lg cursor-pointer" />
                </div>
              </div>
              <div class="w-full md:w-1/3 lg:w-1/3 p-4">
                <div class="rounded-lg shadow-md">
                  <img src="../../img/pelaminan2.jpeg" alt="Foto 2" class="w-full object-cover hover:scale-150 transition-all rounded-lg cursor-pointer" />
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="rounded-lg shadow-md">
                  <img src="../../img/pelaminan3.jpeg" alt="Foto 1" class="w-100 object-cover hover:scale-150 transition-all rounded-lg cursor-pointer" />
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="rounded-lg shadow-md">
                  <img src="../../img/pelaminan4.jpeg" alt="Foto 1" class="w-full object-cover hover:scale-150 transition-all rounded-lg cursor-pointer" />
                </div>
              </div>
              <div class="w-full md:w-1/3 lg:w-1/3 p-4">
                <div class="rounded-lg shadow-md">
                  <img src="../../img/pelaminan5.jpeg" alt="Foto 2" class="w-full object-cover hover:scale-150 transition-all rounded-lg cursor-pointer" />
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="rounded-lg shadow-md">
                  <img src="../../img/pelaminan6.jpeg" alt="Foto 1" class="w-100 object-cover hover:scale-150 transition-all rounded-lg cursor-pointer" />
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="rounded-lg shadow-md">
                  <img src="../../img/pelaminan7.jpeg" alt="Foto 1" class="w-full object-cover hover:scale-150 transition-all rounded-lg cursor-pointer" />
                </div>
              </div>
              <div class="w-full md:w-1/3 lg:w-1/3 p-4">
                <div class="rounded-lg shadow-md">
                  <img src="../../img/pelaminan8.jpeg" alt="Foto 2" class="w-full object-cover hover:scale-150 transition-all rounded-lg cursor-pointer" />
                </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="rounded-lg shadow-md">
                  <img src="../../img/pelaminan9.jpeg" alt="Foto 1" class="w-100 object-cover hover:scale-150 transition-all rounded-lg cursor-pointer" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir foto -->

    <!-- form harga -->
    <section id="form" data-aos="fade-left">
      <h1 for="" class="text-white text-3xl font-bold text-center mb-2 lg:mb-8 lg:text-6xl" style="font-family: 'Great Vibes';">Paket apa yang ingin anda pesan ?</h1>
      <div class="outline outline-offset-1 font-[lora] outline-[#1e293b] w-2/3 mx-auto bg-gradient-to-r from-[#e2e8f0] to-[#94a3b8] p-6 rounded-md shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Form Pemesanan</h1>
        <form method="post" action="prosesdecor.php">
          <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-semibold">Nama Pemesan</label>
            <input type="text" id="nama" name="nama" class="w-full p-3 border rounded-md" required />
          </div>
          <div class="mb-4">
            <label for="alamat" class="block text-gray-700 font-semibold">Alamat Acara</label>
            <input type="alamat" id="alamat" name="alamat" class="w-full p-3 border rounded-md" required />
          </div>
          <div class="mb-4">
            <label for="no_hp" class="block text-gray-700 font-semibold">No Telepon</label>
            <input type="no_hp" id="no_hp" name="no_hp" class="w-full p-3 border rounded-md" required />
          </div>
          <div class="mb-4">
            <label for="tanggal" class="block text-gray-700 font-semibold">Tanggal Acara</label>
            <input type="date" id="tanggal" name="tanggal" class="w-full p-3 border rounded-md" required />
          </div>
          <div class="mb-5">
            <label for="paket" class="block text-gray-700 font-semibold">Paket Acara</label>
            <select id="paket" name="paket" class="w-full p-3 border rounded-md" required>
              <option selected>--PILIH PAKET--</option>
              <option value="sapphire">Paket SAPPHIRE (13jt)</option>
              <option value="emerald">Paket EMERALD (15jt)</option>
              <option value="diamond">Paket DIAMOND (18jt)</option>
            </select>
          </div>
          <button type="submit" class="outline outline-offset-2 outline-[#1e293b] bg-[#0c0a09] text-white font-semibold px-4 py-2 rounded-md hover:bg-[#6b7280]">Kirim Pesanan</button>
        </form>
      </div>

      <?php 


      $user = $_SESSION['user'];
      $temp = mysqli_query($conn, "SELECT * FROM temp WHERE email = '$user'");
      while ($rowtemp = mysqli_fetch_array($temp)) :
      ?>
      <div id="card" class="w-2/3 bg-white m-auto text-center mt-10">
            <div class="card-header bg-slate-200">
                <h2 class="font-bold text-2xl py-3" >PESANAN</h2>
                <hr>
            </div>
            <div class="card-body p-5">
              <p class="text-yellow-700"><?php echo $rowtemp['desk'] ?></p>
              <p>Tanggal Acara: <?php echo $rowtemp['tanggal_pemesanan'] ?></p>
              <p>layanan : <?php echo $rowtemp['layanan'] ?></p>
              <p>Nama Paket :<?php echo $rowtemp['paket'] ?> </p>
              <p>Harga : <?php echo $rowtemp['harga'] ?></p>

              <?php if ($rowtemp['desk'] == null) : ?>
                <a href="batal.php?id=<?php echo $rowtemp['id'] ?>" class=" block w-1/6  text-white m-auto rounded-lg p-2 mt-5 bg-red-600" onclick="return confirm ('Apakah Anda Yakin Ingin Membatalkan Pesanan Ini ?');">Batalkan</a>
              <?php endif; ?>
            </div>
      </div>
      <?php endwhile; ?>
      
    </section>

    <!-- akhir form harga -->

    <!-- footer -->
    <section data-aos="zoom-in-up">
      <div class="sosmed mt-5 flex justify-center">
        <a href="https://wa.me/6281264416901" target="_blank" class="block w-16 lg:w-24 hover:scale-110"><img src="../../img/Whatsapp.png" alt="Whatsapp" /></a>
        <a href="https://instagram.com/permata.deco?igshid=OGQ5ZDc2ODk2ZA" target="_blank" class="block w-16 lg:w-24 hover:scale-110"><img src="../../img/Instagram.png" alt="INstagram" /></a>
        <a href="https://www.tiktok.com/@permatadeco?_t=8hKCYvh6R2v&_r=1" target="_blank" class="block w-16 lg:w-24 hover:scale-110"><img src="../../img/Tiktok.png" alt="Tiktok" /></a>
        <!-- <a href="" class="block w-16 lg:w-24 hover:scale-110"><img src="../../img/Twitter.png" alt="Whatsapp" /></a> -->
        <a href="https://www.facebook.com/ita.yuhasnita?mibextid=9R9pXO" target="_blank" class="block w-16 lg:w-24 hover:scale-110"><img src="../../img/Facebook.png" alt="facebook" /></a>
      </div>
      <footer class="py-5 font-[lora]">
        <p class="text-white text-xs font-light text-center lg:text-base lg:font-normal">
          All Right Reserved, Copyrigth &copy; Create & Desain by <a href="https://instagram.com/permata.deco?igshid=OGQ5ZDc2ODk2ZA" target="_blank" class="text-cyan-300">Permata Party</a>
        </p>
      </footer>
    </section>
    <!-- akhir footer -->

    <!-- home -->
    <section class="home bg-[#69dbc3] w-fit p-3 rounded-2xl fixed bottom-5 right-5 opacity-30 hover:opacity-100">
      <a href="../layanan.php">
        <svg role="img" viewBox="0 0 24 24" width="30px" height="20px" class="m-auto" xmlns="http://www.w3.org/2000/svg">
          <title>Google Home</title>
          <path
            d="M12 0a1.44 1.44 0 0 0-.947.399L.547 10.762a1.26 1.26 0 0 0-.342.808v11.138c0 .768.53 1.292 1.311 1.292h20.968c.78 0 1.311-.522 1.311-1.292V11.57a1.25 1.25 0 0 0-.34-.804L15.68 3.097h-.001L12.947.4A1.454 1.454 0 0 0 12 0Zm0 6.727 6.552 6.456v5.65H5.446v-5.65z"
          />
        </svg>
        <p class="text-center text-xs font-semibold">Home</p>
      </a>
    </section>


    <?php if(isset($_GET['sukses'])) : ?>
      <script> alert("Pesanan Anda Berhasil Dibuat")</script>
    <?php endif; ?>

    

<!-- script aos animasi -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1100,
    delay: 80
  });
</script>

  </body>
</html>
