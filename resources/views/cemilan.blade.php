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
    <!-- nav bar -->
    <nav class="bg-[#FFFFFF] w-[264px] h-[720px] rounded-md m-1 border fixed left-1">
      <img src="/gambar/logotext.png" alt="logo" class="w-50 h-auto mx-auto my-8">
      <button class="flex space-x-3 w-[232px] text-[#000000] px-4 py-2 rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] cursor-pointer">
        <img src="/gambar/home.png" alt="beranda" class="w-[42px] h-auto ">
        <span class="text-4xl">
          Beranda
        </span>
      </button>
      <button class="flex space-x-3 w-[232px] text-[#000000] px-4 py-2 rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] cursor-pointer">
        <img src="/gambar/dish (1).png" alt="makanan" class="w-[42px] h-auto ">
        <span class="text-4xl">
          Makanan
        </span>
      </button>
      <button class="flex space-x-3 w-[232px] text-[#000000] px-4 py-2 rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] cursor-pointer">
        <img src="/gambar/soda.png" alt="minuman" class="w-[42px] h-auto ">
        <span class="text-4xl">
          Minuman
        </span>
      </button>
      <button class="flex space-x-3 w-[232px] px-4 py-2 bg-[#F58E4A] text-white rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] hover:text-black cursor-pointer">
        <img src="/gambar/nuggets.png" alt="cemilan" class="w-[42px] h-auto ">
        <span class="text-4xl">
          Cemilan
        </span>
      </button>
      <button class="flex space-x-3 w-[232px] text-[#000000] px-4 py-2 rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] cursor-pointer">
        <img src="/gambar/bookmark.png" alt="koleksi" class="w-[42px] h-auto ">
        <span class="text-4xl">
          Koleksi
        </span>
      </button>
    </nav>

    <div class="bg-[#FFFFFF] text-4xl w-[1250px] h-[720px] rounded-md m-1 border fixed right-1 overflow-y-auto">
      <!-- header -->
      <header class="flex justify-between items-center sticky top-0 bg-white py-2 z-10 my-2 px-4">
        <div class="bg-[#F9E2AF] rounded-full p-2 cursor-pointer">
          <img src="/gambar/back.png" alt="kembali" class="w-[24px] h-[24px]">
        </div>

        <div class="flex items-center space-x-4">
          <img src="/gambar/profile.png" alt="profil" class="w-[50px] h-[50px] cursor-pointer">
          <button class="bg-[#F58E4A] text-white text-lg px-6 py-3 rounded-2xl hover:bg-[#f56c4a] flex items-center justify-center space-x-2 cursor-pointer">
            <img src="/gambar/upload.png" alt="unggah" class="w-6 h-6" />
            <span>Unggah</span>
          </button>
        </div>
      </header>

      <div>
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

        <b class="mx-4 my-2">
          Cemilan
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
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
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
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
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
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
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
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
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
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
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
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
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
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
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
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
          
          
        </div>
        
      </div>
    </div>
  </body>
</html>