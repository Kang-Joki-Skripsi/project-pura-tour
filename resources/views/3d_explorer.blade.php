@extends('components.layout')

@section('content')
    <div class="container">
      <div class="flex flex-col lg:flex-row lg:space-x-3 lg:h-[500px]">
        <!-- Video player -->
        <div class="w-full lg:w-2/3 shadow-lg border border-slate-200 rounded-lg" id="iframe3D"></div>

        <!-- Playlist -->
        <div class="w-full lg:w-1/3 lg:pl-4 mt-5 lg:mt-0 overflow-auto">
          <div id="item-video" class="grid grid-cols-2 xl:grid-cols-3 gap-1"></div>
        </div>
      </div>
    </div>

    <script>
      const item_video = document.getElementById('item-video');
      const iframe = document.querySelector('#iframe3D');

      const data3Dexplorer = [
        {
          id: 1,
          title: 'Prekangge',
          deskripsi: 'Patung ini berada pada bangunan petaulan (penghubung) yang terletak di komplek Kemaliq Lingsar.',
          src: 'https://sketchfab.com/models/05b6baec24b34006aef2239e408ffad9/embed',
          thumbnail: 'https://media.sketchfab.com/models/05b6baec24b34006aef2239e408ffad9/thumbnails/6c1a0ae3a4914304814e6a8c1175b36f/99fe92b7564c44bbb16153875b8e08bf.jpeg',
        },
        {
          id: 2,
          title: 'Ratu Gede Ulun Danu',
          deskripsi: 'Patung ini berjumlah 2 patung dengan bentk yang sama saling berpasangan, berada pada bangunan candi bentar yang terletak antara Nista Mandala dan Pratama Mandala',
          src: 'https://sketchfab.com/models/cafe26fc006d4b428f8186bc888c1b42/embed',
          thumbnail: 'https://media.sketchfab.com/models/cafe26fc006d4b428f8186bc888c1b42/thumbnails/e4b80250ce334e769cf19fe0459f10c7/eba8c7a409244bed9f9002257d3bbb9a.jpeg',
        },
        {
          id: 3,
          title: 'Aling - Aling',
          deskripsi: 'Bangunan Pelinggih yang terletak di komplek Pura Gaduh. sebagai tempat pemujaan/bersemayamnya Ratu Ngurah',
          src: 'https://sketchfab.com/models/2b14300ba21e46009fbb915f399aa212/embed',
          thumbnail: 'https://media.sketchfab.com/models/2b14300ba21e46009fbb915f399aa212/thumbnails/74f26da044934bb899a831a38c4ebc2b/282b799364d34295bee5cb98be779e78.jpeg',
        },
        {
          id: 4,
          title: 'Ratu Gede Kumbakarna',
          deskripsi: `Bale bundar ini digunakan sebagai tempat kegiatan rapat dan beristirahat bagi umat  yang bersembahyang. Bale ini terletak di areal nista mandala atau bagian taman. <br><br> note : pada bentuk asli, bangunan terlihat dengan kondisi sempurna. hasil terlihat seperti itu adalah dikarenakan keterbatasan angle pada saat pengambilan gambar atau scanning`,
          src: 'https://sketchfab.com/models/a3afbc44ad184fc2ba97fe957e355c50/embed',
          thumbnail: 'https://media.sketchfab.com/models/a3afbc44ad184fc2ba97fe957e355c50/thumbnails/11e5372904874b949d229ed379e9f039/1d705b856f124a67980f060bceb1f8d6.jpeg',
        },
        {
          id: 5,
          title: 'Ratu Gede Melanting & Rambut Sedana',
          deskripsi: `Bale bundar ini digunakan sebagai tempat kegiatan rapat dan beristirahat bagi umat  yang bersembahyang. Bale ini terletak di areal nista mandala atau bagian taman. <br><br> note : pada bentuk asli, bangunan terlihat dengan kondisi sempurna. hasil terlihat seperti itu adalah dikarenakan keterbatasan angle pada saat pengambilan gambar atau scanning`,
          src: 'https://sketchfab.com/models/ccbd0710797547cab3930ba93dce0a61/embed',
          thumbnail: 'https://media.sketchfab.com/models/ccbd0710797547cab3930ba93dce0a61/thumbnails/3222249217e14066ac07000040bb41e7/5d3bdbc1d50f463188651233b43e4124.jpeg',
        },
        {
          id: 6,
          title: 'Ratu Gede Dalem Nusa',
          deskripsi: `Bale bundar ini digunakan sebagai tempat kegiatan rapat dan beristirahat bagi umat  yang bersembahyang. Bale ini terletak di areal nista mandala atau bagian taman. <br><br> note : pada bentuk asli, bangunan terlihat dengan kondisi sempurna. hasil terlihat seperti itu adalah dikarenakan keterbatasan angle pada saat pengambilan gambar atau scanning`,
          src: 'https://sketchfab.com/models/5f9273c59d794e1eaaaefbb1339e830e/embed',
          thumbnail: 'https://media.sketchfab.com/models/5f9273c59d794e1eaaaefbb1339e830e/thumbnails/80b68527f6734b2aabf4082881f44adc/69f5293df8ff422ebd6f03530c8dff62.jpeg',
        },
        {
          id: 7,
          title: 'Pepelik',
          deskripsi: `Bale bundar ini digunakan sebagai tempat kegiatan rapat dan beristirahat bagi umat  yang bersembahyang. Bale ini terletak di areal nista mandala atau bagian taman. <br><br> note : pada bentuk asli, bangunan terlihat dengan kondisi sempurna. hasil terlihat seperti itu adalah dikarenakan keterbatasan angle pada saat pengambilan gambar atau scanning`,
          src: 'https://sketchfab.com/models/db996a776ca148e49392c99a730e08ec/embed',
          thumbnail: 'https://media.sketchfab.com/thumbnails/4c57687b657445e1b46c83b35e494ad4/1024.jpg',
        },
        {
          id: 8,
          title: 'Panggungan',
          deskripsi: `Bale bundar ini digunakan sebagai tempat kegiatan rapat dan beristirahat bagi umat  yang bersembahyang. Bale ini terletak di areal nista mandala atau bagian taman. <br><br> note : pada bentuk asli, bangunan terlihat dengan kondisi sempurna. hasil terlihat seperti itu adalah dikarenakan keterbatasan angle pada saat pengambilan gambar atau scanning`,
          src: 'https://sketchfab.com/models/d55f8c5ccb3e4d72bae4f5f11f31a452/embed',
          thumbnail: 'https://media.sketchfab.com/models/d55f8c5ccb3e4d72bae4f5f11f31a452/thumbnails/530222ecf764466bb2491de9123f2b32/bfdf452a96a04f188328a99b71cafe5b.jpeg',
        },
        {
          id: 9,
          title: '3D Drone View',
          deskripsi: `Bale bundar ini digunakan sebagai tempat kegiatan rapat dan beristirahat bagi umat  yang bersembahyang. Bale ini terletak di areal nista mandala atau bagian taman. <br><br> note : pada bentuk asli, bangunan terlihat dengan kondisi sempurna. hasil terlihat seperti itu adalah dikarenakan keterbatasan angle pada saat pengambilan gambar atau scanning`,
          src: 'https://sketchfab.com/models/7a3ab0d7c9df43a7aa4c7cc0531f545b/embed',
          thumbnail: 'https://media.sketchfab.com/models/7a3ab0d7c9df43a7aa4c7cc0531f545b/thumbnails/20f07be3f91f44eca872803bdb9c7f84/3ae1093d1c1d47399cbb055e11f15786.jpeg',
        },
        {
          id: 10,
          title: 'Prekangge',
          deskripsi: `Bale bundar ini digunakan sebagai tempat kegiatan rapat dan beristirahat bagi umat  yang bersembahyang. Bale ini terletak di areal nista mandala atau bagian taman. <br><br> note : pada bentuk asli, bangunan terlihat dengan kondisi sempurna. hasil terlihat seperti itu adalah dikarenakan keterbatasan angle pada saat pengambilan gambar atau scanning`,
          src: 'https://sketchfab.com/models/6a48b6a527934177bab6cf980967c1e4/embed',
          thumbnail: 'https://media.sketchfab.com/models/6a48b6a527934177bab6cf980967c1e4/thumbnails/db1804fad1134060809d5f8d98e3cc25/d31d8d5af67441209ed031c943085b41.jpeg',
        },
        {
          id: 11,
          title: 'Prekangge',
          deskripsi: `Bale bundar ini digunakan sebagai tempat kegiatan rapat dan beristirahat bagi umat  yang bersembahyang. Bale ini terletak di areal nista mandala atau bagian taman. <br><br> note : pada bentuk asli, bangunan terlihat dengan kondisi sempurna. hasil terlihat seperti itu adalah dikarenakan keterbatasan angle pada saat pengambilan gambar atau scanning`,
          src: 'https://sketchfab.com/models/9ded3c6a2d8e49e088e8781a56c68aaa/embed',
          thumbnail: 'https://media.sketchfab.com/models/9ded3c6a2d8e49e088e8781a56c68aaa/thumbnails/7cb7fd3edf7e484790ae52a0e0eb35eb/90cb165519d24a1e88b33e85837674a1.jpeg',
        },
        {
          id: 12,
          title: 'Prekangge',
          deskripsi: `Bale bundar ini digunakan sebagai tempat kegiatan rapat dan beristirahat bagi umat  yang bersembahyang. Bale ini terletak di areal nista mandala atau bagian taman. <br><br> note : pada bentuk asli, bangunan terlihat dengan kondisi sempurna. hasil terlihat seperti itu adalah dikarenakan keterbatasan angle pada saat pengambilan gambar atau scanning`,
          src: 'https://sketchfab.com/models/325698fd904249fbb6143b5dd346d40f/embed',
          thumbnail: 'https://media.sketchfab.com/models/325698fd904249fbb6143b5dd346d40f/thumbnails/1faefb8556b3483996250f38c04ed075/b9f177d93f384bc0948b452ad6012a2d.jpeg',
        },
      ];

      function renderVideoTemplate(data) {
        return (`
            <iframe
              class="w-full h-56 sm:h-96 lg:h-full inline-block"
              frameborder="0"
              allowfullscreen
              mozallowfullscreen="true"
              webkitallowfullscreen="true"
              allow="autoplay; fullscreen; xr-spatial-tracking"
              xr-spatial-tracking
              execution-while-out-of-viewport
              execution-while-not-rendered
              web-share
              src="${data.src}"
            >
            </iframe>
            <h1 class="font-bold text-2xl md:text-3xl p-5">${data.title}</h1>
        `);
      }

      function renderItemVideoTemplate(data) {
        return (`
            <div class="h-38 mr-3 rounded-lg cursor-pointer item-3d-explore mb-3 shadow hover:shadow-lg border border-slate-200 bg-white" data-id="${data.id}">
                <img src="${data.thumbnail}" class="h-full w-full" />
            </div>
        `);
      }

      function renderItemVideos() {
        const videos = document.querySelectorAll('.item-3d-explore');
        videos.forEach(video => {
          video.addEventListener('click', () => {
            const id = video.getAttribute('data-id');
            const data = data3Dexplorer.find((e) => e.id == id);
            iframe.innerHTML = renderVideoTemplate(data)
          });
        });
      }

      window.addEventListener('load', async function() {
        try {
          item_video.innerHTML = "";
          iframe.innerHTML = renderVideoTemplate(data3Dexplorer[0])

          data3Dexplorer.forEach(data => {
            item_video.innerHTML += renderItemVideoTemplate(data); 
          });

          renderItemVideos();
        } catch (error) {
          console.log(error)
        }

      })
      
    </script>
@endsection