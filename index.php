<?php 
require "user/function.php";

// pemeriksaan cookie
if (isset($_COOKIE["xx"]) || isset($_COOKIE["yy"])) {
  $id = $_COOKIE["xx"];
  $email = $_COOKIE["yy"];

  $result = mysqli_query($conn, "SELECT email FROM users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  if ($email ===  hash("sha256", $row["email"])) {
    $_SESSION["login"] = true;
  }
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Utama</title>

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Lora:ital@1&display=swap" rel="stylesheet">

    <!-- aos animasi -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  </head>
  <body class="overflow-y-hidden">
    <div class="absolute -z-10 top-0 left-0 right-0 bottom-0">
      <video src="img/bg-video.mp4" loop muted autoplay class="w-screen brightness-[50%]"></video>
    </div>

    <section class="flex justify-center h-screen mt-96 lg:mt-16 font-[lora]">
      <div class="self-start">
        <h1 class="lg:text-white text-5xl font-extrabold p-6 mb-5 text-center lg:text-7xl" data-aos="zoom-in-up">Siapa Anda? 🤔</h1>
        <div class="flex justify-around ">
          <a
            href="admin/login.php?admin=true"
            class="w-24 h-8 text-center text-teal-800 leading-8 bg-black lg:bg-white opacity-50 backdrop:blur-lg rounded-lg shadow-xl text-base font-bold lg:text-2xl lg:w-32 lg:h-10 lg:leading-10 hover:scale-110 transition-all" data-aos="fade-right"
            >Admin</a
          >
          <a
            href="user/login.php?user=true"
            class="w-24 h-8 text-center text-teal-800 leading-8 bg-black lg:bg-white opacity-50 backdrop:blur-lg rounded-lg shadow-xl text-base font-bold lg:text-2xl lg:w-32 lg:h-10 lg:leading-10 hover:scale-110 transition-all" data-aos="fade-left"
            >User</a
          >
        </div>
      </div>
    </section>

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
