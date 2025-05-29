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
      <aside class="bg-white w-64 flex-shrink-0 rounded-md m-2 mr-1 border shadow-lg transition-all duration-300 md:w-64 sm:w-20 flex flex-col items-center">
        <!-- Logo -->
        <div class="w-full h-20 mb-10 mt-2 items-center flex justify-center">
          <img src="gambar/fixlogo.png" alt="logo" class="w-15 rounded-full bg-[#F9E2AF] object-cover">
          <img src="gambar/fixtextlogo.png" alt="logo" class="w-35 mt-3 object-cover">
        </div>

        <!-- Menu Items -->
        <nav class="flex flex-col space-y-4 w-full px-4">
          <!-- Item -->
          <a href="/welcome" class="flex items-center space-x-4 px-4 py-3 text-black rounded-xl hover:bg-[#D9D9D9] transition-all duration-300">
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

          <a href="/koleksiAda" class="flex items-center space-x-4 px-4 py-3 bg-[#F58E4A] text-white rounded-xl hover:bg-[#D9D9D9] hover:text-black transition-all duration-300">
            <div class="bg-white p-2 rounded-full">
              <img src="/gambar/bookmark.png" alt="cemilan" class="w-6 h-6" />
            </div>
            <span class="text-lg font-semibold hidden sm:inline">
              Koleksi
            </span>
          </a>
        </nav>
      </aside>

      <div class="bg-[#FFFFFF] text-4xl w-[1250px] flex-1 rounded-md m-2 ml-1 border overflow-y-auto">
        <!-- header -->
        <header class="flex justify-end items-center sticky top-0 bg-white py-2 z-10 my-2 px-4">

          <div class="flex items-center space-x-4">
            <button popovertarget="clickedprofile" class="rounded-full">
              <img src="/gambar/profile.png" alt="prfil" class="w-[50px] h-[50px] cursor-pointer border-2 rounded-full border-[#F58E4A]">
            </button>
            <a href="/uploadresep" class="bg-[#F58E4A] text-white text-lg px-6 py-3 rounded-2xl hover:bg-[#f56c4a] flex items-center justify-center space-x-2 cursor-pointer">
              <img src="/gambar/upload.png" alt="unggah" class="w-6 h-6" />
              <span>Unggah</span>
            </a>
          </div>
        </header>

        <div>

          <b class="mx-4 my-2">
            Koleksi anda
          </b>
          <div class="grid grid-cols-4 gap-6 p-4">
            <!-- Card -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
              <img src="/gambar/risolmayo.jpeg" alt="Menu" class="w-full h-40 object-cover">
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
                  <img src="/gambar/bookmarked.png" alt="bookmarked" class="w-6 h-6 cursor-pointer">
                </button>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
              <img src="/gambar/Es Cendol Durian.jpeg" alt="Menu" class="w-full h-40 object-cover">
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
                  <img src="/gambar/bookmarked.png" alt="bookmarked" class="w-6 h-6 cursor-pointer">
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
                  <img src="/gambar/bookmarked.png" alt="bookmarked" class="w-6 h-6 cursor-pointer">
                </button>
              </div>
            </div>
            
            
          </div>
          
        </div>
      </div>
    </div>  
    
    
    <!-- Overlay Backdrop -->
    <div 
      id="popover-backdrop" 
      class="fixed inset-0 z-40 hidden backdrop-blur-sm bg-transparent"
    ></div>
    <!-- Popover -->
    <div 
      id="clickedprofile" 
      popover 
      class="bg-white rounded-xl border border-black shadow-lg p-6 w-full max-w-sm z-50"
      style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);"
    >
      <!-- Header Profil -->
      <div class="flex items-center space-x-3 mb-4">
        <img src="/gambar/user.png" alt="Avatar" class="w-10 h-10 rounded-full">
        <div>
          <p class="text-sm font-semibold text-gray-800">Nama Pengguna</p>
          <p class="text-xs text-gray-500">@cooknice123</p>
        </div>
      </div>

      <!-- Menu Profil -->
      <div class="space-y-3 text-sm text-gray-700">
        <a href="/halamanprofile" class="flex items-center space-x-2 cursor-pointer hover:text-black">
          <img src="/gambar/user4.png" class="w-4 h-4" />
          <span>Profil</span>
        </a>
        <a href="#" class="flex items-center space-x-2 cursor-pointer hover:text-black">
          <img src="/gambar/settings1.png" class="w-4 h-4" />
          <span>Pengaturan</span>
        </a>
      </div>

      <!-- Garis pembatas -->
      <hr class="my-3 border-t border-black">

      <!-- Tombol Logout -->
      <a href="#" class="flex items-center space-x-2 cursor-pointer hover:text-black text-sm">
        <img src="/gambar/logout.png" class="w-4 h-4" />
        <span>Keluar</span>
      </a>
    </div>

    <!-- JS: Atur tampilan overlay -->
    <script>
      const popover = document.getElementById('clickedprofile');
      const backdrop = document.getElementById('popover-backdrop');

      // Tampilkan atau sembunyikan backdrop
      popover.addEventListener('toggle', () => {
        if (popover.matches(':popover-open')) {
          backdrop.classList.remove('hidden');
        } else {
          backdrop.classList.add('hidden');
        }
      });

      // Klik backdrop = tutup popover
      backdrop.addEventListener('click', () => {
        popover.hidePopover();
      });
    </script>

  </body>
</html>