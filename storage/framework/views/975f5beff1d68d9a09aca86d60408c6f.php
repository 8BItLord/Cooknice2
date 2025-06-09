<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Cooknice-Main</title>
  </head>

  <body class="bg-[#F9E2AF]">
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
        <header class="flex space-x-4 my-2 justify-end sticky top-0 bg-white py-2 z-10">
          <a href="/login" class=" bg-[#F58E4A] text-white border mx-4 text-lg px-6 py-3 rounded-2xl hover:bg-[#f56c4a] text-center flex items-center justify-center space-x-2 cursor-pointer">
            Masuk
          </a>

        </header>
        <div>
          <!--Logo-->
          <div class="items-center flex justify-center mb-5 mt-5 w-full h-20">
            <img src="gambar/fixlogo.png" alt="logo" class="w-18 rounded-full bg-[#F9E2AF]">
            <img src="gambar/fixtextlogo.png" alt="logo" class="w-50 mt-3 object-cover">
          </div>
          <div class="flex justify-center my-4 space-x-2">
            <!-- Search bar -->
            <div class="flex items-center border border-gray-300 rounded-2xl px-4 py-2 w-80">
              <img src="/gambar/search.png" alt="Search" class="w-5 h-5 mr-2">
              <input 
                type="text" 
                placeholder="Cari resep disini" 
                class="flex-grow outline-none text-base placeholder-gray-500"
              >
            </div>

            <!-- Button -->
            <button class="bg-[#F58E4A] text-white text-2xl px-4 py-2 rounded-2xl hover:bg-[#f56c4a] cursor-pointer">
              Cari
            </button>
          </div>

          <div class="grid grid-cols-4 gap-6 p-4">
            <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal081d319767d5e7203090f5ea3bdd8568 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal081d319767d5e7203090f5ea3bdd8568 = $attributes; } ?>
<?php $component = App\View\Components\Cardresep::resolve(['recipe' => $recipe] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cardresep'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Cardresep::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal081d319767d5e7203090f5ea3bdd8568)): ?>
<?php $attributes = $__attributesOriginal081d319767d5e7203090f5ea3bdd8568; ?>
<?php unset($__attributesOriginal081d319767d5e7203090f5ea3bdd8568); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal081d319767d5e7203090f5ea3bdd8568)): ?>
<?php $component = $__componentOriginal081d319767d5e7203090f5ea3bdd8568; ?>
<?php unset($__componentOriginal081d319767d5e7203090f5ea3bdd8568); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
            
            
          </div>
          
        </div>
      </div>
    </div>

    
  </body>
</html><?php /**PATH C:\Users\ASUS\Cooknice2\resources\views/welcome.blade.php ENDPATH**/ ?>