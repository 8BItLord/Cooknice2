<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css', 'resources/js/app.js')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Cooknice-Main</title>
  </head>
  <body class="bg-[#F9E2AF] font-poppins">
    <!-- Sidebar Navigasi -->
    <nav class="bg-[#FFFFFF] w-[264px] h-[720px] rounded-md m-1 border fixed left-1">
      <img src="/gambar/logotext.png" alt="logo" class="w-50 h-auto mx-auto my-8">
      <button class="flex space-x-3 w-[232px] text-[#000000] px-4 py-2 rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] cursor-pointer">
        <img src="/gambar/home.png" alt="beranda" class="w-[42px] h-auto ">
        <span class="text-4xl">Beranda</span>
      </button>
      <button class="flex space-x-3 w-[232px] text-[#000000] px-4 py-2 rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] cursor-pointer">
        <img src="/gambar/dish (1).png" alt="makanan" class="w-[42px] h-auto ">
        <span class="text-4xl">Makanan</span>
      </button>
      <button class="flex space-x-3 w-[232px] text-[#000000] px-4 py-2 rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] cursor-pointer">
        <img src="/gambar/soda.png" alt="minuman" class="w-[42px] h-auto ">
        <span class="text-4xl">Minuman</span>
      </button>
      <button class="flex space-x-3 w-[232px] text-[#000000] px-4 py-2 rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] cursor-pointer">
        <img src="/gambar/nuggets.png" alt="cemilan" class="w-[42px] h-auto ">
        <span class="text-4xl">Cemilan</span>
      </button>
      <button class="flex space-x-3 w-[232px] px-4 py-2 bg-[#F58E4A] text-white rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] hover:text-black cursor-pointer">
        <img src="/gambar/bookmark.png" alt="koleksi" class="w-[42px] h-auto ">
        <span class="text-4xl">Koleksi</span>
      </button>
    </nav>

    <!-- Konten Utama -->
    <div class="bg-[#FFFFFF] text-4xl w-[1250px] h-[720px] rounded-md m-1 border fixed right-1 overflow-y-auto">
      <!-- Header -->
      <header class="flex justify-between items-center sticky top-0 bg-white py-2 z-10 my-2 px-4">
        <div class="bg-[#F9E2AF] rounded-full p-2 cursor-pointer">
          <img src="/gambar/back.png" alt="kembali" class="w-[24px] h-[24px]">
        </div>

        <div class="flex items-center space-x-4">
          <a href="/login" class="bg-teal-800 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded text-base">Masuk</a>
          <a href="/clickedprofile">
            <img src="/gambar/user.png" alt="User" class="w-[50px] h-[50px] cursor-pointer">
          </a>
          <button class="bg-[#F58E4A] text-white text-lg px-6 py-3 rounded-2xl hover:bg-[#f56c4a] flex items-center justify-center space-x-2 cursor-pointer">
            <img src="/gambar/upload.png" alt="unggah" class="w-6 h-6" />
            <span>Unggah</span>
          </button>
        </div>
      </header>

      <!-- Konten Koleksi -->
      <div>
        <b class="mx-4 my-2 block">Koleksi anda</b>
        <div class="grid grid-cols-4 gap-6 p-4">
          <!-- Card -->
          <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
            <img src="/gambar/risolmayo.jpeg" alt="Menu" class="w-full h-40 object-cover">
            <div class="p-4 flex justify-between items-center">
              <div>
                <h2 class="font-bold text-lg">Nama menu</h2>
                <p class="text-sm text-gray-600">nama pengunggah</p>
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
                <h2 class="font-bold text-lg">Nama menu</h2>
                <p class="text-sm text-gray-600">nama pengunggah</p>
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
                <h2 class="font-bold text-lg">Nama menu</h2>
                <p class="text-sm text-gray-600">nama pengunggah</p>
              </div>
              <button>
                <img src="/gambar/bookmarked.png" alt="bookmarked" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
