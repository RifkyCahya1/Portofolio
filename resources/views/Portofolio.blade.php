@extends('main')

@section('content')

<div class="bg-[#A52F76] w-full">
    <!-- #1 -->
    <div class="container mx-auto py-12 px-8 flex flex-col md:flex-row items-center justify-between">
        <article class="text-white text-pretty leading-loose mb-3 md:w-1/2">
            <h3 class="font-black text-4xl text-balance">Portofolio</h3>
            <p class="font-medium text-xl text-balance">Apa yang ingin kamu lihat ? </p>
        </article>
        <img class="w-[300px] md:w-[500px] box-border object-cover transform transition-transform duration-300 hover:scale-105" src="./img/Portfolio.png" alt="Portofolio">
    </div>

    <!-- #2 -->
    <div class="bg-[#0B1119] w-full rounded-t-[75px]">
        <div class="container mx-auto pt-12 pb-24 px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            <!-- Row 1 -->
            <a href="U17" class="bg-[#141D2A] rounded-lg shadow-lg text-white p-6 sm:col-span-1 lg:row-start-1 lg:row-end-4">
                <h2 class="text-2xl font-black mb-5">Website Piala Dunia U17 host City Surabaya</h2>
                <div class="flex justify-center items-center mt-2">
                    <img class="w-full object-cover shadow-xl rounded-lg" src="./img/U17.png" alt="Portofolio">
                </div>
            </a>

            <a href="Istopila" class="bg-[#23344A] rounded-lg shadow-lg text-white p-6 sm:col-span-1 lg:row-start-1 lg:row-end-2">
                <h2 class="text-2xl font-black mb-2">Website Istopila Foto Studio</h2>
                <div class="flex justify-center items-center mt-2">
                    <img class="w-full object-cover shadow-xl rounded-lg" src="./img/Istopila.png" alt="Portofolio">
                </div>
            </a>

            <a href="GoTrans" class="bg-[#141D2A] rounded-lg shadow-lg text-white p-6 sm:col-span-1 lg:row-start-1 lg:row-end-4">
                <h2 class="text-2xl font-black mb-5">UI/UX Go Trans</h2>
                <div class="flex justify-center items-center">
                    <img class="w-full object-cover shadow-xl rounded-lg" src="./img/GoTrans.png" alt="Portofolio">
                </div>
            </a>

            <!-- Row 2 -->
            <a href="Portfolio" class="bg-[#23344A] rounded-lg shadow-lg text-white p-6 sm:col-span-1 lg:row-start-4 lg:row-end-6">
                <h2 class="text-2xl font-black mb-2">Website Portofolio</h2>
                <div class="flex justify-center items-center">
                    <img class="w-full object-cover shadow-xl rounded-lg" src="./img/Porto.png" alt="Portofolio">
                </div>
            </a>

            <a href="Dicoding-1" class="bg-[#141D2A] rounded-lg shadow-lg text-white p-6 sm:col-span-1 lg:row-start-2 lg:row-end-6">
                <h2 class="text-2xl font-black mb-2">Pelatihan Dicoding "Belajar Dasar Pemrograman Web"</h2>
                <div class="flex justify-center items-center">
                    <img class="w-full object-cover shadow-xl rounded-lg" src="./img/Dicoding.png" alt="Portofolio">
                </div>
            </a>

            <!-- <a href="" class="bg-[#23344A] rounded-lg shadow-lg text-white p-6 sm:col-span-1 lg:row-start-4 lg:row-end-6">
                <h2 class="text-2xl font-black mb-2">Event Title 6</h2>
                <p class="text-gray-700">Description of the event. This is a brief summary of what the event is about.</p>
            </a> -->
        </div>
    </div>

</div>

@endsection