<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Cooknice-Main</title>
  </head>
  <body class="bg-[#F9E2AF] font-poppins">
    <!-- nav bar -->
    <nav class="bg-[#FFFFFF] w-[264px] h-[720px] rounded-md m-1 border fixed left-1">
      <img src="/gambar/logotext.png" alt="logo" class="w-50 h-auto mx-auto my-8">
      <button class="flex space-x-3 w-[232px] px-4 py-2 bg-[#F58E4A] text-white rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] hover:text-black cursor-pointer">
        <img src="/gambar/home.png" alt="beranda" class="w-[42px] h-auto ">
        <span class="text-4xl">
          Beranda
        </span>
      </button>
      <button class="flex space-x-3 w-[232px] text-[#000000] px-4 py-2 rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] cursor-pointer">
        <img src="/gambar/dish (1).png" alt="makanan" class="w-[42px] h-auto ">
        <span class="text-4xl">
          Makanan
        </span>
      </button>
      <button class="flex space-x-3 w-[232px] text-[#000000] px-4 py-2 rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] cursor-pointer">
        <img src="/gambar/soda.png" alt="minuman" class="w-[42px] h-auto ">
        <span class="text-4xl">
          Minuman
        </span>
      </button>
      <button class="flex space-x-3 w-[232px] text-[#000000] px-4 py-2 rounded-2xl mx-4 my-4 hover:bg-[#D9D9D9] cursor-pointer">
        <img src="/gambar/nuggets.png" alt="cemilan" class="w-[42px] h-auto ">
        <span class="text-4xl">
          Cemilan
        </span>
      </button>
    </nav>

    <div class="bg-[#FFFFFF] text-4xl w-[1250px] h-[720px] rounded-md m-1 border fixed right-1 overflow-y-auto">
      <!-- header -->
      <header class="flex space-x-4 my-2 justify-end sticky top-0 bg-white py-2 z-10">
        <button onclick="openLoginModal()" class="text-[#0000008c] border mx-0 text-lg px-6 py-3 rounded-2xl hover:text-black text-center flex items-center justify-center space-x-2 cursor-pointer">
          Masuk
        </button>
        <button class="bg-[#F58E4A] text-white mx-4 text-lg px-6 py-3 rounded-2xl hover:bg-[#f56c4a] text-center flex items-center justify-center space-x-2 cursor-pointer">
          <img src="/gambar/upload.png" alt="unggah" class="w-6 h-6" />
          <span>
            Unggah
          </span>
        </button>
      </header>
      <div>
        <img src="/gambar/logotext.png" alt="logo" class="mx-auto">
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
          <!-- Card -->
          <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
            <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
            <div class="p-4 flex justify-between items-center">
              <div>
                <h2 class="font-bold text-lg">
                  Nama menu
                </h2>
                <p class="text-sm text-gray-600">
                  nama pengunggah
                </p>
              </div>
              <button>
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
          <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
            <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
            <div class="p-4 flex justify-between items-center">
              <div>
                <h2 class="font-bold text-lg">
                  Nama menu
                </h2>
                <p class="text-sm text-gray-600">
                  nama pengunggah
                </p>
              </div>
              <button>
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
          <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
            <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
            <div class="p-4 flex justify-between items-center">
              <div>
                <h2 class="font-bold text-lg">
                  Nama menu
                </h2>
                <p class="text-sm text-gray-600">
                  nama pengunggah
                </p>
              </div>
              <button>
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
          <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
            <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
            <div class="p-4 flex justify-between items-center">
              <div>
                <h2 class="font-bold text-lg">
                  Nama menu
                </h2>
                <p class="text-sm text-gray-600">
                  nama pengunggah
                </p>
              </div>
              <button>
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
          <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
            <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
            <div class="p-4 flex justify-between items-center">
              <div>
                <h2 class="font-bold text-lg">
                  Nama menu
                </h2>
                <p class="text-sm text-gray-600">
                  nama pengunggah
                </p>
              </div>
              <button>
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
          <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
            <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
            <div class="p-4 flex justify-between items-center">
              <div>
                <h2 class="font-bold text-lg">
                  Nama menu
                </h2>
                <p class="text-sm text-gray-600">
                  nama pengunggah
                </p>
              </div>
              <button>
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
          <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
            <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
            <div class="p-4 flex justify-between items-center">
              <div>
                <h2 class="font-bold text-lg">
                  Nama menu
                </h2>
                <p class="text-sm text-gray-600">
                  nama pengunggah
                </p>
              </div>
              <button>
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
          <div class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
            <img src="/gambar/SatePadang.jpeg" alt="Menu" class="w-full h-40 object-cover">
            <div class="p-4 flex justify-between items-center">
              <div>
                <h2 class="font-bold text-lg">
                  Nama menu
                </h2>
                <p class="text-sm text-gray-600">
                  nama pengunggah
                </p>
              </div>
              <button>
                <img src="/gambar/bookmark.png" alt="Bookmark" class="w-6 h-6 cursor-pointer">
              </button>
            </div>
          </div>
          
          
        </div>
        
      </div>
    </div>
      
    <!-- Modal Login  -->
    <div id="loginModal" class="fixed inset-0 flex items-center justify-center backdrop-blur-sm z-50 hidden">
        <div class="relative bg-white rounded-xl border-[6px] border-[#F9E2AF] shadow-lg w-full max-w-sm p-6 mx-4">
            <!-- Logo dan Judul -->
            <div class="flex items-center space-x-1 mt-4 mb-6 justify-center">
                <div class="bg-[#F9E2AF] rounded-full p-3 flex items-center justify-center w-12 h-12">
                    <img src="/gambar/fixlogo.png" class="w-11 h-11 object-cover" />
                </div>
                <div class="flex items-center space-x-2">
                    <img src="/gambar/fixtextlogo.png" class="h-[120px] w-auto object-contain" />
                </div>
            </div>
            
            <!-- Tombol Close (X) -->
            <button onclick="closeLoginModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl font-bold cursor-pointer">&times;</button>
            
            <!-- Form Login -->
            <form class="space-y-6">
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold font-poppins text-[#005A64] mb-1">Email</label>
                    <div class="relative">
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="w-full border-b-2 border-gray-400 focus:outline-none focus:border-[#005A64] pr-10 pb-1 text-[#005A64] font-semibold font-poppins"
                            placeholder="Masukkan Email"
                        />
                        <span class="absolute right-2 top-1.5 text-gray-400">
                            <img src="/gambar/email1.png" class="w-4 h-4" />
                        </span>
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold font-poppins text-[#005A64] mb-1">Password</label>
                    <div class="relative">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="w-full border-b-2 border-gray-400 focus:outline-none focus:border-[#005A64] pr-10 pb-1 text-[#005A64] font-semibold font-poppins"
                            placeholder="Masukkan Password"
                        />
                        <span class="absolute right-2 top-1.5 text-gray-400">
                            <img src="/gambar/lock1.png" class="w-4 h-4" />
                        </span>
                    </div>
                </div>
            </form>

            <!-- Tombol Masuk -->
            <div class="mt-6 ml-10 mr-10 items-center justify-center flex">
                <a href="/berandasetelahlogin" type="submit" class="w-full bg-[#005A64] text-white items-center justify-center flex font-semibold font-poppins py-2 rounded-md hover:bg-[#004852] transition duration-200 cursor-pointer">
                    MASUK
                </a>
            </div>

            <!-- Pemisah -->
            <div class="flex items-center my-4">
                <hr class="flex-grow border-t border-[#000000]" />
                <span class="mx-2 text-sm text-[#000000]">atau</span>
                <hr class="flex-grow border-t border-[#000000]" />
            </div>

            <!-- Login dengan Google -->
            <button class="w-full flex items-center justify-center space-x-2 border rounded-md py-2 bg-[#005A64] text-white font-semibold font-poppins hover:bg-[#004852] transition duration-200 mb-3 cursor-pointer">
                <img src="/gambar/google.png" class="w-5 h-5" />
                <span>Masuk dengan Google</span>
            </button>

            <!-- Login dengan Facebook -->
            <button class="w-full flex items-center justify-center space-x-2 border rounded-md py-2 bg-[#005A64] text-white font-semibold font-poppins hover:bg-[#004852] transition duration-200 cursor-pointer">
                <img src="/gambar/facebook1.png" class="w-6 h-6" />
                <span>Masuk dengan Facebook</span>
            </button>
        
            <!-- Link Daftar -->
            <p class="text-center text-sm text-black font-semibold font-poppins mt-6">
                Belum punya akun? 
                <button onclick="showRegisterModal()" class="text-[#005A64] underline cursor-pointer">Daftar Disini</button>
            </p>
        </div>
    </div>

        <!-- Modal Daftar -->
    <div id="registerModal" class="fixed inset-0 flex items-center justify-center backdrop-blur-sm z-50 hidden">
      <div class="relative bg-[#FFFFFF] rounded-xl border-[6px] border-[#F9E2AF] shadow-lg w-full max-w-sm p-6 mx-4">
        <!-- Logo (sama dengan modal login) -->
        <div class="flex items-center space-x-1 mt-4 mb-6 justify-center">
          <!-- Logo bundar -->
          <div class="bg-[#F9E2AF] rounded-full p-3 flex items-center justify-center w-12 h-12">
            <img src="/gambar/fixlogo.png" class="w-11 h-11 object-cover" />
          </div>

          <!-- Teks Cooknice dengan jempol -->
          <div class="flex items-center space-x-2">
            <img src="/gambar/fixtextlogo.png" class="h-[120px] w-auto object-contain" />
          </div>
        </div>
        
        <!-- Tombol Close -->
        <button onclick="closeRegisterModal()" class="absolute top-4 right-4 text-gray-500 text-2xl font-bold cursor-pointer">&times;</button>
        
        <!-- Form Daftar -->
        <form class="space-y-6">
          <!-- Nama -->
          <div>
            <label for="name" class="block text-sm font-semibold font-poppins text-[#005A64] mb-1">Nama</label>
            <div class="relative">
              <input
                type="text"
                id="name"
                name="name"
                class="w-full border-b-2 border-gray-400 focus:outline-none focus:border-[#005A64] pr-10 pb-1 text-[#005A64] font-semibold font-poppins"
                placeholder="Masukkan Nama"/>
              <span class="absolute right-2 top-1.5 text-gray-400">
                <!-- Ikon user -->
                <img src="/gambar/user3.png" class="w-4 h-4"/>
              </span>
            </div>
          </div>
          
          <!-- Email -->
          <div>
            <label for="email" class="block text-sm font-semibold font-poppins text-[#005A64] mb-1">Email</label>
            <div class="relative">
              <input
                type="email"
                id="email"
                name="email"
                class="w-full border-b-2 border-gray-400 focus:outline-none focus:border-[#005A64] pr-10 pb-1 text-[#005A64] font-semibold font-poppins"
                placeholder="Masukkan Email"/>
              <span class="absolute right-2 top-1.5 text-gray-400">
                <!-- Ikon email -->
                <img src="/gambar/email1.png" class="w-4 h-4"/>
              </span>
            </div>
          </div>

          <!-- Password -->
          <div>
            <label for="password" class="block text-sm font-semibold font-poppins text-[#005A64] mb-1">Password</label>
            <div class="relative">
              <input
                type="password"
                id="password"
                name="password"
                class="w-full border-b-2 border-gray-400 focus:outline-none focus:border-[#005A64] pr-10 pb-1 text-[#005A64] font-semibold font-poppins"
                placeholder="Masukkan Password"/>
              <span class="absolute right-2 top-1.5 text-gray-400">
                <!-- Ikon kunci -->
                <img src="/gambar/lock1.png" class="w-4 h-4"/>
              </span>
            </div>
          </div>
        </form>

        <!-- Tombol Masuk -->
        <div class="mt-6 ml-10 mr-10 items-center justify-center flex">
          <a href="#" type="submit" class="w-full bg-[#005A64] text-white items-center justify-center flex font-semibold font-poppins py-2 rounded-md hover:bg-[#004852] transition duration-200 cursor-pointer">
            DAFTAR
          </a>
        </div>

        <!-- Pemisah -->
        <div class="flex items-center my-4">
          <hr class="flex-grow border-t border-[#000000]" />
          <span class="mx-2 text-sm text-[#000000]">atau</span>
          <hr class="flex-grow border-t border-[#000000]" />
        </div>

        <!-- Login dengan Google -->
        <button class="w-full flex items-center justify-center space-x-2 border rounded-md py-2 bg-[#005A64] text-white font-semibold font-poppins hover:bg-[#004852] transition duration-200 mb-3 cursor-pointer">
          <img src="/gambar/google.png" class="w-5 h-5" />
          <span>Masuk dengan Google</span>
        </button>

        <!-- Login dengan Facebook -->
        <button class="w-full flex items-center justify-center space-x-2 border rounded-md py-2 bg-[#005A64] text-white font-semibold font-poppins hover:bg-[#004852] transition duration-200 cursor-pointer">
          <img src="/gambar/facebook1.png" class="w-6 h-6" />
          <span>Masuk dengan Facebook</span>
        </button>

        <!-- Link ke Login -->
        <p class="text-center text-sm text-black font-semibold font-poppins mt-6">
          Sudah punya akun? 
          <button onclick="showLoginModal()" class="text-[#005A64] underline cursor-pointer">Login Disini</button>
        </p>
      </div>
    </div>

    <!-- Script untuk mengontrol modal -->
    <script>
        function openLoginModal() {
            document.getElementById('loginModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Mencegah scroll di background
        }

        function closeLoginModal() {
            document.getElementById('loginModal').classList.add('hidden');
            document.body.style.overflow = 'auto'; // Mengembalikan scroll
        }

        // Tutup modal jika klik di luar area modal
        document.getElementById('loginModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLoginModal();
            }
        });
        
          // Buka modal daftar
        function showRegisterModal() {
          closeLoginModal();
          document.getElementById('registerModal').classList.remove('hidden');
        }

        // Tutup modal daftar
        function closeRegisterModal() {
          document.getElementById('registerModal').classList.add('hidden');
        }

        // Buka modal login dari modal daftar
        function showLoginModal() {
          closeRegisterModal();
          openLoginModal();
        }
    </script>
  </body>
</html>