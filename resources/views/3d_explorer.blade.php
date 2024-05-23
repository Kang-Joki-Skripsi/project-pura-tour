@extends('components.layout')

@section('content')
    <div class="container">
      <div class="flex flex-col lg:flex-row lg:space-x-3">
        <!-- Video player -->
        <div class="w-full lg:w-2/3 shadow-lg border border-slate-200 rounded-lg overflow-hidden" id="mainVideo"></div>

        <!-- Playlist -->
        <div class="w-full lg:w-1/3 lg:pl-4 mt-5 lg:mt-0">
          <div id="item-video" class="flex flex-wrap justify-normal"></div>
        </div>
      </div>
    </div>

    <script>
      const item_video = document.getElementById('item-video');
      const video_utama = document.querySelector('#mainVideo');

      function renderVideoTemplate(src) {
        return (`
            <video class="w-full h-56 sm:h-96 lg:h-[500px]" controls autoplay>
              <source src="${src}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
        `);
      }

      function renderItemVideoTemplate(src) {
        return (`
            <video class="w-36 h-20 mr-3 rounded-lg cursor-pointer item-3d-explore mb-3 shadow hover:shadow-lg border border-slate-200 bg-white" data-url="${src}">
                <source src="${src}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        `);
      }

      function renderItemVideos() {
        const videos = document.querySelectorAll('.item-3d-explore');
        videos.forEach(video => {
          video.addEventListener('click', () => {
            const src = video.getAttribute('data-url');
            video_utama.innerHTML = renderVideoTemplate(src)
          });
        });
      }

      window.addEventListener('load', async function() {
        try {
          item_video.innerHTML = "";
          let dataVideos = await axios.get('api/videos');
          video_utama.innerHTML = renderVideoTemplate(dataVideos.data[0])

          dataVideos.data.forEach(src => {
            item_video.innerHTML += renderItemVideoTemplate(src); 
          });

          renderItemVideos();
        } catch (error) {
          console.log(error)
        }

      })
      
    </script>
@endsection