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
        <div class = "flex h-screen overflow-hidden">
            <aside class="bg-[#FFFFFF] text-4xl text-center w-[80px] flex-shrink-0 rounded-md m-2 mr-1 border border-[#000000] flex flex-col items-center">
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
            </aside>

            <div class="bg-[#FFFFFF] text-4xl text-center w-[1430px] flex-1 rounded-md m-2 ml-1 border border-[#000000] overflow-y-auto">
                <!-- header -->
                <header class="flex space-x-4 my-2 justify-end top-0 bg-white py-2 px-4 z-10">
                    <button popovertarget="clickedprofile" class="rounded-full">
                        <img src="/gambar/profile.png" alt="prfil" class="w-[50px] h-[50px] cursor-pointer border-2 rounded-full border-[#F58E4A]">
                    </button>
                    <a href="/uploadresep" class="bg-[#F58E4A] text-white mx-4 text-lg px-6 py-3 rounded-2xl right hover:bg-[#f56c4a] text-center flex items-center justify-center space-x-2 cursor-pointer">
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
        class="absolute bg-white rounded-xl border border-black shadow-lg p-6 w-full max-w-sm z-50"
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