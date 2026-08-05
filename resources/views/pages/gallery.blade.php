@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="bg-black text-white py-28">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-6xl font-bold">Gallery</h1>

        <p class="mt-6 text-gray-300 text-lg">
            A collection of stories captured through my lens.
        </p>
    </div>
</section>

<!-- Category -->
<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-center flex-wrap gap-4">

            <a href="{{ route('gallery') }}"
                class="px-6 py-3 rounded-full {{ request('category') ? 'border' : 'bg-black text-white' }}">
                All
            </a>

            <a href="{{ route('gallery', ['category' => 'Wedding']) }}"
                class="px-6 py-3 rounded-full {{ request('category') == 'Wedding' ? 'bg-black text-white' : 'border' }}">
                Wedding
            </a>

            <a href="{{ route('gallery', ['category' => 'Portrait']) }}"
                class="px-6 py-3 rounded-full {{ request('category') == 'Portrait' ? 'bg-black text-white' : 'border' }}">
                Portrait
            </a>

            <a href="{{ route('gallery', ['category' => 'Event']) }}"
                class="px-6 py-3 rounded-full {{ request('category') == 'Event' ? 'bg-black text-white' : 'border' }}">
                Event
            </a>

            <a href="{{ route('gallery', ['category' => 'Travel']) }}"
                class="px-6 py-3 rounded-full {{ request('category') == 'Travel' ? 'bg-black text-white' : 'border' }}">
                Travel
            </a>

        </div>

    </div>
</section>

<!-- Gallery -->
<section class="pb-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse($galleries as $gallery)

                <div
                    onclick="openLightbox({{ $loop->index }})"
                    class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">

                    <img
                        src="{{ asset('storage/'.$gallery->image) }}"
                        alt="{{ $gallery->title }}"
                        class="w-full h-96 object-cover transition duration-500 group-hover:scale-110">

                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-end">

                        <div class="p-6">
                            <h3 class="text-white text-2xl font-bold">
                                {{ $gallery->title }}
                            </h3>

                            <p class="text-gray-200">
                                {{ $gallery->location }}
                            </p>
                        </div>

                    </div>

                </div>

            @empty

                <div class="col-span-3 text-center py-20">
                    <h2 class="text-2xl font-semibold text-gray-500">
                        No photos available.
                    </h2>
                </div>

            @endforelse

        </div>

    </div>

</section>

<!-- Lightbox -->
<div id="lightbox"
    onclick="closeLightbox()"
    class="fixed inset-0 bg-black/90 hidden items-center justify-center z-50">

    <div
        onclick="event.stopPropagation()"
        class="max-w-5xl w-full px-6">

            <img id="lightboxImage"
                class="w-full max-h-[80vh] object-contain rounded-xl">

        <p id="photoCounter" class="text-center text-gray-400 mt-4"></p>

<div class="text-center mt-6">

    <h2 id="lightboxTitle"
        class="text-white text-3xl font-bold"></h2>

    <p id="lightboxLocation"
        class="text-gray-300 mt-2"></p>

    <button
        onclick="closeLightbox()"
        class="mt-6 bg-white text-black px-8 py-3 rounded-xl">
        Close
    </button>

</div>

    </div>

</div>

<script>

    let photos = [
    @foreach($galleries as $gallery)
    {
        image: "{{ asset('storage/'.$gallery->image) }}",
        title: "{{ $gallery->title }}",
        location: "{{ $gallery->location }}"
    },
    @endforeach
    ];

    let currentIndex = 0;

function openLightbox(index){

    currentIndex = index;

    document.getElementById('lightbox').classList.remove('hidden');
    document.getElementById('lightbox').classList.add('flex');

    document.body.style.overflow = "hidden";

    updatePhoto();
}

function updatePhoto(){

    document.getElementById('lightboxImage').src = photos[currentIndex].image;
    document.getElementById('lightboxTitle').innerText = photos[currentIndex].title;
    document.getElementById('lightboxLocation').innerText = photos[currentIndex].location;

}

function nextPhoto(){

    currentIndex++;

    if(currentIndex >= photos.length){
        currentIndex = 0;
    }

    updatePhoto();
}

function prevPhoto(){

    currentIndex--;

    if(currentIndex < 0){
        currentIndex = photos.length - 1;
    }

    updatePhoto();
}

function closeLightbox(){
    document.getElementById('lightbox').classList.remove('flex');
    document.getElementById('lightbox').classList.add('hidden');
    document.body.style.overflow = "auto";
}

document.addEventListener('keydown', function(e){

    const lightbox = document.getElementById('lightbox');

    if(lightbox.classList.contains('hidden')){
        return;
    }

    if(e.key === 'Escape'){
        closeLightbox();
    }

    if(e.key === 'ArrowRight'){
        nextPhoto();
    }

    if(e.key === 'ArrowLeft'){
        prevPhoto();
    }

});

</script>

@endsection
