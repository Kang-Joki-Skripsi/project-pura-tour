@extends('components.layout')

@section('content')
  <div class="container md:py-14 flex flex-wrap lg:flex-nowrap lg:space-x-5 justify-between items-center">
      <div class="w-full lg:w-1/2">
          <h1 class="text-2xl md:text-3xl lg:text-5xl font-bold">Desa Sibang Gede</h1>
          <p class="text-justify my-4 text-sm lg:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione sequi eum et sit tenetur minus ea, reiciendis consequuntur eos quasi placeat, nulla non a? Ut voluptatibus, provident incidunt libero aspernatur soluta voluptates dolorem velit quis sint nesciunt exercitationem et quam facilis ab expedita dolor magnam sapiente quae nobis accusantium quos rerum! Consectetur ad, provident repellat saepe voluptatem facilis repudiandae, reprehenderit impedit pariatur ducimus nisi consequatur temporibus! Eaque cumque itaque suscipit voluptatem, distinctio quia ex minus dolor consequatur mollitia! Harum quia, accusamus incidunt, temporibus enim, at labore perferendis dolorum commodi minima atque odit excepturi magnam! Exercitationem ad repellendus quibusdam quia deserunt.</p>
      </div>
      <div id="map" class="w-full lg:w-1/2">
          <iframe class="w-full h-[350px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31561.845519748196!2d115.19964480085729!3d-8.573803917654962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23e9c75836f47%3A0x4b5df247888cde3a!2sSibang%20Gede%2C%20Kec.%20Abiansemal%2C%20Kabupaten%20Badung%2C%20Bali!5e0!3m2!1sid!2sid!4v1715745238437!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </div>


@endsection