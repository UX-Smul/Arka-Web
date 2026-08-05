@extends('layouts.app')

@section('content')

<div class="pt-17"></div>

<section class="relative h-[70vh]">

    <img
        src="{{ asset('images/about-banner.png') }}"
        class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/55"></div>

    <div class="relative z-10 max-w-7xl mx-auto h-full flex items-center px-6">

        <div class="text-white max-w-2xl">

            <span class="uppercase tracking-[5px] text-[#C9A227]">
                About
            </span>

            <h1 class="text-6xl md:text-8xl font-serif mt-4">
                About Me
            </h1>

            <div class="w-24 h-px bg-[#C9A227] mt-6 mb-8"></div>

            <p class="text-xl leading-9 text-gray-200">
                Dedicated in photography since 2020 & very passionate about taking a photo of couple. Since doing intership in Japan, i have a dream someday i want to back in Japan as Photographer and more explore hidden beautiful place in Japan also make a lot of friends in Japan & also worldwide
            </p>

        </div>

    </div>

</section>


<section class="py-24 bg-white">

<div class="max-w-7xl mx-auto px-6">

<div class="grid lg:grid-cols-2 gap-16 items-center">

<div>

<img
src="{{ asset('images/about-profile.jpg') }}"
class="rounded-3xl shadow-2xl w-full">

</div>

<div>

<span class="text-[#C9A227] italic text-xl">
Hello, I'm
</span>

<h2 class="text-6xl font-serif mt-2">
Arka Amaral
</h2>

<div class="w-24 h-px bg-[#C9A227] my-6"></div>

<p class="text-gray-600 leading-8 mb-6">

Photography is more than just taking pictures.

It is about preserving emotions, stories,
and moments that can never happen twice.

</p>

<p class="text-gray-600 leading-8 mb-6">

I specialize in Wedding, Portrait,
Event and Travel Photography.
Every project is approached with
attention to detail and a storytelling mindset.

</p>

<p class="text-gray-600 leading-8">

My goal is simple:

Create photographs that you will
still love many years from now.

</p>

<div class="grid grid-cols-1 gap-4 mt-12 text-center sm:grid-cols-3">

<div class="rounded-2xl border border-black/[0.07] bg-[#f7f6f3] px-4 py-6 shadow-sm">

<h3 class="text-4xl font-bold">
6+
</h3>

<p class="text-gray-500 mt-2">
Years Experience
</p>

</div>

<div class="rounded-2xl border border-black/[0.07] bg-[#f7f6f3] px-4 py-6 shadow-sm">

<h3 class="text-4xl font-bold">
100+
</h3>

<p class="text-gray-500 mt-2">
Happy Clients
</p>

</div>

<div class="rounded-2xl border border-black/[0.07] bg-[#f7f6f3] px-4 py-6 shadow-sm">

<h3 class="text-4xl font-bold">
250+
</h3>

<p class="text-gray-500 mt-2">
Photos Delivered
</p>

</div>

</div>

</div>

</div>

</div>

</section>

<section class="py-20 bg-white">

    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-14">

            <span class="uppercase tracking-[5px] text-gray-500">
                My Experience
            </span>

            <h2 class="text-4xl font-bold mt-4">
                Projects I've Worked On
            </h2>

            <p class="text-gray-600 mt-4">
                Beberapa pengalaman yang telah saya kerjakan di berbagai bidang fotografi.
            </p>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="bg-gray-100 rounded-2xl p-8 text-center hover:shadow-xl transition duration-300">

                <div class="text-5xl mb-5">💍</div>

                <h3 class="text-2xl font-bold mb-2">
                    Wedding
                </h3>

                <p class="text-4xl font-bold text-black mb-2">
                    14
                </p>

                <p class="text-gray-500">
                    Projects
                </p>

            </div>

            <div class="bg-gray-100 rounded-2xl p-8 text-center hover:shadow-xl transition duration-300">

                <div class="text-5xl mb-5">🎉</div>

                <h3 class="text-2xl font-bold mb-2">
                    Event
                </h3>

                <p class="text-4xl font-bold text-black mb-2">
                    25
                </p>

                <p class="text-gray-500">
                    Projects
                </p>

            </div>

            <div class="bg-gray-100 rounded-2xl p-8 text-center hover:shadow-xl transition duration-300">

                <div class="text-5xl mb-5">👤</div>

                <h3 class="text-2xl font-bold mb-2">
                    Portrait
                </h3>

                <p class="text-4xl font-bold text-black mb-2">
                    60
                </p>

                <p class="text-gray-500">
                    Projects
                </p>

            </div>

            <div class="bg-gray-100 rounded-2xl p-8 text-center hover:shadow-xl transition duration-300">

                <div class="text-5xl mb-5">🌍</div>

                <h3 class="text-2xl font-bold mb-2">
                    Travel
                </h3>

                <p class="text-4xl font-bold text-black mb-2">
                    3
                </p>

                <p class="text-gray-500">
                    Projects
                </p> 

            </div>

        </div>

    </div>

</section>

<section class="py-20 bg-neutral-100">

    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-14">

            <span class="uppercase tracking-[5px] text-gray-500">
                My Gear
            </span>

            <h2 class="text-4xl font-bold mt-4">
                Equipment I Use
            </h2>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="bg-white rounded-xl shadow p-8 text-center">
                <div class="text-5xl mb-4">📷</div>
                <h3 class="font-bold">Camera</h3>
                <p class="text-gray-500 mt-2">Sony A7 IV</p>
            </div>

            <div class="bg-white rounded-xl shadow p-8 text-center">
                <div class="text-5xl mb-4">🔍</div>
                <h3 class="font-bold">Lens</h3>
                <p class="text-gray-500 mt-2">Sigma 24-70mm f/2.8</p>
            </div>

            <div class="bg-white rounded-xl shadow p-8 text-center">
                <div class="text-5xl mb-4">💡</div>
                <h3 class="font-bold">Lighting</h3>
                <p class="text-gray-500 mt-2">Godox AD200</p>
            </div>

            <div class="bg-white rounded-xl shadow p-8 text-center">
                <div class="text-5xl mb-4">🚁</div>
                <h3 class="font-bold">Drone</h3>
                <p class="text-gray-500 mt-2">DJI Mini 4 Pro</p>
            </div>

        </div>

    </div>

</section>

<section class="py-24 bg-black text-white">

    <div class="max-w-4xl mx-auto px-6 text-center">

        <span class="uppercase tracking-[5px] text-gray-400">
            Let's Work Together
        </span>

        <h2 class="text-5xl font-bold mt-4">
            Ready to Capture Your Story?
        </h2>

        <p class="text-gray-300 mt-6 leading-8">
            Setiap momen memiliki cerita. Mari abadikan momen terbaikmu dengan hasil foto yang elegan, natural, dan penuh makna.
        </p>

        <div class="mt-10">

            <a href="{{ route('contact') }}"
               class="inline-block bg-white text-black px-8 py-4 rounded-xl font-semibold hover:bg-gray-200 transition">

                Contact Me

            </a>

        </div>

    </div>

</section>

@endsection
