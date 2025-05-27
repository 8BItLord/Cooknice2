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
  <div class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <aside class="bg-[#FFFFFF] text-4xl text-center w-[80px] flex-shrink-0 rounded-md m-2 mr-1 border border-[#000000] flex flex-col items-center">
      <a href="#" class="mt-4 w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center transition">
        <img src="/gambar/fixlogo.png" class="w-10 h-10">
      </a>
      <a href="#"><img src="/gambar/home.png" class="w-10 h-10 mt-10"></a>
      <a href="#"><img src="/gambar/dish1.png" class="w-10 h-10 mt-5"></a>
      <a href="#"><img src="/gambar/soda.png" class="w-10 h-10 mt-5"></a>
      <a href="#"><img src="/gambar/nuggets.png" class="w-10 h-10 mt-5"></a>
      <a href="#"><img src="/gambar/bookmark.png" class="w-10 h-10 mt-5"></a>
    </aside>

    <!-- Konten -->
    <div class="bg-[#FFFFFF] text-4xl text-center w-[1430px] flex-1 rounded-md m-2 ml-1 border border-[#000000] overflow-y-auto">
      <!-- Header -->
      <header class="flex items-center justify-between sticky top-0 bg-white py-2 px-4 z-10">
        <a href="/halamanprofile" class="bg-[#F9E2AF] w-10 h-10 rounded-full flex items-center justify-center shadow">
          <img src="/gambar/left-arrow.png" alt="Kembali" class="w-7 h-7">
        </a>
        <div class="flex space-x-4 items-center">
          <button popovertarget="clickedprofile" class="rounded-full">
            <img src="/gambar/profile.png" alt="profil" class="w-[50px] h-[50px] cursor-pointer border-2 rounded-full border-[#F58E4A]">
          </button>
          <a href="/uploadresep" class="bg-[#F58E4A] text-white mx-4 text-lg px-6 py-3 rounded-2xl hover:bg-[#f56c4a] flex items-center space-x-2">
            <img src="/gambar/upload.png" alt="unggah" class="w-6 h-6" />
            <span>Unggah</span>
          </a>
        </div>
      </header>

      <!-- Konten Edit Profil -->
      <div class="flex flex-col items-center mt-7">
        <div class="flex justify-start w-[800px]">
          <img src="/gambar/user.png" alt="Foto Profil" class="w-[120px] h-[120px] rounded-full border border-[#000000]">
        </div>

        <form class="w-[800px] mt-8 space-y-6 text-left text-[16px]">
          <div>
            <label class="font-semibold text-gray-700">Nama</label>
            <input type="text" placeholder="Nama Anda" class="w-full border-b-2 border-gray-400 outline-none mt-1">
          </div>

          <div>
            <label class="font-semibold text-gray-700">ID Cooknice</label>
            <input type="text" placeholder="@1234_abcd" class="w-full border-b-2 border-gray-400 outline-none mt-1 text-gray-500" disabled>
          </div>

          <div>
            <label class="font-semibold text-gray-700">Email</label>
            <div class="flex items-center justify-between border-b-2 border-gray-400 mt-1">
              <input type="email" value="cooknice123@gmail.com" class="w-full outline-none text-gray-500" disabled>
              <button type="button" onclick="openEmailPopup()" class="text-[#F58E4A] font-semibold text-sm ml-2 hover:underline">Ganti</button>
            </div>
          </div>

          <div>
            <label class="font-semibold text-gray-700">Tentang kamu</label>
            <input type="text" placeholder="“nama, umur, terserah apa aja”" class="w-full border-b-2 border-gray-400 outline-none mt-1 text-gray-500">
          </div>

          <div class="flex justify-between items-center pt-4">
            <div class="w-1/2 flex justify-center">
              <button type="submit" class="bg-[#025464] text-white w-[200px] font-semibold py-2 rounded-md hover:bg-[#013f4c] transition">Perbarui</button>
            </div>
            <div class="w-1/2 flex justify-center">
              <button type="button" class="bg-[#558B8C] text-white w-[200px] font-semibold py-2 rounded-md hover:bg-[#3e6c6d] transition">Batal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Popover Profil -->
  <div id="popover-backdrop" class="fixed inset-0 z-40 hidden backdrop-blur-sm bg-transparent"></div>
  <div id="clickedprofile" popover class="absolute bg-white rounded-xl border border-black shadow-lg p-6 w-full max-w-sm z-50">
    <div class="flex items-center space-x-3 mb-4">
      <img src="/gambar/user.png" alt="Avatar" class="w-10 h-10 rounded-full">
      <div>
        <p class="text-sm font-semibold text-gray-800">Nama Pengguna</p>
        <p class="text-xs text-gray-500">@cooknice123</p>
      </div>
    </div>
    <div class="space-y-3 text-sm text-gray-700">
      <a href="/halamanprofile" class="flex items-center space-x-2 hover:text-black">
        <img src="/gambar/user4.png" class="w-4 h-4" />
        <span>Profil</span>
      </a>
      <a href="#" class="flex items-center space-x-2 hover:text-black">
        <img src="/gambar/settings1.png" class="w-4 h-4" />
        <span>Pengaturan</span>
      </a>
    </div>
    <hr class="my-3 border-t border-black">
    <a href="#" class="flex items-center space-x-2 hover:text-black text-sm">
      <img src="/gambar/logout.png" class="w-4 h-4" />
      <span>Keluar</span>
    </a>
  </div>

  <!-- Popup Ganti Email -->
    <div id="email-popup-wrapper" class="fixed inset-0 z-50 hidden items-center justify-center min-h-screen bg-black/30 backdrop-blur-sm">
        <div id="gantiemail" class="relative bg-white rounded-xl border border-black shadow-lg w-[500px] p-6">
        <div class="relative mb-4">
            <div class="flex items-center space-x-2">
            <h2 class="text-lg">Ganti Alamat Email</h2>
            </div>
            <button class="absolute right-0 top-0 text-xl" onclick="closeEmailPopup()">&times;</button>
        </div>
        <div class="mt-6 space-y-3 text-[14px] text-gray-600">
            <p>Masukkan alamat email baru. Konfirmasi email akan dikirim</p>
            <input type="email" placeholder="Alamat email baru" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400" />
            <p>Alamat email saat ini: <span class="font-semibold text-black">cooknice123@gmail.com</span></p>
        </div>
        <div class="flex justify-center mt-4">
            <button type="submit" class="w-[250px] bg-orange-400 hover:bg-orange-500 text-white font-semibold py-2 rounded-md transition">Kirim</button>
        </div>
        </div>
    </div>

  <!-- Script -->
  <script>
    // Popover Profile
    const popover = document.getElementById('clickedprofile');
    const backdrop = document.getElementById('popover-backdrop');
    popover.addEventListener('toggle', () => {
      if (popover.matches(':popover-open')) {
        backdrop.classList.remove('hidden');
      } else {
        backdrop.classList.add('hidden');
      }
    });
    backdrop.addEventListener('click', () => {
      popover.hidePopover();
    });

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
