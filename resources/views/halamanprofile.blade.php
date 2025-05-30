<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ['Poppins', 'sans-serif']
          }
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body class="bg-[#F9E2AF] font-poppins">
        <div class="bg-[#FFFFFF] text-4xl text-center w-[80px] h-[710px] rounded-md m-1 border border-[#000000] fixed left-1 flex flex-col items-center">
            <a href="#" class="mt-4 w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center transition">
                <img src="/gambar/fixlogo.png" class="w-10 h-10">
            </a>
            <a href="#" class="">
                <img src="/gambar/home.png" class="w-10 h-10 mt-10">
            </a>
            <a href="#" class="">
                <img src="/gambar/dish1.png" class="w-10 h-10 mt-5">
            </a>
            <a href="#" class="">
                <img src="/gambar/soda.png" class="w-10 h-10 mt-5">
            </a>
            <a href="#" class="">
                <img src="/gambar/nuggets.png" class="w-10 h-10 mt-5">
            </a>
            <a href="#" class="">
                <img src="/gambar/bookmark.png" class="w-10 h-10 mt-5">
            </a>
        </div>

        <div class="bg-[#FFFFFF] text-4xl text-center w-[1430px] h-[710px] rounded-md m-1 border border-[#000000] fixed right-1 overflow-y-auto">
            <!-- header -->
            <header class="flex space-x-4 my-2 justify-end sticky top-0 bg-white py-2 px-4 z-10">
                <button onclick="toggleProfilePopup()" class="rounded-full border-2 border-[#F58E4A]">
                    <img src="/gambar/user.png" alt="prfil" class="w-[50px] h-[50px] cursor-pointer">
                </button>
                <a href="#" class="bg-[#F58E4A] text-white mx-4 text-lg px-6 py-3 rounded-2xl right hover:bg-[#f56c4a] text-center flex items-center justify-center space-x-2 cursor-pointer">
                    <img src="/gambar/upload.png" alt="unggah" class="w-6 h-6" />
                    <span>
                        Unggah
                    </span>
                </a>
            </header>

            <!-- Profil Pengguna -->
            <section class="flex items-center space-x-10 w-[670px] mx-auto py-10">
                <div class="w-[100px] h-[100px] rounded-full overflow-hidden border border-[#000000]">
                    <img src="/gambar/user.png" alt="Foto Profil" class="w-full h-full object-cover">
                </div>
                <div class="text-left">
                    <h1 class="text-2xl font-semibold text-[#333]">Nama Pengguna</h1>
                    <p class="text-base text-gray-600">@id_cooknice123</p>
                </div>
            </section>

            <!-- Bio Tentang Pengguna -->
            <section class="text-center px-8">
                <p class="text-base text-gray-700 mb-4 max-w-2xl mx-auto text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perspiciatis eum accusamus voluptatem iure ipsa aspernatur, laudantium ea ratione, unde ab illum inventore incidunt? Est nostrum sequi ullam esse asperiores.
                </p>
            </section>

            <!-- Tombol Edit Profil -->
            <div class="max-w-[750px] mx-auto text-center flex items-center justify-center px-10 mt-6">
                <a href="/editprofile" class="bg-[#FFFFFF] text-[#000000] px-5 py-2 rounded-xl border border-[#000000] hover:bg-[#FFFFFF] text-sm font-medium w-full">
                    Edit Profil
                </a>
            </div>

            <!-- Pesan Belum Ada Resep -->
            <div class="max-w-[750px] mx-auto text-center mt-10">
                <div class="flex flex-col items-center gap-4">
                    <img src="/gambar/lightbulb.png" class="w-20 h-20">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Belum ada resep</h2>
                    <p class="text-gray-600 text-3xl">Unggah resep yang ingin anda bagikan</p>
                </div>
            </div>
        </div>

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

</body>