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
        <div class="w-full lg:w-1/3 lg:pl-4 mt-5 lg:mt-0">
          <div class="flex flex-wrap justify-normal">
            <div 
              class="w-36 h-20 mr-3 rounded-lg bg-img1 bg-left bg-cover cursor-pointer item-3d-explore mb-3"
              data-url="https://sketchfab.com/models/52a66c41cfcd4f999fb1b1c49bf24d70/embed"
              ></div>
            <div 
              class="w-36 h-20 mr-3 rounded-lg bg-img2 bg-left bg-cover cursor-pointer item-3d-explore"
              data-url="https://sketchfab.com/models/1bb69bbe51fc4e11ad10ea80c32ca7f6/embed"
              ></div>
            <div 
              class="w-36 h-20 mr-3 rounded-lg bg-img1 bg-left bg-cover cursor-pointer item-3d-explore mb-3"
              data-url="https://sketchfab.com/models/52a66c41cfcd4f999fb1b1c49bf24d70/embed"
              ></div>
            <div 
              class="w-36 h-20 mr-3 rounded-lg bg-img2 bg-left bg-cover cursor-pointer item-3d-explore"
              data-url="https://sketchfab.com/models/1bb69bbe51fc4e11ad10ea80c32ca7f6/embed"
              ></div>
            <div 
              class="w-36 h-20 mr-3 rounded-lg bg-img1 bg-left bg-cover cursor-pointer item-3d-explore mb-3"
              data-url="https://sketchfab.com/models/52a66c41cfcd4f999fb1b1c49bf24d70/embed"
              ></div>
            <div 
              class="w-36 h-20 mr-3 rounded-lg bg-img2 bg-left bg-cover cursor-pointer item-3d-explore"
              data-url="https://sketchfab.com/models/1bb69bbe51fc4e11ad10ea80c32ca7f6/embed"
              ></div>
          </div>
          <!-- <ul>
            <li class="mb-3">
              <a href="#" class="flex items-start item-3d-explore" data-url="https://sketchfab.com/models/52a66c41cfcd4f999fb1b1c49bf24d70/embed">
                <div class="w-36 h-20 mr-2 rounded-lg bg-img1 bg-left bg-cover"></div>
              </a>
            </li>
            <li class="mb-3">
              <a href="#" class="flex items-start item-3d-explore" data-url="https://sketchfab.com/models/1bb69bbe51fc4e11ad10ea80c32ca7f6/embed">
                <div class="w-36 h-20 mr-2 rounded-lg bg-img2 bg-left bg-cover"></div>
              </a>
            </li>
          </ul> -->
        </div>
      </div>
    </div>

    <script>

      const images = document.querySelectorAll('.item-3d-explore');
      const iframe = document.querySelector('#frame3D');

      // Tambahkan event listener ke setiap elemen <img>
      images.forEach((el) => {
        el.addEventListener('click', () => {
          const src = el.getAttribute('data-url');
          iframe.setAttribute('src', src);
        });
      });
    </script>
@endsection