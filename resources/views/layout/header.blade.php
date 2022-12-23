<div class="fixed z-50 w-full">
    <div class="py-8 backdrop-blur-md bg-gray-900/80">
        <div class="flex justify-between">
            <div class="w-96 text-white text-2xl font-bold text-center">RDevelopment</div>
            <div class="grid grid-cols-4 w-96 text-white mr-auto">
                <a href="{{route('home')}}">Home</a>
                <a href="{{route('produk.index')}}">Produk</a>
                <a href="{{route('berita.index')}}">Berita</a>
            </div>
            <div class="w-52">
                <div class="grid grid-cols-2 gap-3">
                    <a href="{{ route('dashboard.admin.index') }}" class="text-center bg-transparent border-white border-2 text-white rounded-md">
                        Sign In
                    </a>
                    <button class="bg-white border-2 text-black rounded-md">
                        Sign Up
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
