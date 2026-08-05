@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="relative h-screen flex items-center justify-center text-center overflow-hidden">

    <!-- Background -->
    <img
        src="{{ asset('images/hero.png') }}"
        alt="Hero"
        class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Content -->
    <div class="relative z-10" data-aos="fade-right">

        <h1 class="text-5xl md:text-8xl font-bold text-white">
            Capture Every Moment
        </h1>

        <p class="text-gray-300 mt-6 text-xl">
            Wedding • Portrait • Event • Travel
        </p>

        <div class="mt-10">
            <a href="{{ route('gallery') }}"
                class="bg-white text-black px-8 py-4 rounded-full font-semibold hover:bg-gray-300 transition">
                Explore Gallery
            </a>
        </div>

    </div>

</section>

<!-- About -->
<section class="bg-white py-24">

    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div data-aos="fade-right">

            <span class="text-[#C9A227] uppercase tracking-[5px]">
                About Me
            </span>

            <h2 class="text-4xl md:text-5xl font-bold mt-4">
                Turning Moments Into Timeless Memories
            </h2>

            <div class="h-px w-20 bg-[#C9A227] mt-6 mb-6"></div>

            <p class="text-gray-600 leading-8">
                Saya adalah fotografer yang berfokus pada wedding, portrait,
                event, dan travel photography. Setiap foto dibuat untuk
                menceritakan sebuah cerita dan mengabadikan momen yang tidak
                akan terulang kembali.
            </p>

            <a href="{{ route('gallery') }}"
                class="inline-block mt-8 bg-black text-white px-8 py-3 rounded-lg hover:bg-gray-800 transition">

                View Portfolio

            </a>

        </div>

        <div
            data-aos="fade-left"
            data-aos-delay="150">

            <img
                src="{{ asset('images/about-profile.jpg') }}"
                alt="Photographer"
                class="w-full h-[500px] object-cover rounded-xl shadow-2xl">
        </div>

    </div>

</section>

<!-- Featured Gallery -->
<section class="bg-white py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div
            data-aos="fade-up"
            class="text-center mb-16">

            <span class="uppercase tracking-[5px] text-[#C9A227]">
                Portfolio
            </span>

            <h2 class="text-5xl font-bold mt-4">
                Featured Gallery
            </h2>

            <p class="text-gray-600 mt-4">
                Beberapa hasil karya terbaik yang telah saya abadikan.
            </p>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach($featured as $category => $photo)

                @if($photo)

                    <div
                        data-aos="zoom-in"
                        data-aos-delay="{{ $loop->index * 100 }}"
                        class="group relative overflow-hidden rounded-2xl shadow-lg">

                        <img
                            src="{{ asset('storage/' . $photo->image) }}"
                            alt="{{ $photo->title }}"
                            class="w-full h-80 object-cover group-hover:scale-110 transition duration-500">

                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-end">

                            <div class="p-6">

                                <span class="text-sm text-gray-300 uppercase">
                                    {{ $category }}
                                </span>

                                <h3 class="text-2xl font-bold text-white">
                                    {{ $photo->title }}
                                </h3>

                                <p class="text-gray-200">
                                    {{ $photo->location }}
                                </p>

                            </div>

                        </div>

                    </div>

                @endif

            @endforeach

        </div>

        <div class="text-center mt-12">

            <a href="{{ route('gallery') }}"
                class="inline-block bg-black text-white px-8 py-3 rounded-lg hover:bg-gray-800 transition">

                View All Gallery

            </a>

        </div>

    </div>

</section>

<!-- Testimonials -->
<section class="bg-neutral-100 py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div
            data-aos="fade-up"
            class="text-center mb-16">

            <span class="uppercase tracking-[5px] text-[#C9A227]">
                Testimonials
            </span>

            <h2 class="text-5xl font-bold mt-4">
                What Clients Say
            </h2>

            <p class="text-gray-600 mt-4">
                Kepuasan klien adalah prioritas utama dalam setiap sesi pemotretan.
            </p>

        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div
                data-aos="fade-up"
                data-aos-delay="0"
                class="bg-white p-8 rounded-xl shadow-sm">

                <p class="text-gray-600 italic">
                    "Hasil fotonya luar biasa. Momen pernikahan kami terasa hidup kembali setiap melihat album ini."
                </p>

                <div class="mt-6">
                    <h3 class="font-bold text-lg">Andi & Rina</h3>
                    <p class="text-gray-500">Wedding Client</p>
                </div>

            </div>

            <div
                data-aos="fade-up"
                data-aos-delay="100"
                class="bg-white p-8 rounded-xl shadow-sm">

                <p class="text-gray-600 italic">
                    "Sangat profesional, ramah, dan hasil editingnya natural. Sangat puas!"
                </p>

                <div class="mt-6">
                    <h3 class="font-bold text-lg">Kevin Pratama</h3>
                    <p class="text-gray-500">Portrait Client</p>
                </div>

            </div>

            <div
                data-aos="fade-up"
                data-aos-delay="200"
                class="bg-white p-8 rounded-xl shadow-sm">

                <p class="text-gray-600 italic">
                    "Dokumentasi acara perusahaan kami sangat rapi dan hasil fotonya berkualitas tinggi."
                </p>

                <div class="mt-6">
                    <h3 class="font-bold text-lg">PT Maju Bersama</h3>
                    <p class="text-gray-500">Corporate Event</p>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- Contact CTA -->
<section class="bg-black text-white py-24">

    <div
        data-aos="fade-up"
        class="max-w-4xl mx-auto px-6 text-center">

        <div class="mb-6 text-5xl text-[#C9A227]">✦</div>

        <span class="uppercase tracking-[5px] text-[#C9A227]">
            Contact Me
        </span>

        <h2 class="text-5xl font-bold mt-4">
            Ready to Capture Your Story?
        </h2>

        <p class="text-gray-300 mt-6 leading-8">
            Punya acara, sesi foto, atau ingin berdiskusi mengenai konsep fotografi?
            Hubungi saya melalui platform favorit Anda.
        </p>

        <div class="flex flex-wrap justify-center gap-4 mt-10">

            <a href="https://wa.me/62882006802151"
                class="border border-white/30 px-8 py-4 rounded-xl font-semibold transition hover:border-[#C9A227] hover:text-[#C9A227]">
                WhatsApp
            </a>

            <a href="https://instagram.com/arkaamaral"
                class="border border-white/30 px-8 py-4 rounded-xl font-semibold transition hover:border-[#C9A227] hover:text-[#C9A227]">
                Instagram
            </a>

            <a href="mailto:samuelgame325@gmail.com"
                class="border border-white/30 px-8 py-4 rounded-xl font-semibold transition hover:border-[#C9A227] hover:text-[#C9A227]">
                Email
            </a>

        </div>

    </div>

</section>

@endsection
