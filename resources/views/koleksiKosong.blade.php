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
      <button class="flex space-x-3 w-[232px] text-[#000000] px-4 py-2 rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] cursor-pointer">
        <img src="/gambar/nuggets.png" alt="cemilan" class="w-[42px] h-auto ">
        <span class="text-4xl">
          Cemilan
        </span>
      </button>
      <button class="flex space-x-3 w-[232px] px-4 py-2 bg-[#F58E4A] text-white rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] hover:text-black cursor-pointer">
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

        <b class="mx-4 my-2">
          Koleksi anda
        </b>
        <div class="flex flex-col justify-center items-center h-140">
          <img src="/gambar/lightbulb.png" alt="kosong" class="w-65">
          <b class="m-2">
            Belum ada resep
          </b>
          <p class="text-2xl text-[#00000094]">
            Semua resep yang kamu simpan akan ditampilkan disini
          </p>
        </div>
        
      </div>
    </div>
  </body>
</html>