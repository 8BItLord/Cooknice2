<!-- Overlay Backdrop -->
    <div 
      id="popover-backdrop" 
      class="fixed inset-0 z-40 hidden backdrop-blur-sm bg-transparent"
    ></div>
    <!-- Popover -->
    <div 
      id="clickedprofile" 
      popover 
      class="bg-white rounded-xl border border-black shadow-lg p-6 w-full max-w-sm z-50"
      style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);"
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
    </div><?php /**PATH C:\Users\ASUS\Cooknice2\resources\views/components/cliked-profile.blade.php ENDPATH**/ ?>