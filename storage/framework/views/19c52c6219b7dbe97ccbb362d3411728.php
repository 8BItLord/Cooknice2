<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body class="bg-[#F9E2AF]">
  <div class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <?php if (isset($component)) { $__componentOriginald31f0a1d6e85408eecaaa9471b609820 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald31f0a1d6e85408eecaaa9471b609820 = $attributes; } ?>
<?php $component = App\View\Components\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sidebar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $attributes = $__attributesOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__attributesOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $component = $__componentOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__componentOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>

    <!-- Konten -->
    <div class="bg-[#FFFFFF] text-4xl text-center w-[1430px] flex-1 rounded-md m-2 ml-1 border border-[#000000] overflow-y-auto">
      <!-- Header -->
      <?php if (isset($component)) { $__componentOriginal2a2e454b2e62574a80c8110e5f128b60 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a2e454b2e62574a80c8110e5f128b60 = $attributes; } ?>
<?php $component = App\View\Components\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Header::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a2e454b2e62574a80c8110e5f128b60)): ?>
<?php $attributes = $__attributesOriginal2a2e454b2e62574a80c8110e5f128b60; ?>
<?php unset($__attributesOriginal2a2e454b2e62574a80c8110e5f128b60); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a2e454b2e62574a80c8110e5f128b60)): ?>
<?php $component = $__componentOriginal2a2e454b2e62574a80c8110e5f128b60; ?>
<?php unset($__componentOriginal2a2e454b2e62574a80c8110e5f128b60); ?>
<?php endif; ?>

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
              <button type="submit" class="bg-[#F58E4A] text-white w-[200px] font-semibold py-5 rounded-md hover:bg-[#f56c4a] transition cursor-pointer">Perbarui</button>
            </div>
            <div class="w-1/2 flex justify-center">
              <a href="/halamanprofile" type="button" class="bg-[#F58E4A] text-white w-[200px] font-semibold py-5 rounded-md hover:bg-[#f56c4a] transition cursor-pointer text-center">Batal</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php if (isset($component)) { $__componentOriginalaf931c6533813c406795ddc6c29437fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf931c6533813c406795ddc6c29437fc = $attributes; } ?>
<?php $component = App\View\Components\Clickedprofile::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('clickedprofile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Clickedprofile::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf931c6533813c406795ddc6c29437fc)): ?>
<?php $attributes = $__attributesOriginalaf931c6533813c406795ddc6c29437fc; ?>
<?php unset($__attributesOriginalaf931c6533813c406795ddc6c29437fc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf931c6533813c406795ddc6c29437fc)): ?>
<?php $component = $__componentOriginalaf931c6533813c406795ddc6c29437fc; ?>
<?php unset($__componentOriginalaf931c6533813c406795ddc6c29437fc); ?>
<?php endif; ?>

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
<?php /**PATH C:\Users\ASUS\Cooknice2\resources\views/editprofile.blade.php ENDPATH**/ ?>