<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
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
        <header class="flex items-center justify-between sticky top-0 bg-white py-2 px-4 z-10">
            <!-- Tombol Kembali -->
            <a href="/halamanprofile" class="bg-[#F9E2AF] w-10 h-10 rounded-full flex items-center justify-center shadow">
                <img src="/gambar/left-arrow.png" alt="Kembali" class="w-7 h-7">
            </a>

            <!-- Bagian Profil + Tombol Unggah -->
            <div class="flex space-x-4 items-center">
                <button onclick="toggleProfilePopup()" class="rounded-full border-2 border-[#F58E4A]">
                    <img src="/gambar/user.png" alt="prfil" class="w-[50px] h-[50px] cursor-pointer">
                </button>
                <a href="#" class="bg-[#F58E4A] text-white mx-4 text-lg px-6 py-3 rounded-2xl hover:bg-[#f56c4a] text-center flex items-center justify-center space-x-2 cursor-pointer">
                    <img src="/gambar/upload.png" alt="unggah" class="w-6 h-6" />
                    <span>Unggah</span>
                </a>
            </div>
        </header>

        <!-- Konten Edit Profil -->
        <div class="flex flex-col items-center mt-7">
            <!-- Foto Profil -->
            <div class="flex flex-col items-start w-[800px] space-y-4">
                <!-- Container Foto + Input File -->
                <div class="relative group cursor-pointer">
                    <!-- Foto Profil (Akan Diupdate via JavaScript) -->
                    <img 
                        id="profilePreview" 
                        src="/gambar/user.png" 
                        alt="Foto Profil" 
                        class="w-[120px] h-[120px] rounded-full border-2 border-[#000000] object-cover hover:opacity-80 transition-opacity"
                    >
                
                    <!-- Icon Kamera (Muncul saat Hover) -->
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg class="w-8 h-8 text-white bg-black/50 rounded-full p-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    
                    <!-- Input File (Hidden) -->
                    <input 
                        type="file" 
                        id="profileUpload" 
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                        accept="image/*"
                        onchange="previewProfilePicture(this)"
                    >
                </div>
            </div>

            <!-- Form Edit -->
            <form class="w-[800px] mt-8 space-y-6 text-left text-[16px]">
                <!-- Nama -->
                <div>
                    <label class="font-semibold text-gray-700">Nama</label>
                    <input type="text" placeholder="Nama Anda" class="w-full border-b-2 border-gray-400 outline-none mt-1">
                </div>

                <!-- ID Cooknice -->
                <div>
                    <label class="font-semibold text-gray-700">ID Cooknice</label>
                    <input type="text" placeholder="@1234_abcd" class="w-full border-b-2 border-gray-400 outline-none mt-1 text-gray-500" disabled>
                </div>

                <!-- Email -->
                <div>
                    <label class="font-semibold text-gray-700">Email</label>
                    <div class="flex items-center justify-between border-b-2 border-gray-400 mt-1">
                        <input type="email" value="cooknice123@gmail.com" class="w-full outline-none text-gray-500" disabled>
                        <button onclick="openEmailModal(event)" class="text-[#F58E4A] font-semibold text-sm ml-2 hover:underline">
                            Ganti
                        </button>
                    </div>
                </div>

                <!-- Tentang Kamu -->
                <div>
                    <label class="font-semibold text-gray-700">Tentang kamu</label>
                    <input type="text" placeholder="“nama, umur, terserah apa aja”" class="w-full border-b-2 border-gray-400 outline-none mt-1 text-gray-500">
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-between items-center pt-4">
                    <div class="w-1/2 flex justify-center">
                        <button type="submit" class="bg-[#025464] text-white w-[200px] font-semibold py-2 rounded-md hover:bg-[#013f4c] transition">
                            Perbarui
                        </button>
                    </div>
                    <div class="w-1/2 flex justify-center">
                        <button type="button" class="bg-[#558B8C] text-white w-[200px] font-semibold py-2 rounded-md hover:bg-[#3e6c6d] transition">
                            Batal
                        </button>
                    </div>
                </div>
            </form>
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
<!--            <a href="#" class="flex items-center space-x-2 hover:bg-gray-100 p-2 rounded">
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

        <!-- Modal Ganti Email -->
        <div id="emailModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="relative bg-white rounded-xl border border-black shadow-lg w-[500px] p-6" onclick="event.stopPropagation()">
                <!-- Header -->
                <div class="relative mb-4">
                    <div class="flex items-center space-x-2">
                        <button onclick="closeEmailModal()" class="text-xl font-bold">&larr;</button>
                            <h2 class="text-lg font-semibold">Ganti Alamat Email</h2>
                    </div>
                    <button onclick="closeEmailModal()" class="absolute right-0 top-0 text-xl">&times;</button>
                </div>

                <!-- Form Input -->
                <div class="mt-6 space-y-3 text-sm text-gray-600">
                    <p>Masukkan alamat email baru. Konfirmasi email akan dikirim</p>
                        <input type="email" placeholder="Alamat email baru" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#F58E4A]">
                    <p>Alamat email saat ini: <span class="font-semibold text-black">cooknice123@gmail.com</span></p>
                </div>

                <!-- Tombol Kirim -->
                <div class="flex justify-center mt-6">
                    <button type="button" class="w-[250px] bg-[#F58E4A] hover:bg-[#f56c4a] text-white font-semibold py-2 rounded-md transition"onclick="changeEmail()">
                        Kirim
                    </button>
                </div>
            </div>
        </div>

        <script>
        // Buka modal (tambahkan parameter event)
        function openEmailModal(event) {
        event.stopPropagation(); // Penting!
        document.getElementById('emailModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        
        // Tambahkan event listener untuk overlay
        document.getElementById('emailModal').addEventListener('click', function(e) {
            if (e.target === this) { // Jika klik di overlay (area gelap)
            closeEmailModal();
            }
        });
        }

        // Tutup modal
        function closeEmailModal() {
        document.getElementById('emailModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
        }

        // Ganti email
        function changeEmail(event) {
        event.preventDefault(); // Penting!
        const newEmail = document.querySelector('#emailModal input[type="email"]').value;
        if (newEmail) {
            alert(`Email berhasil diubah menjadi: ${newEmail}\n\n*Simulasi frontend`);
            closeEmailModal();
        } else {
            alert('Email tidak boleh kosong!');
        }
        }

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

        function previewProfilePicture(input) {
        const preview = document.getElementById('profilePreview');
        const file = input.files[0];
    
            if (file) {
                const reader = new FileReader();
      
                reader.onload = function(e) {
                preview.src = e.target.result;
        
                    // Simpan gambar di localStorage (opsional)
                    localStorage.setItem('profilePicture', e.target.result);
                }
      
                reader.readAsDataURL(file);
            }
        }

        // Load gambar dari localStorage (saat halaman dimuat)
        document.addEventListener('DOMContentLoaded', function() {
            const savedPicture = localStorage.getItem('profilePicture');
            if (savedPicture) {
            document.getElementById('profilePreview').src = savedPicture;
            }
        });
        </script>
</body>