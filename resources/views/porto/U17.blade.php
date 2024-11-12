@extends('main')

@section('content')

<div class="bg-white w-full">
    <div class="container mx-auto pt-12 px-8">
        <a href="" class="text-[#CB0001] bg-[#EEEEEE] rounded-full font-bold text-base px-8 py-1 hover:bg-[#CB0001] hover:text-[#FFFFFF]">Back</a>
        <h1 class="text-3xl font-bold text-black mt-10 mb-5 text-balance">Website Piala Dunia U17 Host City Surabaya </h1>
    </div>
    <div class="container mx-auto pb-12 px-8 flex flex-col md:flex-row items-start justify-between gap-14">

        <!-- Bagian Slider (menggunakan 50% lebar layar di layar medium ke atas) -->
        <div class="w-full md:w-1/2">
            <!-- Swiper Container -->
            <div class="swiper main-slider bg-[#121820] p-4 rounded-lg">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <img class="box-border object-cover w-full rounded-lg shadow-lg" src="./img/U17Home.png" alt="U17">
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <img class="box-border object-cover w-full rounded-lg shadow-lg" src="./img/U17.png" alt="Foto Rifky Cahya Putra">
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <img class="box-border object-cover w-full rounded-lg shadow-lg" src="./img/U17Stadium.png" alt="Foto Rifky Cahya Putra">
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <img class="box-border object-cover w-full rounded-lg shadow-lg" src="./img/U17Rute.png" alt="Foto Rifky Cahya Putra">
                    </div>
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next custom-swiper-button"></div>
                <div class="swiper-button-prev custom-swiper-button"></div>
            </div>

            <!-- Thumbnails -->
            <div class="swiper thumbnail-slider mt-4">
                <div class="swiper-wrapper">
                    <!-- Thumbnail 1 -->
                    <div class="swiper-slide cursor-pointer">
                        <img class="box-border object-cover w-24 h-16 rounded" src="./img/U17Home.png" alt="Thumbnail 1">
                    </div>
                    <!-- Thumbnail 2 -->
                    <div class="swiper-slide cursor-pointer">
                        <img class="box-border object-cover w-24 h-16 rounded" src="./img/U17.png" alt="Thumbnail 2">
                    </div>
                    <!-- Thumbnail 3 -->
                    <div class="swiper-slide cursor-pointer">
                        <img class="box-border object-cover w-24 h-16 rounded" src="./img/U17Stadium.png" alt="Thumbnail 3">
                    </div>
                    <!-- Thumbnail 4 -->
                    <div class="swiper-slide cursor-pointer">
                        <img class="box-border object-cover w-24 h-16 rounded" src="./img/U17Rute.png" alt="Thumbnail 4">
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Penjelasan (menggunakan 50% lebar layar di layar medium ke atas) -->
        <div class="w-full md:w-1/2">
            <div class="rounded-md border-2 border-[#C8C8C8] p-2 mb-3">
                <p class="font-medium text-[16px] text-[#575757] pl-3">Date : 14 August 2023 - 14 October 2023</p>
            </div>

            <span class="inline-flex items-center rounded-md bg-[#EEEEEE] px-2 mr-2 mb-2 py-1 text-sm font-semibold text-[#CB0001] ring-2 ring-inset ring-gray-500/10">Front-End Developer</span>
            <span class="inline-flex items-center rounded-md bg-[#EEEEEE] px-2 mr-2 mb-2 py-1 text-sm font-semibold text-[#CB0001] ring-2 ring-inset ring-gray-500/10">Teamwork</span>
            <span class="inline-flex items-center rounded-md bg-[#EEEEEE] px-2 mr-2 mb-2 py-1 text-sm font-semibold text-[#CB0001] ring-2 ring-inset ring-gray-500/10">Adobe XD</span>
            <span class="inline-flex items-center rounded-md bg-[#EEEEEE] px-2 mr-2 mb-2 py-1 text-sm font-semibold text-[#CB0001] ring-2 ring-inset ring-gray-500/10">HTML</span>
            <span class="inline-flex items-center rounded-md bg-[#EEEEEE] px-2 mr-2 mb-2 py-1 text-sm font-semibold text-[#CB0001] ring-2 ring-inset ring-gray-500/10">CSS</span>
            <span class="inline-flex items-center rounded-md bg-[#EEEEEE] px-2 mr-2 mb-2 py-1 text-sm font-semibold text-[#CB0001] ring-2 ring-inset ring-gray-500/10">Javascript</span>
            <span class="inline-flex items-center rounded-md bg-[#EEEEEE] px-2 mr-2 mb-2 py-1 text-sm font-semibold text-[#CB0001] ring-2 ring-inset ring-gray-500/10">Bootstrap</span>
            <span class="inline-flex items-center rounded-md bg-[#EEEEEE] px-2 mr-2 mb-2 py-1 text-sm font-semibold text-[#CB0001] ring-2 ring-inset ring-gray-500/10">Laravel</span>
            <span class="inline-flex items-center rounded-md bg-[#EEEEEE] px-2 mr-2 mb-2 py-1 text-sm font-semibold text-[#CB0001] ring-2 ring-inset ring-gray-500/10">PHP</span>
            <span class="inline-flex items-center rounded-md bg-[#EEEEEE] px-2 mr-2 mb-2 py-1 text-sm font-semibold text-[#CB0001] ring-2 ring-inset ring-gray-500/10">MySql</span>

            <div class="flex flex-row items-center pb-12 space-x-2 mt-3">
                <button id="open-modal" class="text-[#EEEEEE] bg-[#CB0001] rounded-full font-bold text-base px-8 py-1 hover:bg-[#EEEEEE] hover:text-[#CB0001]">
                    See Certificate
                </button>
                <!-- Modal -->
                <div id="modal" class="fixed inset-0 z-40 flex items-center justify-center bg-black bg-opacity-50 hidden">
                    <div class="bg-white rounded-lg overflow-hidden shadow-xl max-w-3xl mx-auto"> <img src="./img/U17Sertif.jpg" alt="Certificate" class="w-full h-auto">
                        <div class="p-4 flex justify-end"> <button id="close-modal" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700">Close</button> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#121820] w-full rounded-t-[75px]">
    <!-- Judul -->
    <div class="container mx-auto pt-12 px-10">
      <h1 class="text-2xl font-black text-white mt-10 mb-5 text-balance">Select Other</h1>
    </div>
    <div class="container mx-auto pb-24 px-8">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper ">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <a href="U17">
              <div class="max-w-xs rounded-lg p-2">
                <img class="w-full h-52 object-cover transform transition-transform duration-300 hover:scale-105 rounded-lg" src="./img/IconU17.jpeg" alt="Portofolio">
                <h2 class="text-lg font-bold text-white mt-3 text-pretty">Piala Dunia U17 Host City Surabaya </h2>
              </div>
            </a>
          </div>
          <!-- Slide 2 -->
          <div class="swiper-slide">
            <a href="Istopila">
              <div class="max-w-xs rounded-lg p-2">
                <img class="w-full h-52 object-cover transform transition-transform duration-300 hover:scale-105 rounded-lg" src="./img/Istopila.jpg" alt="Portofolio">
                <h2 class="text-lg font-bold text-white mt-3 text-pretty">Istopila Studio Foto</h2>
              </div>
            </a>
          </div>
          <!-- Slide 3 -->
          <div class="swiper-slide">
            <a href="GoTrans">
              <div class="max-w-xs rounded-lg p-2">
                <img class="w-full h-52 object-cover transform transition-transform duration-300 hover:scale-105 rounded-lg" src="./img/GoTrans.png" alt="Portofolio">
                <h2 class="text-lg font-bold text-white mt-3 text-pretty">UI/UX Go Trans</h2>
              </div>
            </a>
          </div>
          <!-- Tambahkan Slide Lagi Jika Perlu -->
          <div class="swiper-slide">
            <a href="">
              <div class="max-w-xs rounded-lg p-2">
                <img class="w-full h-52 object-cover transform transition-transform duration-300 hover:scale-105 rounded-lg bg-white" src="./img/LogoPorto.png" alt="Portofolio">
                <h2 class="text-lg font-bold text-white mt-3 text-pretty">Portofolio</h2>
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="">
              <div class="max-w-xs rounded-lg p-2">
                <img class="w-full h-52 object-cover transform transition-transform duration-300 hover:scale-105 rounded-lg" src="./img/Dicoding.jpeg" alt="Portofolio">
                <h2 class="text-lg font-bold text-white mt-3 text-pretty">Pelatihan Dicoding Pemrograman web</h2>
              </div>
            </a>
          </div>

          <!-- <div class="swiper-slide">
            <a href="" class="max-w-xs rounded-lg p-2">
              <img class="w-full h-52 object-cover transform transition-transform duration-300 hover:scale-105 rounded-lg" src="https://via.placeholder.com/300x200" alt="Gambar 3">
              <h2 class="text-lg font-bold text-white mt-3 text-pretty">Judul Card 3</h2>
            </a>
          </div> -->
        </div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-next custom-swiperHome-button"></div>
        <div class="swiper-button-prev custom-swiperHome-button"></div>
      </div>
    </div>
</div>

<style>
    .custom-swiper-button {
        color: #CB0001;
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        --swiper-navigation-size: 14px;
        border-radius: 100%;
        padding: 15px;
        font-weight: bolder;
        width: 25px;
        height: 25px;
    }

    .custom-swiper-button:hover {
        color: white;
        background-color: #CB0001;
    }

    .custom-swiperHome-button {
    color: white;
    background-color: #CB0001;
    display: flex;
    align-items: center;
    justify-content: center;
    --swiper-navigation-size: 18px;
    border-radius: 100%;
    padding: 25px;
    font-weight: bolder;
    width: 50px;
    height: 50px;
    z-index: 99;
  }
</style>

<script>
    const openModalButton = document.getElementById('open-modal');
    const closeModalButton = document.getElementById('close-modal');
    const modal = document.getElementById('modal');
    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });
    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
    // Close modal when clicking outside of the modal content 
    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>
@endsection