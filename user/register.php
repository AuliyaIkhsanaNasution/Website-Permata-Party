<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

<!-- aos animasi -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  </head>

  <body class="overflow-x-hidden">
    <div class="logo absolute top-0 left-0" >
      <img src="../img/logo.png" alt="logo" class="w-20 bg-slate-500 rounded-br-xl shadow-sm" />
    </div>

    <section class="flex flex-wrap justify-evenly content-center lg:pb-5 lg:pt-14">
      <form action="prosesregister.php" method="post" class="w-2/3 mt-20 shadow-2xl p-5 rounded-lg lg:w-[40%] lg:m-10" data-aos="fade-right">
        <h1 class="text-xl font-bold mb-5 lg:text-5xl lg:font-extrabold lg:mb-14">Mari Membuat Akun 🙌</h1>

        <label for="email" class="lg:text-xl font-bold">Email :</label><br />
        <input
          type="email"
          name="email"
          required
          class="mt-1 block w-full lg:p-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
        /><br />

        <label for="password" class="lg:text-xl font-bold">Password :</label><br />
        <input
          type="password"
          name="password"
          required
          class="mt-1 block w-full lg:p-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
        /><br />

        <label for="password2" class="lg:text-xl font-bold">Konfirmasi Password :</label><br />
        <input
          type="password"
          name="password2"
          required
          class="mt-1 block w-full lg:p-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
        /><br />

        <button
          type="submit"
          name="register"
          value="register"
          class="block m-auto p-2 border-sky-500 border-2 rounded-full px-4 py-2 bg-sky-300 font-semibold hover:bg-pink-600 hover:text-sky-500 hover:scale-110 lg:font-bold lg:text-lg lg:px-6 lg:py-3 lg:mt-5"
        >
          Register
        </button>

        <div class="flex justify-between mt-3">
          <p class="text-slate-500 font-light">Sudah memiliki akun?</p>
          <a href="login.php?user=true" class="text-slate-800 font-semibold hover:text-teal-600">Login</a>
        </div>
      </form>

      <div class="w-full mb-10 lg:w-1/2 lg:m-5" data-aos="fade-left">
        <img src="../img/mock.png" alt="mock" class="w-[90%] m-auto my-5" />
        <h3 class="text-2xl font-bold ms-3 lg:text-4xl lg:font-extrabold">Permata Party 👑</h3>
        <p class="text-base text-teal-600 font-semibold ms-3 italic tracking-tight lg:text-xl">wujudkan mimpi mu dengan permata party</p>
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
