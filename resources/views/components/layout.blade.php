<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBANG GEDE | {{$title}}</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="{{asset('/main_asset/css/app.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('/main_asset/img/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('/main_asset/vendor/aos/aos.css')}}">
    <script src="{{asset('/main_asset/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('/main_asset/js/app.js')}}"></script>
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

<body class="bg-slate-200 overflow-x-hidden">
    <!-- Navbar -->
    <nav id="navbar" class="bg-red-800 p-4 top-0">
        <div class="container flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{route('beranda')}}" class="text-white text-xl">
                    <img src="{{asset('/main_asset/img/logo-brand.png')}}" alt="Logo" class="w-[200px] xl:w-[250px]">
                </a>
            </div>
            <!-- Navbar Links -->
            <div class="hidden lg:flex md:items-center md:space-x-1">
                <a href="{{route('sejarah')}}" class="text-white hover:bg-white hover:text-black py-2 px-4 rounded-full {{@$active == 'sejarah' ? 'active' : ''}}">Sejarah Pura</a>
                <a href="{{route('galery')}}" class="text-white hover:bg-white hover:text-black py-2 px-4 rounded-full {{@$active == 'galery' ? 'active' : ''}}">Galery</a>
                <a href="{{route('3dexplorer')}}" class="text-white hover:bg-white hover:text-black py-2 px-4 rounded-full {{@$active == '3d' ? 'active' : ''}}">3D Explore</a>
                <a href="{{route('video')}}" class="text-white hover:bg-white hover:text-black py-2 px-4 rounded-full {{@$active == 'video' ? 'active' : ''}}">Video</a>
                <a href="{{route('vtour')}}" class="text-white hover:bg-white hover:text-black py-2 px-4 rounded-full {{@$active == 'vtour' ? 'active' : ''}}">Virtual Tour 360</a>
            </div>
            <!-- Mobile Menu Button (Hamburger Icon) -->
            <div id="mobileMenuBTN" class="lg:hidden">
                <button class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu (Hidden by Default) -->
        <div id="mobileMenu" class="hidden md:hidden pt-4">
            <a href="{{route('sejarah')}}" class="block text-white py-2 px-4 hover:bg-white hover:text-black rounded-full">Sejarah Pura</a>
            <a href="{{route('galery')}}" class="block text-white py-2 px-4 hover:bg-white hover:text-black rounded-full">Galery</a>
            <a href="{{route('3dexplorer')}}" class="block text-white py-2 px-4 hover:bg-white hover:text-black rounded-full">3D Explore</a>
            <a href="{{route('video')}}" class="block text-white py-2 px-4 hover:bg-white hover:text-black rounded-full">Video</a>
            <a href="{{route('vtour')}}" class="block text-white py-2 px-4 hover:bg-white hover:text-black rounded-full">Virtual Tour 360</a>
        </div> 
    </nav>

    <div class="content p-4 sm:py-8">
      @yield('content')
    </div>

    <footer class="py-8 border border-top-slate-900 text-center">
        <div id="sosial-media" class="text-3xl text-slate-600 space-x-3">
            <a href="https://www.instagram.com/infosibanggede?igsh=YW5sNXkyZXplYzk4"><i class="hover:cursor-pointer fa-brands fa-instagram"></i></a>
            <a href="https://www.facebook.com/perbekel.sibanggede.7?mibextid=LQQJ4d"><i class="hover:cursor-pointer fa-brands fa-facebook-f"></i></a>
        </div>
        <div id="footer-item" class="space-x-3 my-3">
            <a href="{{route('beranda')}}" class="text-blue-600 hover:cursor-pointer">Beranda</a>
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

        window.onscroll = function () {
            const navbar = document.querySelector("#navbar");
            if (window.pageYOffset > 0) {
                navbar.classList.add('scrollAnimate')
            }else {
                navbar.classList.remove("scrollAnimate")
            }
        }

        AOS.init();
    </script>
</body>
</html>