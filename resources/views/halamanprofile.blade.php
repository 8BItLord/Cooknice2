<!DOCTYPE html>
<html lang="id">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    </head>

    <body class="bg-[#F9E2AF]">
        <div class = "flex h-screen overflow-hidden">
            <x-sidebar></x-sidebar>

            <div class="bg-[#FFFFFF] text-4xl text-center w-[1430px] flex-1 rounded-md m-2 ml-1 border border-[#000000] overflow-y-auto">
                <!-- header -->
                <x-header></x-header>

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
        

        <x-clickedprofile></x-clickedprofile>

        

    </body>
</html>
