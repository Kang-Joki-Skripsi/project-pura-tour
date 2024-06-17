@extends('components.layout')

@section('content')
    <div class="container">
        <div class="flex flex-wrap lg:flex-nowrap lg:space-x-5 justify-between items-start">
            <div class="w-full lg:w-1/2">
                <img class="w-full h-full" src="{{asset('img/pura1.webp')}}" alt="Pura Dalem Sejati">
            </div>
            <div id="map" class="w-full lg:w-1/2 mt-5 lg:mt-0">
                <h1 class="text-2xl md:text-3xl lg:text-5xl font-bold">Pura Dalem Srijati</h1>
                <p class="text-justify my-4 text-sm lg:text-[16px]">Berdasarkan hasil wawancara dengan Bapak I Nyoman Surianta, S.Sn., M.Si selaku Bendesa Adat Desa Sibang Gede, dijelaskan mengenai Pura Dalem Srijati Srijati sampai saat ini belum ada yang tau pasti untuk sejarah puranya, karena pendahulu – pendahulunya pun sudah nampek atau mendapati Pura Dalem Srijati, untuk itu beliau menjelaskan sesuai dengan cerita – cerita pendahulunya. Pura Dalem Srijatii terletak di tenggara Desa Sibang Gede, berdiri diatas tanah kurang lebih seluas 2.154m² memanjang dari arah utara ke selatan dengan pembagian area pura yaitu Utama mandala, Madya mandala dan Nista mandala dengan dikelilingi pagar batu bata Pura Dalem Srijati dapat diakses dengan mengendarai sepeda motor, mobil ataupun berjalan kaki.</p>
            </div>
        </div>
        <div class="flex flex-wrap lg:flex-nowrap lg:space-x-5 justify-between items-start lg:mt-16">
            <div class="w-full lg:w-1/2">
                <p class="text-justify text-sm lg:text-[16px]">Pura Dalem Srijati sudah berdiri sebelum Pura Desa lan Puseh dan Pura Dalem Gede yang di barat laut desa. Pura dalem srijati sudah ada waktu jaman kerajaan dahulu yang merupakan Pura tertua yang ada di Desa Sibang Gede. Pura dalem srijati dulunya adalah pusat Pura sebelum kedatangan seorang raja dari kerajaan mengwi yaitu Raja Sri Kresna Kepakisan. Raja Sri Kresna Kepakisan datang ke Desa Sibang Gede dan macekan atau memecah pura menjadi Pura khayangan tiga, sehingga sampai sekarang di Desa Sibang Gede ada dua Pura Dalem, yang pertama itu di Pura Dalem Srijati dan yang kedua Pura Dalem Gede, hingga saat ini setiap tetoyan atau tirta tetap nuurin pekuluh ke Pura Dalem Srijati dan setiap piodalan baik di Pura Desa lan Puseh maupun di Pura Dalem Gede tetap nunas tetoyan atau tirta ke Pura Dalem Srijati karena keyakinan bahwa Pura Dalem Srijati itu sebagai pusat Pura dijaman dahulu.</p>
            </div>
            <div id="map" class="w-full lg:w-1/2 mt-4 lg:mt-0">
                <iframe class="w-full h-[350px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.095077243631!2d115.21987399999999!3d-8.586857000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23e93737e6d9f%3A0x6c6d83966835c7ae!2sPura%20Dalem%20Srijati!5e0!3m2!1sid!2sid!4v1718630142956!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="flex flex-wrap lg:flex-nowrap lg:space-x-5 justify-between items-start mt-4 lg:mt-16">
            <div class="w-full lg:w-1/2">
                <img class="w-full h-full" src="{{asset('img/pura.webp')}}" alt="Pura Dalem Sejati">
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