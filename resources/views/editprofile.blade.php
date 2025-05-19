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
                <a href="/clickedprofile" class="rounded-full border-2 border-[#F58E4A]">
                    <img src="/gambar/user.png" alt="prfil" class="w-[50px] h-[50px] cursor-pointer">
                </a>
                <a href="#" class="bg-[#F58E4A] text-white mx-4 text-lg px-6 py-3 rounded-2xl hover:bg-[#f56c4a] text-center flex items-center justify-center space-x-2 cursor-pointer">
                    <img src="/gambar/upload.png" alt="unggah" class="w-6 h-6" />
                    <span>Unggah</span>
                </a>
            </div>
        </header>

        <!-- Konten Edit Profil -->
        <div class="flex flex-col items-center mt-7">
            <!-- Foto Profil -->
            <div class="flex justify-start w-[800px]">
                <img src="/gambar/user.png" alt="Foto Profil" class="w-[120px] h-[120px] rounded-full border border-[#000000]">
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
                        <a href="/gantiemail" class="text-[#F58E4A] font-semibold text-sm ml-2 hover:underline">
                            Ganti
                        </a>
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
</body>