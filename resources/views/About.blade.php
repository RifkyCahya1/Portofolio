@extends('main')

@section('content')

<div class="bg-[#CB0001] w-full">
    <!-- #1 -->
    <div class="container mx-auto py-12 px-8 flex flex-col md:flex-row items-center justify-between">
        <article class="text-white text-pretty leading-loose mb-3 md:w-1/2">
            <h3 class="font-black text-4xl text-balance">About Me</h3>
            <p class="font-medium text-xl text-balance">Sedikit cerita tentang siapa saya dan apa yang saya lakukan saat ini.</p>
        </article>
        <img class="w-[300px] md:w-[500px] box-border rounded object-cover shadow-lg transform transition-transform duration-300 hover:scale-105" src="./img/DSC_9382.JPG" alt="Foto Rifky Cahya Putra">
    </div>

    <!-- #2 -->
    <div class="bg-white w-full rounded-t-[75px]">
        <div class="container mx-auto pt-12 pb-24 px-8 flex flex-col md:flex-row items-center justify-around gap-8">

            <img class="w-[250px] md:w-[350px] box-border rounded-full object-cover shadow-2xl transform transition-transform duration-300 hover:scale-105" src="./img/Foto.JPG" alt="Foto Rifky Cahya Putra">

            <article class="text-black leading-loose mb-3 md:w-1/2">
                <h3 class="font-black text-4xl mb-2">About Me!</h3>
                <p class="font-medium text-lg mb-6 text-balance">Nama saya Rifky Cahya Putra, seorang Web Developer fresh graduate dari Telkom University Surabaya. Dengan semangat yang tinggi, saya berkomitmen untuk terus belajar dan mengembangkan keterampilan saya di bidang pengembangan web.</p>
                <p class="font-medium text-lg mb-6 text-balance">Saya mahir dalam HTML, CSS, JavaScript, serta framework seperti Laravel, Tailwind CSS, dan Bootstrap. Selain itu, saya berpengalaman dalam desain UI/UX menggunakan Figma, memastikan setiap proyek tidak hanya fungsional, tetapi juga menarik secara visual.</p>
                <p class="font-medium text-lg mb-2 text-balance">Saat ini, saya sedang mempelajari React dan React Native, dan saya sangat antusias untuk menambah keahlian ini ke dalam portofolio saya. Dengan dedikasi yang tinggi, saya berharap dapat memberikan kontribusi nyata dalam industri teknologi.</p>
            </article>

        </div>
    </div>

</div>

@endsection