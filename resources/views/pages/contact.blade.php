@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="bg-black text-white py-28">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <h1 class="text-6xl font-bold">
            Contact
        </h1>

        <p class="mt-6 text-gray-300 text-lg">
            Let's create something memorable together.
        </p>

    </div>

</section>

<!-- Contact -->
<section class="bg-black py-24 text-white">

    <div class="max-w-5xl mx-auto px-6">

        <div class="grid md:grid-cols-3 gap-8">

            <div class="rounded-xl border border-white/10 bg-white/[0.06] p-8 text-center transition hover:-translate-y-1 hover:border-[#C9A227]/70">

                <div class="text-5xl mb-5">📱</div>

                <h2 class="text-2xl font-bold mb-3">
                    WhatsApp
                </h2>

                <p class="mb-6 text-gray-300">
                    Chat langsung untuk diskusi dan pemesanan.
                </p>

                <a href="https://wa.me/62882006802151"
                    class="inline-block rounded-xl border border-[#C9A227] px-6 py-3 text-[#C9A227] transition hover:bg-[#C9A227] hover:text-black">
                    Chat Now
                </a>

            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.06] p-8 text-center transition hover:-translate-y-1 hover:border-[#C9A227]/70">

                <div class="text-5xl mb-5">📸</div>

                <h2 class="text-2xl font-bold mb-3">
                    Instagram
                </h2>

                <p class="mb-6 text-gray-300">
                    Lihat karya terbaru dan aktivitas saya.
                </p>

                <a href="https://instagram.com/arkaamaral"
                    class="inline-block rounded-xl border border-[#C9A227] px-6 py-3 text-[#C9A227] transition hover:bg-[#C9A227] hover:text-black">
                    Visit Profile
                </a>

            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.06] p-8 text-center transition hover:-translate-y-1 hover:border-[#C9A227]/70">

                <div class="text-5xl mb-5">✉️</div>

                <h2 class="text-2xl font-bold mb-3">
                    Email
                </h2>

                <p class="mb-6 text-gray-300">
                    Untuk kerja sama atau pertanyaan lainnya.
                </p>

                <a href="mailto:samuelgame325@gmail.com"
                    class="inline-block rounded-xl border border-[#C9A227] px-6 py-3 text-[#C9A227] transition hover:bg-[#C9A227] hover:text-black">
                    Send Email
                </a>

            </div>

        </div>

    </div>

</section>

@endsection
