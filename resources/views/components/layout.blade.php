<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pura Tour</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Untuk browser WebKit (Chrome, Safari) */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #B91C1C; /* Warna thumb scrollbar */
            border-radius: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1; /* Warna track scrollbar */
            scrorl
        }

        scrollbar-color: #B91C1C; /* Warna thumb dan track scrollbar */
        scrollbar-width: thin; /* Lebar scrollbar */
    </style>
</head>

<body class="h-screen">
    <!-- Navbar -->
    <nav class="bg-red-800 p-4 sticky top-0">
        <div class="container flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="text-white text-xl">
                    <img src="{{asset('img/logo-brand.png')}}" alt="Logo" class="w-[200px] xl:w-[250px]">
                </a>
            </div>
            <!-- Navbar Links -->
            <div class="hidden md:flex md:items-center md:space-x-1">
                <a href="/sejarah" class="text-white hover:bg-white hover:text-black py-2 px-4 rounded-full">Sejarah Pura</a>
                <a href="galery" class="text-white hover:bg-white hover:text-black py-2 px-4 rounded-full">Galery</a>
                <a href="/3d_explore" class="text-white hover:bg-white hover:text-black py-2 px-4 rounded-full">3D Explore</a>
                <a href="/video" class="text-white hover:bg-white hover:text-black py-2 px-4 rounded-full">Video</a>
                <a href="#" class="text-white hover:bg-white hover:text-black py-2 px-4 rounded-full">Virtual Tour 360</a>
            </div>
            <!-- Mobile Menu Button (Hamburger Icon) -->
            <div id="mobileMenuBTN" class="md:hidden">
                <button class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu (Hidden by Default) -->
    <div id="mobileMenu" class="hidden md:hidden bg-red-700 p-2">
        <a href="/sejarah" class="block text-white py-2 px-4 hover:bg-white hover:text-black rounded-full">Sejarah Pura</a>
        <a href="/galery" class="block text-white py-2 px-4 hover:bg-white hover:text-black rounded-full">Galery</a>
        <a href="/3d_explore" class="block text-white py-2 px-4 hover:bg-white hover:text-black rounded-full">3D Explore</a>
        <a href="/video" class="block text-white py-2 px-4 hover:bg-white hover:text-black rounded-full">Video</a>
        <a href="#" class="block text-white py-2 px-4 hover:bg-white hover:text-black rounded-full">Virtual Tour 360</a>
    </div> 

    <div class="content p-4 sm:py-8">
      @yield('content')
    </div>

    <footer class="py-8 border border-top-slate-900 text-center">
        <div id="sosial-media" class="text-3xl text-slate-600 space-x-3">
            <a href="#"><i class="hover:cursor-pointer fa-brands fa-instagram"></i></a>
            <a href="#"><i class="hover:cursor-pointer fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="hover:cursor-pointer fa-brands fa-twitter"></i></a>
        </div>
        <div id="footer-item" class="space-x-3 my-3">
            <a href="beranda.html" class="text-blue-600 hover:cursor-pointer">Beranda</a>
            <a href="#" class="text-blue-600 hover:cursor-pointer">Kontak</a>
            <a href="#" class="text-blue-600 hover:cursor-pointer">Blog</a>
        </div>
        <span class="text-slate-400 font-open-sans">&copy; Copyright 2024, All rights reserved.</span>
    </footer>
    <!-- Custom JavaScript to toggle mobile menu -->
    <script>
        const menuBtn = document.querySelector('#mobileMenuBTN');
        const mobileMenu = document.querySelector('#mobileMenu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>