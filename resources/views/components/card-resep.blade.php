<a href="/halamanResep" class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
    <img src="{{ asset('storage/' . $recipe->main_image) }}" alt="Menu" class="w-full h-40 object-cover">
    <div class="p-4 flex justify-between items-center">
        <div>
            <h2 class="font-bold text-lg">
                {{ $recipe->title }}
            </h2>
            <p class="text-sm text-gray-600">
                {{ $recipe->user->name ?? 'Unknown User' }}
            </p>
        </div>
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" fill="{{ request()->is('koleksiAda') ? 'black' : 'none' }}" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
            </svg>
        </button>
    </div>
</a>