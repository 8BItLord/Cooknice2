<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  @vite('resources/css/app.css')

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body class="bg-[#F9E2AF]">
  <div class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <x-sidebar></x-sidebar>

    <!-- Konten -->
    <div class="bg-[#FFFFFF] text-4xl text-center w-[1430px] flex-1 rounded-md m-2 ml-1 border border-[#000000] overflow-y-auto">
      <!-- Header -->
      <x-header></x-header>

      <!-- Konten Edit Profil -->
      <div class="flex flex-col items-center mt-7">
        <div class="flex justify-start w-[800px] mb-10">
          <img src="/gambar/user.png" alt="Foto Profil" class="w-[120px] h-[120px] rounded-full border border-[#000000]">
        </div>

        <form class="w-[800px] space-y-6 text-left text-[16px]">
          <div>
            <label class="font-semibold text-gray-700">Nama</label>
            <input type="text" placeholder="Nama Anda" class="w-full border-b-2 border-gray-400 py-3 outline-none my-5">
          </div>

          <div>
            <label class="font-semibold text-gray-700">ID Cooknice</label>
            <input type="text" placeholder="@1234_abcd" class="w-full border-b-2 border-gray-400 outline-none my-5 bg-gray-50 py-3 text-gray-500" disabled>
          </div>

          <div>
            <label class="font-semibold text-gray-700">Email</label>
            <div class="flex items-center justify-between border-b-2 border-gray-400 my-5">
              <input type="email" value="cooknice123@gmail.com" class="w-full outline-none text-gray-500 bg-gray-50 py-3" disabled>
              <button type="button" onclick="openEmailPopup()" class="text-[#F58E4A] font-semibold text-sm ml-2 hover:underline cursor-pointer">Ganti</button>
            </div>
          </div>

          <div>
            <label class="font-semibold text-gray-700">Tentang kamu</label>
            <input type="text" placeholder="“nama, umur, terserah apa aja”" class="w-full border-b-2 border-gray-400 outline-none my-5 py-3 text-gray-500">
          </div>

          <div class="flex justify-between items-center my-4">
            <div class="w-1/2 flex justify-center">
              <button type="submit" class="bg-[#025464] text-white w-[200px] font-semibold py-5 rounded-md hover:bg-[#013f4c] transition cursor-pointer">Perbarui</button>
            </div>
            <div class="w-1/2 flex justify-center">
              <button type="button" class="bg-[#558B8C] text-white w-[200px] font-semibold py-5 rounded-md hover:bg-[#3e6c6d] transition cursor-pointer">Batal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <x-clickedprofile></x-clickedprofile>

  <!-- Popup Ganti Email -->
    <div id="email-popup-wrapper" class="fixed inset-0 z-50 hidden items-center justify-center min-h-screen bg-black/30 backdrop-blur-sm">
        <div id="gantiemail" class="relative bg-white rounded-xl border border-black shadow-lg w-[500px] p-6">
        <div class="relative mb-4">
            <div class="flex items-center space-x-2">
            <h2 class="text-lg">Ganti Alamat Email</h2>
            </div>
            <button class="absolute right-0 top-0 text-xl cursor-pointer" onclick="closeEmailPopup()">&times;</button>
        </div>
        <div class="mt-6 space-y-3 text-[14px] text-gray-600">
            <p>Masukkan alamat email baru. Konfirmasi email akan dikirim</p>
            <input type="email" placeholder="Alamat email baru" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400" />
            <p>Alamat email saat ini: <span class="font-semibold text-black">cooknice123@gmail.com</span></p>
        </div>
        <div class="flex justify-center mt-4">
            <button type="submit" class="w-[250px] bg-orange-400 hover:bg-orange-500 text-white font-semibold py-2 rounded-md transition cursor-pointer">Kirim</button>
        </div>
        </div>
    </div>

  <!-- Script -->
  <script>
  
    // Popup Ganti Email
    function openEmailPopup() {
    const wrapper = document.getElementById('email-popup-wrapper');
    wrapper.classList.remove('hidden');
    wrapper.classList.add('flex'); // Tambahkan flex saat tampil
    document.body.style.overflow = 'hidden';
    }

    function closeEmailPopup() {
    const wrapper = document.getElementById('email-popup-wrapper');
    wrapper.classList.remove('flex'); // Hapus flex saat sembunyi
    wrapper.classList.add('hidden');
    document.body.style.overflow = 'auto';
    }


    // Tutup popup saat klik di luar kotak popup (di backdrop)
    document.getElementById('email-popup-wrapper').addEventListener('click', function(event) {
    const popup = document.getElementById('gantiemail');
    if (!popup.contains(event.target)) {
        closeEmailPopup();
    }
    });

  </script>
</body>
</html>
