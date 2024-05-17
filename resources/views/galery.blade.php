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

        <ul id="cards" class="py-8 grid grid-cols sm:grid-cols-3 gap-4 md:gap-y-12 xl:gap-y-4">
          <li>
            <a href="#">
              <img
                class="w-full sm:h-full object-cover"
                src="https://awsimages.detik.net.id/community/media/visual/2022/10/31/candi-bentar-pura-ponjok-batu_169.jpeg?w=1200" alt="">
            </a>
            <h3 class="text-lg text-slate-700 capitalize font-bold mt-2">pelinggih 1</h3>
          </li>
          <li>
            <a href="#">
              <img
              class="w-full sm:h-full object-cover"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzcAhl9ATcsPkGPJtzNlXgdU9nElZxVKq5aoI4ETOE1w&s" alt="">
            </a>
            <h3 class="text-lg text-slate-700 capitalize font-bold mt-2">pelinggih 2</h3>
          </li>
          <li>
            <a href="#">
              <img
                class="w-full text-slate-700 sm:h-full object-cover"
                src="https://panbelog.wordpress.com/wp-content/uploads/2014/11/pura-dasar-bhuwana.jpg" alt="">
            </a>
            <h3 class="text-lg capitalize font-bold mt-2">pelinggih 3</h3>
          </li>
        </ul>
    </div>

    <div id="popup-container" class="fixed inset-0 bg-gray-900 bg-opacity-50 md:items-center justify-center hidden">
      <div class="relative bg-white p-8 rounded shadow-md" style="animation: popupAnimation 0.3s ease;">
        <div class="w-full lg:w-2/5 self-center">
          <button id="close-button" class="absolute top-2 left-2 md:top-5 md:left-5 w-6 h-6 bg-white rounded-full md:w-8 md:h-8 mb-5 text-xl">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-arrow-left-circle text-slate-600 hover:text-red-600 active:text-slate-600" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
            </svg>
          </button>
          <img
          class="w-full h-full md:mt-10"
          src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/07/86/9a/60/pura-mandara-giri-semeru.jpg?w=500&h=500&s=1" alt="">
        </div>
        <div class="w-full lg:w-3/5 p-2 md:p-0 self-start">
          <h2 class="text-xl sm:text-2xl md:text-3xl capitalize font-bold text-700">Bale Pawedan</h2>
          <p class="text-sm lg:text-base leading-relaxed mt-5 text-slate-500 ">Bale Pawedan adalah bale pemujaan seluruh dewa – dewa yang berstana di Pura atau bale pengiasan ( tempat berias )</p>
        </div>
      </div>
    </div>

    <!-- Custom JavaScript to toggle mobile menu -->
    <script>
        const dataPura = [
          {
            id: 1,
            type: "utama mandala",
            name: "Bale Pawedan",
            imgUrl: "https://awsimages.detik.net.id/community/media/visual/2022/10/31/candi-bentar-pura-ponjok-batu_169.jpeg?w=1200",
            describe: "Bale Pawedan adalah bale pemujaan seluruh dewa – dewa yang berstana di Pura atau bale pengiasan ( tempat berias )"
          },
          {
            id: 2,
            type: "utama mandala",
            imgUrl: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzcAhl9ATcsPkGPJtzNlXgdU9nElZxVKq5aoI4ETOE1w&s",
            name: "Panggungan",
            describe: "Panggungan adalah tempat untuk meletakkan upakara atau banten"
          },
          {
            id: 3,
            type: "utama mandala",
            imgUrl: "https://panbelog.wordpress.com/wp-content/uploads/2014/11/pura-dasar-bhuwana.jpg",
            name: "Bale Gede",
            describe: "Bale Gede adalah bale paruman (rapat) Ida Bhatara yang berstana di Pura"
          },
          {
            id: 4,
            type: "madya mandala",
            imgUrl: "https://asset-2.tstatic.net/bali/foto/bank/images/kulkul-di-banjar-merta-rauh-desa-dangin-puri-kangin-kecamatan-denpasa.jpg",
            name: "Bale Kul - Kul",
            describe: "Bale kul – kul merupakan bale gendongan untuk menyiarkan kepada masyarakat bahwa sedang ada upacara di Pura. Bale kul – kul dipercaya dapat membersihkan dan mendapatkan rasa aman serta sejahtera. Dimana dalam bale kul – kul ini terdapat 4 patung yang menghadap ke 4 arah mata angin seperti menghadap barat yaitu patung Mahadewa, menghadap utara yaitu patung Wisnu, menghadap timur yaitu patung Iswara dan menghadap keselatan yaitu patung Brahma"
          },
          {
            id: 5,
            type: "madya mandala",
            imgUrl: "https://purasatyaloka.org/wp-content/uploads/2021/08/IMG_20200220_151846_bg-feature_pembangunan-madya.jpg",
            name: "Patung Sugriwa",
            describe: "Dorkala atau penjaga pintu masuk ke Utama Mandala"
          },
          {
            id: 6,
            type: "madya mandala",
            imgUrl: "https://javaprivatetour.com/wp-content/uploads/2023/10/balinese-people-in-taman-ayun-java-private-tour.webp",
            name: "Bale Pesandekan",
            describe: "Bale Pesandekan adalah bale tempat beristirahat pemedek yang tangkil atau datang ke Pura",
          },
          {
            id: 7,
            type: "nista mandala",
            imgUrl: "https://student-activity.binus.ac.id/himdkv/wp-content/uploads/sites/11/2021/08/8.png",
            name: "Ida Kumbakarna ",
            describe: "Sebagai ameng – ameng Pura atau penjaga paling depan di Pura Dalem Srijati",
          },
          {
            id: 8,
            type: "nista mandala",
            imgUrl: "https://asset-2.tstatic.net/bali/foto/bank/images/sejumlah-umat-hindu-sembahyang-di-pura-agung-besakih.jpg",
            name: "Ratu Gede Rahwana",
            describe: "Sebagai ameng – ameng Pura atau penjaga paling depan di Pura Dalem Srijati",
          },
        ]

        function crateCardTemplate(data) {
          return (
            `<li class="${data.id} cursor-pointer">
              <a href="#">
                <img
                  class="w-full max-h-[250px] sm:h-[100px] md:h-full object-cover"
                  src="${data.imgUrl}" alt="${data.name}">
              </a>
              <h3 class="text-lg text-slate-700 capitalize font-bold mt-2">${data.name}</h3>
            </li>
            `
          )
        }

        function createPopupContentTemplate(data) {
          return (
            `
            <div class="relative bg-white px-4 py-16 rounded shadow-md overflow-auto animate-popupAnimation">
              <button id="close-button" class="absolute top-2 left-2 md:top-5 md:left-5 w-6 h-6 bg-white rounded-full md:w-8 md:h-8 mb-5 text-xl">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-arrow-left-circle text-slate-600 hover:text-red-600 active:text-slate-600" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                  </svg>
                </button>
              <h2 class="text-2xl md:text-3xl font-bold capitalize text-center mb-4">${data.name}</h2>
              <div class="flex max-w-[640px] md:max-h-[500px] lg:max-w-[1000px] flex-wrap justify-between items-star">
                <div class="w-full lg:w-1/2 px-5">
                  <img
                  class="w-full max-h-[250px] sm:max-h-[300px] md:h-full md:mt-10 lg:mt-0"
                  src="${data.imgUrl}" alt="">
                </div>
                <div class="w-full lg:w-1/2 px-5 mt-4 lg:mt-0">
                  <p class="text-justify my-3 text-sm text-slate-600">${data.describe}</p>
                </div>
              </div>
            </div>
            `
          )
        }

        function renderCards(button) {

        }

        function renderPopupContent() {
          const cardItems = document.querySelectorAll("#cards li")
          const popupContainer = document.getElementById('popup-container')

          cardItems.forEach((card) => {
          card.addEventListener('click', () => {
            dataPura.forEach(data => {
              if (card.classList.contains(data.id)) {
                const popupContent = createPopupContentTemplate(data)
                popupContainer.innerHTML = popupContent
              }
            })
              popupContainer.classList.remove('hidden')
              popupContainer.classList.add('flex')
            })
          })
        }

        window.addEventListener('load', function() {
          const cards = document.getElementById('cards')
          cards.innerHTML = ""
          dataPura.forEach(data => {
            if(data.type === "utama mandala") {
              cards.innerHTML += crateCardTemplate(data)
            }
          })
          renderPopupContent()
        })

        const buttons = document.querySelectorAll('#gallery button')

        buttons.forEach((button, buttonIndex) => {
          // render data card tertentu ketika pengguna menekan salah satu tombol gallery
          button.addEventListener('click', () => {
            const cards = document.getElementById('cards')
            cards.innerHTML = ""

            dataPura.forEach((data) => {
              const textContent = button.textContent.replace(/\s+/g, '')
              const type = data.type.replace(/\s+/g, '')

              if(type === textContent) {
                let card = crateCardTemplate(data)
                cards.innerHTML += card
              }
            })

            // menampilkan popup detail sesuai dengan data card yg diklik
            renderPopupContent()
          })
        })

        const popupContainer = document.getElementById('popup-container')

        const cardItems = document.querySelectorAll("#cards li")
        cardItems.forEach((card) => {
        card.addEventListener('click', () => {
          popupContainer.classList.remove('hidden')
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