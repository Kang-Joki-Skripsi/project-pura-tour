@extends('components.layout')

@section('content')
    <div class="container">
      <div class="flex flex-col lg:flex-row lg:space-x-3">
        <!-- Video player -->
        <div class="w-full lg:w-2/3" id="videos"></div>

        <!-- Playlist -->
        <div class="w-full lg:w-1/3 lg:pl-4 mt-5 lg:mt-0">
          <div id="item-video" class="flex flex-wrap justify-normal"></div>
        </div>
      </div>
    </div>

    <script>
      const item_video = document.getElementById('item-video');
      const images = document.querySelectorAll('.item-3d-explore');
      const video_utama = document.querySelector('#videos');

      function renderVideoTemplate(src) {
        return (`
            <video class="w-full h-56 sm:h-96 lg:h-[500px]" controls>
              <source src="${src}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
        `);
      }

      function renderItemVideoTemplate(src) {
        return (`
            <video id="videoThumbnail" class="w-36 h-20 mr-3 rounded-lg cursor-pointer item-3d-explore mb-3 shadow-lg border border-slate-200">
                <source src="${src}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        `);
      }

      window.addEventListener('load', async function() {
        try {
          item_video.innerHTML = "";
          let dataVideos = await axios.get('api/videos');
          video_utama.innerHTML = renderVideoTemplate(dataVideos.data[0])

          dataVideos.data.forEach(src => {
            item_video.innerHTML += renderItemVideoTemplate(src); 
          });
        } catch (error) {
          console.log(error)
        }

      })

      // Tambahkan event listener ke setiap elemen <img>
      images.forEach((el) => {
        el.addEventListener('click', () => {
          const src = el.getAttribute('data-url');
          iframe.setAttribute('src', src);
        });
      });
    </script>
@endsection