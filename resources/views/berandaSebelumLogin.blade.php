<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Cooknice-Main</title>
  </head>
  <body class="bg-[#F9E2AF] font-poppins">
    <div class = "flex h-screen overflow-hidden">
      <!-- Sidebar -->
      <aside class="bg-white w-64 flex-shrink-0 rounded-md m-2 mr-1 border shadow-lg transition-all duration-300 md:w-64 sm:w-20 flex flex-col items-center py-6">
        <!-- Logo -->
        <a href="/welcome" class="w-full flex justify-center mb-10 rounded-2xl">
          <img src="/gambar/logotext.png" alt="logo" class="w-50 h-auto mx-auto my-2 sm:w-50 transition-all duration-300" />
        </a>

        <!-- Menu Items -->
        <nav class="flex flex-col space-y-4 w-full px-4">
          <!-- Item -->
          <a href="/welcome" class="flex items-center space-x-4 px-4 py-3 bg-[#F58E4A] text-white rounded-xl hover:bg-[#D9D9D9] hover:text-black transition-all duration-300">
            <div class="bg-white p-2 rounded-full">
              <img src="/gambar/home.png" alt="beranda" class="w-6 h-6" />
            </div>
            <span class="text-lg font-semibold hidden sm:inline">
              Beranda
            </span>
          </a>

          <a href="/makanan" class="flex items-center space-x-4 px-4 py-3 text-black rounded-xl hover:bg-[#D9D9D9] transition-all duration-300">
            <div class="bg-white p-2 rounded-full">
              <img src="/gambar/dish (1).png" alt="makanan" class="w-6 h-6" />
            </div>
            <span class="text-lg font-semibold hidden sm:inline">
              Makanan
            </span>
          </a>

          <a href="/minuman" class="flex items-center space-x-4 px-4 py-3 text-black rounded-xl hover:bg-[#D9D9D9] transition-all duration-300">
            <div class="bg-white p-2 rounded-full">
              <img src="/gambar/soda.png" alt="minuman" class="w-6 h-6" />
            </div>
            <span class="text-lg font-semibold hidden sm:inline">
              Minuman
            </span>
          </a>

          <a href="/cemilan" class="flex items-center space-x-4 px-4 py-3 text-black rounded-xl hover:bg-[#D9D9D9] transition-all duration-300">
            <div class="bg-white p-2 rounded-full">
              <img src="/gambar/nuggets.png" alt="cemilan" class="w-6 h-6" />
            </div>
            <span class="text-lg font-semibold hidden sm:inline">
              Cemilan
            </span>
          </a>
        </nav>
      </aside>

      <div class="bg-[#FFFFFF] text-4xl w-[1250px] flex-1 rounded-md m-2 ml-1 border overflow-y-auto">
        <!-- header -->
        <header class="flex space-x-4 my-2 justify-end sticky top-0 bg-white py-2 z-10">
          <button popovertarget="login" class=" bg-[#F58E4A] text-white border mx-4 text-lg px-6 py-3 rounded-2xl hover:bg-[#f56c4a] text-center flex items-center justify-center space-x-2 cursor-pointer">
            Masuk
          </button>

        </header>
        <div>
          <img src="/gambar/logotext.png" alt="logo" class="mx-auto">
          <div class="flex justify-center my-4 space-x-2">
            <!-- Search bar -->
            <div class="flex items-center border border-gray-300 rounded-2xl px-4 py-2 w-80">
              <img src="/gambar/search.png" alt="Search" class="w-5 h-5 mr-2">
              <input 
                type="text" 
                placeholder="Cari resep disini" 
                class="flex-grow outline-none text-base placeholder-gray-500"
              >
            </div>

            <!-- Button -->
            <button class="bg-[#F58E4A] text-white text-2xl px-4 py-2 rounded-2xl hover:bg-[#f56c4a] cursor-pointer">
              Cari
            </button>
          </div>

          <div class="grid grid-cols-4 gap-6 p-4">
            <!-- Card -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
              <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
              <div class="p-4 flex justify-between items-center">
                <div>
                  <h2 class="font-bold text-lg">
                    Nama menu
                  </h2>
                  <p class="text-sm text-gray-600">
                    nama pengunggah
                  </p>
                </div>
                <button>
                  <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
                </button>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
              <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
              <div class="p-4 flex justify-between items-center">
                <div>
                  <h2 class="font-bold text-lg">
                    Nama menu
                  </h2>
                  <p class="text-sm text-gray-600">
                    nama pengunggah
                  </p>
                </div>
                <button>
                  <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
                </button>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
              <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
              <div class="p-4 flex justify-between items-center">
                <div>
                  <h2 class="font-bold text-lg">
                    Nama menu
                  </h2>
                  <p class="text-sm text-gray-600">
                    nama pengunggah
                  </p>
                </div>
                <button>
                  <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
                </button>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
              <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
              <div class="p-4 flex justify-between items-center">
                <div>
                  <h2 class="font-bold text-lg">
                    Nama menu
                  </h2>
                  <p class="text-sm text-gray-600">
                    nama pengunggah
                  </p>
                </div>
                <button>
                  <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
                </button>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
              <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
              <div class="p-4 flex justify-between items-center">
                <div>
                  <h2 class="font-bold text-lg">
                    Nama menu
                  </h2>
                  <p class="text-sm text-gray-600">
                    nama pengunggah
                  </p>
                </div>
                <button>
                  <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
                </button>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
              <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
              <div class="p-4 flex justify-between items-center">
                <div>
                  <h2 class="font-bold text-lg">
                    Nama menu
                  </h2>
                  <p class="text-sm text-gray-600">
                    nama pengunggah
                  </p>
                </div>
                <button>
                  <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
                </button>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
              <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
              <div class="p-4 flex justify-between items-center">
                <div>
                  <h2 class="font-bold text-lg">
                    Nama menu
                  </h2>
                  <p class="text-sm text-gray-600">
                    nama pengunggah
                  </p>
                </div>
                <button>
                  <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
                </button>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
              <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
              <div class="p-4 flex justify-between items-center">
                <div>
                  <h2 class="font-bold text-lg">
                    Nama menu
                  </h2>
                  <p class="text-sm text-gray-600">
                    nama pengunggah
                  </p>
                </div>
                <button>
                  <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
                </button>
              </div>
            </div>
            
            
          </div>
          
        </div>
      </div>
    </div>

    
    <!-- Tombol Buka Popup Login -->
    <button id="openLogin" class="px-4 py-2 bg-[#005A64] text-white rounded-md hover:bg-[#004852] transition">
      Buka Login
    </button>

    <!-- Backdrop Blur -->
    <div id="popup-backdrop" class="fixed inset-0 z-40 hidden backdrop-blur-sm bg-transparent"></div>

    <!-- === POPUP LOGIN === -->
    <div
      id="login"
      popover
      class="relative bg-white rounded-xl border-[6px] border-[#F9E2AF] shadow-lg w-full max-w-sm p-6 z-50"
      style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%)"
    >
      <!-- Logo dan Judul -->
      <div class="flex items-center space-x-1 mt-4 mb-6 justify-center">
        <div class="bg-[#F9E2AF] rounded-full p-3 flex items-center justify-center w-12 h-12">
          <img src="/gambar/fixlogo.png" class="w-11 h-11 object-cover" />
        </div>
        <div class="flex items-center space-x-2">
          <img src="/gambar/fixtextlogo.png" class="h-[120px] w-auto object-contain" />
        </div>
      </div>

      <!-- Tombol Close -->
      <button
        id="closeLogin"
        class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl font-bold cursor-pointer"
      >
        &times;
      </button>

      <!-- Form Login -->
      <form class="space-y-6">
        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-semibold font-poppins text-[#005A64] mb-1">Email</label>
          <div class="relative">
            <input
              type="email"
              id="email"
              name="email"
              class="w-full border-b-2 border-gray-400 focus:outline-none focus:border-[#005A64] pr-10 pb-1 text-[#005A64] font-semibold font-poppins"
              placeholder="Masukkan Email"
            />
            <span class="absolute right-2 top-1.5 text-gray-400">
              <img src="/gambar/email1.png" class="w-4 h-4" />
            </span>
          </div>
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-semibold font-poppins text-[#005A64] mb-1">Password</label>
          <div class="relative">
            <input
              type="password"
              id="password"
              name="password"
              class="w-full border-b-2 border-gray-400 focus:outline-none focus:border-[#005A64] pr-10 pb-1 text-[#005A64] font-semibold font-poppins"
              placeholder="Masukkan Password"
            />
            <span class="absolute right-2 top-1.5 text-gray-400">
              <img src="/gambar/lock1.png" class="w-4 h-4" />
            </span>
          </div>
        </div>
      </form>

      <!-- Tombol Masuk -->
      <div class="mt-6 ml-10 mr-10 items-center justify-center flex">
        <a href="#" type="submit" class="w-full bg-[#005A64] text-white  items-center justify-center flex font-semibold font-poppins py-2 rounded-md hover:bg-[#004852] transition duration-200">
          MASUK
        </a>
      </div>

      <!-- Pemisah -->
      <div class="flex items-center my-4">
        <hr class="flex-grow border-t border-black" />
        <span class="mx-2 text-sm text-black">atau</span>
        <hr class="flex-grow border-t border-black" />
      </div>

      <!-- Login dengan Google dan Facebook -->
      <button class="w-full flex items-center justify-center space-x-2 border rounded-md py-2 bg-[#005A64] text-white font-semibold hover:bg-[#004852] transition mb-3 cursor-pointer">
        <img src="/gambar/google.png" class="w-5 h-5" />
        <span>Masuk dengan Google</span>
      </button>
      <button class="w-full flex items-center justify-center space-x-2 border rounded-md py-2 bg-[#005A64] text-white font-semibold hover:bg-[#004852] transition cursor-pointer">
        <img src="/gambar/facebook1.png" class="w-6 h-6" />
        <span>Masuk dengan Facebook</span>
      </button>

      <!-- Link Daftar -->
      <p class="text-center text-sm text-black font-semibold font-poppins mt-6">
        Belum punya akun?
        <a href="#" id="switchToDaftar" class="text-[#005A64] underline">Daftar Disini</a>
      </p>
    </div>

    <!-- === POPUP DAFTAR === -->
    <div
      id="daftar"
      popover
      class="relative bg-white rounded-xl border-[6px] border-[#F9E2AF] shadow-lg w-full max-w-sm p-6 z-50"
      style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%)"
    >
      <!-- Logo dan Judul -->
      <div class="flex items-center space-x-1 mt-4 mb-6 justify-center">
        <div class="bg-[#F9E2AF] rounded-full p-3 flex items-center justify-center w-12 h-12">
          <img src="/gambar/fixlogo.png" class="w-11 h-11 object-cover" />
        </div>
        <div class="flex items-center space-x-2">
          <img src="/gambar/fixtextlogo.png" class="h-[120px] w-auto object-contain" />
        </div>
      </div>

      <!-- Tombol Close -->
      <button
        id="closeDaftar"
        class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl font-bold cursor-pointer"
      >
        &times;
      </button>

      <!-- Form Daftar -->
      <form class="space-y-6">
        <!-- Nama -->
        <div>
          <label for="name" class="block text-sm font-semibold text-[#005A64] mb-1">Nama</label>
          <div class="relative">
            <input type="text" id="name" class="w-full border-b-2 border-gray-400 focus:outline-none focus:border-[#005A64] pr-10 pb-1 text-[#005A64]" placeholder="Masukkan Nama" />
            <span class="absolute right-2 top-1.5 text-gray-400">
              <img src="/gambar/user3.png" class="w-4 h-4" />
            </span>
          </div>
        </div>
        <!-- Email & Password -->
        <div>
          <label for="email" class="block text-sm font-semibold text-[#005A64] mb-1">Email</label>
          <div class="relative">
            <input type="email" id="email" class="w-full border-b-2 border-gray-400 focus:outline-none focus:border-[#005A64] pr-10 pb-1 text-[#005A64]" placeholder="Masukkan Email" />
            <span class="absolute right-2 top-1.5 text-gray-400">
              <img src="/gambar/email1.png" class="w-4 h-4" />
            </span>
          </div>
        </div>
        <div>
          <label for="password" class="block text-sm font-semibold text-[#005A64] mb-1">Password</label>
          <div class="relative">
            <input type="password" id="password" class="w-full border-b-2 border-gray-400 focus:outline-none focus:border-[#005A64] pr-10 pb-1 text-[#005A64]" placeholder="Masukkan Password" />
            <span class="absolute right-2 top-1.5 text-gray-400">
              <img src="/gambar/lock1.png" class="w-4 h-4" />
            </span>
          </div>
        </div>
      </form>

      <!-- Tombol Daftar -->
      <div class="mt-6 ml-10 mr-10 items-center justify-center flex">
        <a href="#" type="submit" class="w-full bg-[#005A64] text-white items-center justify-center flex font-semibold font-poppins py-2 rounded-md hover:bg-[#004852] transition duration-200">
          DAFTAR
        </a>
      </div>

      <!-- Pemisah -->
      <div class="flex items-center my-4">
        <hr class="flex-grow border-t border-black" />
        <span class="mx-2 text-sm text-black">atau</span>
        <hr class="flex-grow border-t border-black" />
      </div>

      <!-- Google & Facebook -->
      <button class="w-full flex items-center justify-center space-x-2 border rounded-md py-2 bg-[#005A64] text-white font-semibold hover:bg-[#004852] transition mb-3 cursor-pointer">
        <img src="/gambar/google.png" class="w-5 h-5" />
        <span>Masuk dengan Google</span>
      </button>
      <button class="w-full flex items-center justify-center space-x-2 border rounded-md py-2 bg-[#005A64] text-white font-semibold hover:bg-[#004852] transition cursor-pointer">
        <img src="/gambar/facebook1.png" class="w-6 h-6" />
        <span>Masuk dengan Facebook</span>
      </button>

      <!-- Link ke Login -->
      <p class="text-center text-sm text-black font-semibold font-poppins mt-6">
        Sudah punya akun? <a href="#" id="switchToLogin" class="text-[#005A64] underline">Login Disini</a>
      </p>
    </div>

    <!-- === SCRIPT === -->
    <script>
      const login = document.getElementById('login');
      const daftar = document.getElementById('daftar');
      const backdrop = document.getElementById('popup-backdrop');

      // Tombol Buka/Tutup
      document.getElementById('openLogin').addEventListener('click', () => login.showPopover());
      document.getElementById('closeLogin').addEventListener('click', () => login.hidePopover());
      document.getElementById('closeDaftar').addEventListener('click', () => daftar.hidePopover());

      // Backdrop toggle otomatis
      function toggleBackdrop(e) {
        if (e.target.matches(':popover-open')) {
          backdrop.classList.remove('hidden');
        } else {
          backdrop.classList.add('hidden');
        }
      }
      login.addEventListener('toggle', toggleBackdrop);
      daftar.addEventListener('toggle', toggleBackdrop);
      backdrop.addEventListener('click', () => {
        login.hidePopover();
        daftar.hidePopover();
      });

      // Pindah dari login ke daftar
      document.getElementById('switchToDaftar').addEventListener('click', (e) => {
        e.preventDefault();
        login.hidePopover();
        setTimeout(() => daftar.showPopover(), 200); // Delay agar animasi halus
      });

      // Pindah dari daftar ke login
      document.getElementById('switchToLogin').addEventListener('click', (e) => {
        e.preventDefault();
        daftar.hidePopover();
        setTimeout(() => login.showPopover(), 200);
      });
    </script>


  
  </body>
</html>