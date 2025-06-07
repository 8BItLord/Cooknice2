@extends ('layouts.app')

@section ('tittle', 'cooknice')

@section ('content')

<div class="flex h-screen overflow-hidden">
    <x-sidebar></x-sidebar>        
    
    <div class="bg-white w-full flex-1 rounded-md m-2 ml-1 border overflow-y-auto">
        <x-header></x-header>

        <div class="p-6">
            <!-- Header Resep -->
            <div class="flex flex-wrap gap-4">
                <!-- Gambar Resep -->
                <div class="flex-shrink-0">
                    <img src="/gambar/SatePadang.jpeg" alt="fotoResep" class="w-64 h-64 object-cover rounded-2xl">
                    
                </div>

                <!-- Konten Kanan -->
                <div class="flex flex-col justify-between flex-1 min-w-[300px]">
                    <div>
                        <h1 class="text-3xl font-bold mb-1">Nama resep</h1>

                        <a href="#" class="inline-flex items-center gap-2 mb-2 px-2 py-1 rounded">
                            <img src="/gambar/profile.png" alt="profil" class="w-10 h-10 border-2 rounded-full border-[#F58E4A]">
                            <div>
                                <p class="font-semibold">nama pengunggah</p>
                                <p class="text-sm text-gray-500">@id_pengunggah</p>
                            </div>
                        </a>

                        <!-- Deskripsi -->
                        <p id="deskripsi" class="text-gray-700 line-clamp-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis aperiam accusantium dolor tempora minus modi laudantium accusamus pariatur illo, non aliquam incidunt consequuntur eius quia maxime? Assumenda id debitis corrupti impedit expedita. Minus recusandae sunt sint temporibus perspiciatis nemo quasi a asperiores laboriosam quam! Fugit ullam magni hic ducimus? Debitis fugiat est fuga libero dolores esse saepe sapiente, alias excepturi deserunt provident natus distinctio quam enim corrupti ipsa veniam perspiciatis rerum iusto eligendi illo dicta necessitatibus tempore. Perspiciatis, sapiente eveniet ullam ea ratione quo illo maxime nulla deserunt cum soluta aliquid sed autem, quisquam nisi commodi, veritatis recusandae est id?
                        </p>
                        <button onclick="toggleDeskripsi()" class="text-[#F58E4A] hover:underline cursor-pointer font-bold text-sm mt-1">Lebih Banyak 
                            <span id="arrow">
                                ▼
                            </span>
                        </button>
                    </div>

                    <!-- Button -->
                    <div class="mt-4">
                        <button class=" text-white font-semibold px-4 py-2 rounded-lg flex items-center gap-2 bg-[#F58E4A] hover:bg-[#f56c4a] cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="{{ request()->is('koleksiAda') ? 'black' : 'none' }}" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                            </svg>
                            Tambahkan ke koleksi
                        </button>

                        
                    </div>
                </div>

            
            </div>
            <div class="flex justify-between mt-2 gap-10 ">
                <div class="mt-2 text-sm flex items-center gap-1 text-black w-1/4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>

                    porsi
                </div>

                <div class="mt-2 text-sm flex items-center gap-1 text-black w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    durasi (menit)
                </div>
            </div>

            <!-- Bahan dan Cara Membuat -->
            <div class="flex justify-between mt-10 gap-10 ">
                <!-- Bahan-bahan -->
                <div class="w-1/4">
                    <h2 class="text-2xl font-bold mb-2">Bahan-bahan</h2>
                    <ul class="list-none space-y-1">
                        @for ($i = 1; $i <= 10; $i++)
                            <li class="border-b border-dotted border-gray-400 font-semibold">bahan {{ $i }}</li>
                        @endfor
                    </ul>
                </div>

                <!-- Cara Membuat -->
                <div class="w-full">
                    <h2 class="text-2xl font-bold mb-2">Cara membuat</h2>
                    <ol class="list-decimal pl-5 space-y-4">
                        <li>
                            <p>cara pertama</p>
                            <img src="/gambar/SatePadang.jpeg" class="w-24 h-24 rounded mt-1" alt="Langkah 1">
                        </li>
                        <li>
                            <p>cara kedua</p>
                            <img src="/gambar/SatePadang.jpeg" class="w-24 h-24 rounded mt-1" alt="Langkah 2">
                        </li>
                        <li>
                            <p>dst</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Deskripsi Expand Script -->
<script>
    function toggleDeskripsi() {
        const desc = document.getElementById("deskripsi");
        const arrow = document.getElementById("arrow");

        if (desc.classList.contains("line-clamp-2")) {
            desc.classList.remove("line-clamp-2");
            arrow.innerText = "▲";
        } else {
            desc.classList.add("line-clamp-2");
            arrow.innerText = "▼";
        }
    }
</script>

@endsection
