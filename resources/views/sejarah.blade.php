@extends('components.layout')

@section('content')
    <div class="container">
        <div class="flex flex-wrap lg:flex-nowrap lg:space-x-5 justify-between items-start">
            <div class="w-full lg:w-1/2">
                <img class="w-full h-full" src="https://cdn-assetd.kompas.id/BfzOPL0UfJNCihQ66CYXZc1PR_s=/1024x576/https%3A%2F%2Fkompas.id%2Fwp-content%2Fuploads%2F2018%2F03%2F20180311H_PURA_C_web.jpg" alt="Pura Dalem Sejati">
            </div>
            <div id="map" class="w-full lg:w-1/2 mt-5 lg:mt-0">
                <h1 class="text-2xl md:text-3xl lg:text-5xl font-bold">Pura Dalem Srijati</h1>
                <p class="text-justify my-4 text-sm lg:text-[16px]">Balidwipa dimasa silam memendam sejarah pemerintahan oleh Raja – raja yang acap kali sebagai kerajaan merdeka yang berdiri sendiri, namun kadang kala hidup berdampingan dengan kerajaan – kerajaan besar di pulau jawa , bahkan tidak jarang pada kurun waktu tertentu merupakan jajahan dari Kerajaan – kerajaan besar di pulau Jawa , namun sebaliknya sering kali raja – raja Bali mampu menguasai daerah Jawa bagian Timur yaitu Blambangan dan Pasuruan , bahkan pulau Lombok dan Sumba.</p>
            </div>
        </div>
        <div class="flex flex-wrap lg:flex-nowrap lg:space-x-5 justify-between items-start lg:mt-16">
            <div class="w-full lg:w-1/2">
                <p class="text-justify text-sm lg:text-[16px]">Zaman kerajaan di Bali mencapai puncak keemasannya pada masa pemerintahaan Dalem Çri Batur Renggong yang melepaskan diri dari kekuasaan Majapahit di Jawa pada pertengahan abad ke XVI, Ketika itu Gelgel menjadi pusat pemerintahan negeri. Namun pada masa pemerintahan Dalem Çri Di Made Keraton Gelgel Hancur lebur karena terjadi perebutan kekuasaan pada tahun 1651 Masehi yang dilakukan oleh Kiayi Agung Maruti dalam kedudukannya sebagai Patih Agung , sehingga sejak saat itu Bali terpecah menjadi kerajaan – kerajaan kecil yang masing – masing memiliki kekuasaan Mandiri. Kiayi Agung Maruti memerintahkan kerajaan Gelgel, yang tidak utuh lagi selama 26 tahun, sehingga akhirnnya gelgel bisa direbut kembali oleh putra bungsu Dalem Çri Di Made yang bernama Dewa Agung Jambe. Tersebutlah Kiayi Agung Maruti beserta keluarga dan Pengikut pengikutnya melarikan diri mengungsi ke hutan Jimbaran di sebelah selatan Badung.</p>
            </div>
            <div id="map" class="w-full lg:w-1/2 mt-4 lg:mt-0">
                <iframe class="w-full h-[350px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31561.845519748196!2d115.19964480085729!3d-8.573803917654962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23e9c75836f47%3A0x4b5df247888cde3a!2sSibang%20Gede%2C%20Kec.%20Abiansemal%2C%20Kabupaten%20Badung%2C%20Bali!5e0!3m2!1sid!2sid!4v1715745238437!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="flex flex-wrap lg:flex-nowrap lg:space-x-5 justify-between items-start mt-4 lg:mt-16">
            <div class="w-full lg:w-1/2">
                <img class="w-full h-full" src="https://cdn-assetd.kompas.id/BfzOPL0UfJNCihQ66CYXZc1PR_s=/1024x576/https%3A%2F%2Fkompas.id%2Fwp-content%2Fuploads%2F2018%2F03%2F20180311H_PURA_C_web.jpg" alt="Pura Dalem Sejati">
            </div>
            <div class="w-full lg:w-1/2 mt-5 lg:mt-0">
                <h1 class="text-2xl md:text-3xl lg:text-5xl font-bold mb-3">Piodalan Pura</h1>
                <div>
                    <span class="piodalan-item hover:cursor-pointer p-2 border-b border-b-black flex justify-between items-center"><span class="font-semibold select-none">1. Piodalan 6 Bulan Sekali</span> <i class="fa-solid fa-chevron-down transition-all"></i></span>
                    <p class="hidden my-3 text-justify text-sm lg:text-[16px]">Piodalan Pura Dalem Srijati dilakukan setiap 6 bulan sekali yang jatuh pada Buda Kliwon Pahang.</p>
                </div>
                <div>
                    <span class="piodalan-item hover:cursor-pointer p-2 border-b border-b-black flex justify-between items-center"><span class="font-semibold select-none">2. Setiap 5 Tahun Sekali</span> <i class="fa-solid fa-chevron-down transition-all"></i></span>
                    <p class="hidden my-3 text-justify text-sm lg:text-[16px]">Upakara Nyatur diadakan setiap 5 tahun sekali pada saat nemu purnama.</p>
                </div>
                <div>
                    <span class="piodalan-item hover:cursor-pointer p-2 border-b border-b-black flex justify-between items-center"><span class="font-semibold select-none">3. Tarian Khusus</span> <i class="fa-solid fa-chevron-down transition-all"></i></span>
                    <p class="hidden my-3 text-justify text-sm lg:text-[16px]">Tarian Rejang Dewa merupakan tarian khusus pada saat piodalan.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const menuItemPiodalan = document.querySelectorAll(".piodalan-item")
        menuItemPiodalan.forEach(item => {
            item.addEventListener('click', function () {
                this.lastElementChild.classList.toggle('rotate-180')
                this.nextElementSibling.classList.toggle('hidden')
            })
        });
    </script>
@endsection