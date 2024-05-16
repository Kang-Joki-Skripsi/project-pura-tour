@extends('components.layout')

@section('content')
    <div class="container">
      <div class="flex flex-col lg:flex-row lg:space-x-3">
        <!-- Video player -->
        <div class="w-full lg:w-2/3">
          <iframe
            class="w-full h-56 sm:h-96 lg:h-[500px]"
            id="frame3D"
            title="Ferrari f40"
            frameborder="0"
            allowfullscreen
            mozallowfullscreen="true"
            webkitallowfullscreen="true"
            allow="autoplay; fullscreen; xr-spatial-tracking"
            xr-spatial-tracking
            execution-while-out-of-viewport
            execution-while-not-rendered
            web-share
            src="https://sketchfab.com/models/52a66c41cfcd4f999fb1b1c49bf24d70/embed"
          >
          </iframe>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, optio.</p>
        </div>

        <!-- Playlist -->
        <div class="md:w-1/3 lg:pl-4 mt-5 lg:mt-0">
          <ul>
            <!-- Video list items -->
            <li class="mb-3">
              <a href="#" class="flex items-start item-3d-explore" data-url="https://sketchfab.com/models/52a66c41cfcd4f999fb1b1c49bf24d70/embed">
                <div class="w-36 h-20 mr-2 rounded-lg bg-img1 bg-left bg-cover"></div>
                <span class="truncate font-bold">Video Title 1</span>
              </a>
            </li>
            <li class="mb-3">
              <a href="#" class="flex items-start item-3d-explore" data-url="https://sketchfab.com/models/1bb69bbe51fc4e11ad10ea80c32ca7f6/embed">
                <div class="w-36 h-20 mr-2 rounded-lg bg-img2 bg-left bg-cover"></div>
                <span class="truncate font-bold">Video Title 1</span>
              </a>
            </li>
            <!-- Add more video list items as needed -->
          </ul>
        </div>
      </div>
    </div>

    <script>

      const images = document.querySelectorAll('.item-3d-explore');

      // Tambahkan event listener ke setiap elemen <img>
      images.forEach((a) => {
        a.addEventListener('click', (e) => {
          e.preventDefault();
          const src = a.getAttribute('data-url');
          const iframe = document.querySelector('#frame3D');
          iframe.setAttribute('src', src);
        });
      });
    </script>
@endsection