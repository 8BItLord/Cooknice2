<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Cooknice-Main</title>
  </head>

  <body class="bg-[#F9E2AF] font-poppins">
    <div class = "flex h-screen overflow-hidden">
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

      <div class="bg-[#FFFFFF] text-4xl w-[1250px] flex-1 rounded-md m-2 ml-1 border overflow-y-auto">
        <!-- header -->
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

        <div>

          <b class="mx-4 my-2">
            Koleksi anda
          </b>
          <div class="flex flex-col justify-center items-center h-140">
            <img src="/gambar/lightbulb.png" alt="kosong" class="w-65">
            <b class="m-2">
              Belum ada resep
            </b>
            <p class="text-2xl text-[#00000094]">
              Semua resep yang kamu simpan akan ditampilkan disini
            </p>
          </div>
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
</html><?php /**PATH C:\Users\ASUS\Cooknice2\resources\views/koleksiKosong.blade.php ENDPATH**/ ?>