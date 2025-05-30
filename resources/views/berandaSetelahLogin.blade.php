<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Cooknice-Main</title>
  </head>
  
  <body class="bg-[#F9E2AF]">
    <div class = "flex h-screen overflow-hidden">
      <!-- Sidebar -->
      <x-Sidebar></x-Sidebar>

<<<<<<< HEAD
    <div class="bg-[#FFFFFF] text-4xl w-[1250px] h-[720px] rounded-md m-1 border fixed right-1 overflow-y-auto">
      <!-- header -->
      <header class="flex space-x-4 my-2 justify-end sticky top-0 bg-white py-2 z-10">
        <button onclick="toggleProfilePopup()" class="rounded-full border-2 border-[#F58E4A]">
          <img src="/gambar/profile.png" alt="prfil" class="w-[50px] h-[50px] cursor-pointer">
        </button>
        <button class="bg-[#F58E4A] text-white mx-4 text-lg px-6 py-3 rounded-2xl hover:bg-[#f56c4a] text-center flex items-center justify-center space-x-2 cursor-pointer">
          <img src="/gambar/upload.png" alt="unggah" class="w-6 h-6" />
          <span>
            Unggah
          </span>
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
=======
      <div class="bg-[#FFFFFF] text-4xl w-[1250px] flex-1 rounded-md m-2 ml-1 border overflow-y-auto">
        <!-- header -->
        <x-header></x-header>
>>>>>>> e24efa7b364ee9edd7c0d3e6ff8e1bb7138fcddd
        
        <div>
          <!--Logo-->
          <div class="items-center flex justify-center mb-5 mt-5 w-full h-20">
            <img src="gambar/fixlogo.png" alt="logo" class="w-18 rounded-full bg-[#F9E2AF]">
            <img src="gambar/fixtextlogo.png" alt="logo" class="w-50 mt-3 object-cover">
          </div>
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

          <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6 p-4">
            <!-- Card -->
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            
          </div>
          
        </div>
      </div>
      
    </div>

<<<<<<< HEAD
    <!-- Popup Profile -->
    <div id="profilePopup" class="fixed top-16 right-4 bg-white rounded-lg shadow-xl border border-gray-200 w-64 p-4 z-50 hidden">
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
        <a href="/halamanprofile" class="flex items-center space-x-2 hover:bg-gray-100 p-2 rounded">
          <img src="/gambar/user4.png" class="w-4 h-4" />
          <span>Profil</span>
        </a>
<!--        <a href="#" class="flex items-center space-x-2 hover:bg-gray-100 p-2 rounded">
          <img src="/gambar/settings1.png" class="w-4 h-4" />
          <span>Pengaturan</span>
        </a>
-->
      </div>

      <!-- Garis pembatas -->
      <hr class="my-3 border-gray-200">

      <!-- Menu Bawah -->
      <div class="space-y-3 text-sm text-gray-700">
        <a href="#" class="flex items-center space-x-2 hover:bg-gray-100 p-2 rounded text-red-500">
          <img src="/gambar/logout.png" class="w-4 h-4" />
          <span>Keluar</span>
        </a>
      </div>
    </div>

    <script>
      function toggleProfilePopup() {
        const popup = document.getElementById('profilePopup');
        popup.classList.toggle('hidden');
        
        // Tutup popup ketika klik di luar
        if (!popup.classList.contains('hidden')) {
          setTimeout(() => {
            document.addEventListener('click', closePopupOutside);
          }, 10);
        }
      }

      function closePopupOutside(event) {
        const popup = document.getElementById('profilePopup');
        const profileImg = document.querySelector('header img[alt="profile"]');
        
        if (!popup.contains(event.target) && event.target !== profileImg) {
          popup.classList.add('hidden');
          document.removeEventListener('click', closePopupOutside);
        }
      }
    </script>

=======
    <x-clickedprofile></x-clickedprofile>

    

    
>>>>>>> e24efa7b364ee9edd7c0d3e6ff8e1bb7138fcddd
  </body>
</html>