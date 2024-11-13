@extends('main')

@section('content')

<div class="bg-white w-full">
  <!-- #1 -->
  <div class="container mx-auto py-12 px-8 flex flex-col md:flex-row items-center justify-between">
    <article class="text-black text-pretty leading-loose mb-3 md:w-1/2">
      <h1 class="font-semibold text-2xl">Welcome!</h1>
      <h3 class="font-black text-4xl text-balance">I Am Web Developer</h3>
      <p class="font-medium text-xl text-balance">A fresh graduate web developer experienced<br>in create and design websites.</p>
    </article>
    <img class="w-[300px] md:w-[500px] opacity-90 box-border rounded object-cover shadow-lg transform transition-transform duration-300 hover:scale-105" src="./img/DSC_9383.JPG" alt="Foto Rifky Cahya Putra">
  </div>

  <!-- #2 -->
  <div class="bg-[#121820] w-full rounded-t-[75px]">
    <!-- Judul -->
    <div class="container mx-auto pt-12 px-10">
      <h1 class="text-2xl font-black text-white mt-10 mb-5 text-balance">Portofolio</h1>
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
            <a href="Portfolio">
              <div class="max-w-xs rounded-lg p-2">
                <img class="w-full h-52 object-cover transform transition-transform duration-300 hover:scale-105 rounded-lg bg-white" src="./img/LogoPorto.png" alt="Portofolio">
                <h2 class="text-lg font-bold text-white mt-3 text-pretty">Portofolio</h2>
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="Dicoding-1">
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

    <!-- 3  -->
    <div class="bg-[#F19E4A] w-full rounded-t-[75px]">
      <div class="container mx-auto pt-12 pb-24 px-8 flex flex-col md:flex-row items-center justify-around gap-8">

        <div class="card bg-[#FFFFFF] w-full md:w-[270px] h-[150] shadow-xl rounded-xl flex flex-col mt-10 md:mt-20 ease-in-out duration-300 hover:scale-105 hover:-translate-y-5">
          <div class="card-body flex flex-col justify-center text-[#052451] text-pretty p-5">
            <h2 class="card-title font-black text-2xl text-balance">About Me</h2>
            <p class="text-balance font-medium mt-2">Sedikit cerita tentang siapa saya dan apa yang saya lakukan </p>
          </div>
        </div>
        <img class="w-[300px] md:w-[500px] box-border rounded-xl object-cover shadow-xl transform transition-transform duration-300 hover:scale-105" src="./img/DSC_9381.JPG" alt="Foto Rifky Cahya Putra">

      </div>
    </div>
  </div>
</div>

<style>
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
@endsection