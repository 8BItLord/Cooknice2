@extends ('layouts.app')

@section ('tittle', 'cooknice')

@section ('content')
    <div class = "flex h-screen overflow-hidden">
      <!-- Sidebar -->
      <x-Sidebar></x-Sidebar>

      <div class="bg-[#FFFFFF] text-4xl w-[1250px] flex-1 rounded-md m-2 ml-1 border overflow-y-auto">
        <!-- header -->
        <x-header></x-header>
        
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

          <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6 p-4">
            <!-- Card -->
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            <x-cardresep></x-cardresep>
            
          </div>
          
        </div>
      </div>
    </div>

    <x-clickedprofile></x-clickedprofile>

    
@endsection