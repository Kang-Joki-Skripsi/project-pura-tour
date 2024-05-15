@extends('components.layout')

@section('content')
    <div class="container md:h-screen">
      <div class="flex flex-col lg:flex-row lg:space-x-3 lg:h-[85%]">
        <!-- Video player -->
        <div class="w-full lg:w-2/3 h-full">
          <iframe
            class="w-full h-56 sm:h-96 lg:h-full"
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
              <a href="#" class="flex items-start item-3d-explore">
                <img
                  src="https://media.sketchfab.com/models/1bb69bbe51fc4e11ad10ea80c32ca7f6/fallbacks/921f0d38be7d43d0bbe8e370429935bd/dc74c67af82542fcabcca0f4a1ef0fa9.jpeg"
                  alt="Video Thumbnail"
                  class="w-40 h-20 object-cover mr-2 rounded-lg"
                  data-url="https://sketchfab.com/models/1bb69bbe51fc4e11ad10ea80c32ca7f6/embed"
                />
                <span class="truncate font-bold">Video Title 1</span>
              </a>
            </li>
            <li class="mb-3">
              <a href="#" class="flex items-start item-3d-explore">
                <img
                  src="https://media.sketchfab.com/models/52a66c41cfcd4f999fb1b1c49bf24d70/fallbacks/0dada7d4eed04d8e93aa750fb6c54c8f/1e3f6aee94b247a1976409f5b38b9e02.jpeg"
                  alt="Video Thumbnail"
                  class="w-40 h-20 object-cover mr-2 rounded-lg"
                  data-url="https://sketchfab.com/models/52a66c41cfcd4f999fb1b1c49bf24d70/embed"
                />
                <span class="truncate font-bold">Video Title 1</span>
              </a>
            </li>
            <!-- Add more video list items as needed -->
          </ul>
        </div>
      </div>
    </div>

    <script>

      const images = document.querySelectorAll('.item-3d-explore img');

      // Tambahkan event listener ke setiap elemen <img>
      images.forEach((img) => {
        img.addEventListener('click', () => {
          const src = img.getAttribute('data-url');
          const iframe = document.querySelector('#frame3D');
          iframe.setAttribute('src', src);
        });
      });
    </script>
@endsection