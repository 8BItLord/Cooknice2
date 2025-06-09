<div
  id="popover-backdrop"
  class="fixed inset-0 z-40 hidden backdrop-blur-sm bg-transparent"
></div>
<div
  id="clickedprofile"
  popover
  class="bg-white rounded-xl border border-black shadow-lg p-6 w-full max-w-sm z-50"
  style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);"
>
  <div class="flex items-center space-x-3 mb-4">
    <img src="<?php echo e(Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('gambar/profile.png')); ?>" alt="Avatar" class="w-10 h-10 rounded-full">
    <div>
      <p class="text-sm font-semibold text-gray-800">
        <?php echo e(Auth::user()->name ?? 'Guest User'); ?> 
      </p>
    </div>
    <button id="closeprofile" class="absolute right-3 top-2 text-xl cursor-pointer">&times;</button>
  </div>

  <div class="space-y-3 text-sm text-gray-700">
    <a href="/halamanprofile" class="flex items-center space-x-2 cursor-pointer hover:text-black">
      <img src="/gambar/user4.png" class="w-4 h-4" />
      <span>Profil</span>
    </a>

  </div>

  <hr class="my-3 border-t border-black">

  <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form">
    <?php echo csrf_field(); ?>
    <button type="submit" class="flex items-center space-x-2 cursor-pointer hover:text-black text-sm">
      <img src="/gambar/logout.png" class="w-4 h-4" />
      <span>Keluar</span>
    </button>
  </form>
</div>

<script>
  const popover = document.getElementById('clickedprofile');
  const backdrop = document.getElementById('popover-backdrop');
  const closepopover = document.getElementById('closeprofile');

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

  // Close popup profile
  closepopover.addEventListener('click', () => {
    popover.hidePopover();
  });

</script><?php /**PATH C:\Users\ASUS\Cooknice2\resources\views/components/clicked-profile.blade.php ENDPATH**/ ?>