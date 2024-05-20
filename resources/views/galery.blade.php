@extends('components.layout')

@section('content')
    <div id="gallery" class="container px-2 md:flex-nowrap md:space-x-5 justify-between items-center">
        <div class="text-center">
            <h1 class="text-2xl md:text-3xl lg:text-5xl font-bold mb-10">Gallery</h1>
            <div class="mb-5 mt-5 flex justify-center">
              <button class="text-sm bg-red-700 px-2 py-1.5 md:py-2 md:px-5 text-white capitalize border border-slate-500 hover:bg-red-500 active:bg-red-500">
                utama mandala
              </button>
              <button class="text-sm bg-red-700 px-2 py-1.5 md:py-2 md:px-5 text-white capitalize border border-slate-500 hover:bg-red-500 active:bg-red-500">
                madya mandala
              </button>
              <button class="text-sm bg-red-700 px-2 py-1.5 md:py-2 md:px-5 text-white capitalize border border-slate-500 hover:bg-red-500 active:bg-red-500">
                nista mandala
              </button>
            </div>
        </div>

        <ul id="cards" class="py-8 grid grid-cols sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-y-12 xl:gap-y-4"></ul>
    </div>

    <div id="popup-container" class="fixed inset-0 bg-gray-900 bg-opacity-50 items-start sm:items-center justify-center hidden">
      <div class="relative bg-white px-4 py-16 rounded shadow-md overflow-auto animate-popupAnimation">
        <button id="close-button" class="absolute top-2 left-2 md:top-5 md:left-5 w-6 h-6 bg-white rounded-full md:w-8 md:h-8 mb-5 text-xl">
          <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-arrow-left-circle text-slate-600 hover:text-red-600 active:text-slate-600" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
          </svg>
        </button>
        <div class="flex max-w-[640px] md:max-h-[500px] lg:max-w-[1000px] flex-wrap justify-center items-center">
          <div class="w-full lg:w-1/2 px-5">
            <img
            class="w-full max-h-[250px] sm:max-h-[300px] md:h-full md:mt-10 lg:mt-0"
            src="${imgUrl}" alt="">
          </div>
        </div>
      </div>
    </div>

    <!-- Custom JavaScript to toggle mobile menu -->
    <script>
        let cards = document.querySelector('#cards');
        const popupContainer = document.getElementById('popup-container')
        const dataPura = []

        function crateCardTemplate(data) {
          let cards = "";
          data.forEach(imgUrl => {
            cards += `<li class="cursor-pointer">
              <a href="#">
                <img
                  class="w-full max-h-[350px] sm:h-[200px] md:h-full object-cover rounded-md"
                  src="${imgUrl}" alt="galery">
              </a>
            </li>
            `;
          });

          return cards;
        }

        function createPopupContentTemplate(imgUrl) {
          return (
            `
              <div class="relative bg-white px-3 pt-16 pb-3 rounded-lg shadow-md overflow-auto animate-popupAnimation w-full sm:w-[500px]">
                <button id="close-button" class="absolute top-2 left-2 md:top-5 md:left-5 w-6 h-6 bg-white rounded-full md:w-8 md:h-8 mb-5 text-xl">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-arrow-left-circle text-slate-600 hover:text-red-600 active:text-slate-600" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                  </svg>
                </button>
                <div class="w-full">
                    <img
                    class="w-full max-h-[500px] md:mt-10 lg:mt-0 rounded-lg"
                    src="${imgUrl}" alt="">
                </div>
              </div>
            `
          );
        }

        function renderPopupContent() {
          const cardItems = document.querySelectorAll("#cards li")
          cardItems.forEach((card) => {
            card.addEventListener('click', e => {              
              const popupContent = createPopupContentTemplate(e.target.getAttribute('src'))
              popupContainer.innerHTML = popupContent

              popupContainer.classList.remove('hidden')
              popupContainer.classList.add('flex')
            })
          })
        }

        window.addEventListener('load', async function() {
          try {
            cards.innerHTML = "";

            let dataGalery = await axios.get('api/galery');

            dataPura.utama_mandala = dataGalery.data.utama_mandala;
            dataPura.madya_mandala = dataGalery.data.madya_mandala;
            dataPura.nista_mandala = dataGalery.data.nista_mandala;

            cards.innerHTML = crateCardTemplate(dataPura.utama_mandala)
            renderPopupContent()
          } catch (error) {
            console.log(error)
          }

        })

        const buttons = document.querySelectorAll('#gallery button')

        buttons.forEach((button, buttonIndex) => {
          // render data card tertentu ketika pengguna menekan salah satu tombol gallery
          button.addEventListener('click', () => {
            const textContent = button.textContent.replace(/\s+/g, '')
            cards.innerHTML = '';

            if (textContent == "utamamandala") cards.innerHTML = crateCardTemplate(dataPura.utama_mandala);
            else if(textContent == "madyamandala") cards.innerHTML = crateCardTemplate(dataPura.madya_mandala);
            else cards.innerHTML = crateCardTemplate(dataPura.nista_mandala);
            renderPopupContent()
          })
        })

        const closeBtn = document.getElementById('close-button')
        closeBtn.addEventListener('click', () => {
          popupContainer.classList.add("hidden")
          popupContainer.classList.remove("flex")
        })

        popupContainer.addEventListener('click', () => {
          popupContainer.classList.add("hidden")
        })
    </script>
@endsection
</body>
</html>