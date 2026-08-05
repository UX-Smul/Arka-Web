@extends('layouts.app')

@section('content')

<section class="py-20">

    <div class="max-w-3xl mx-auto px-6">

        <h1 class="text-4xl font-bold mb-8">
            Edit Photo
        </h1>

        <form action="{{ route('gallery.update', $gallery->id) }}"
              method="POST"
              enctype="multipart/form-data"
              class="space-y-6 bg-white p-8 rounded-2xl shadow">

            @csrf
            @method('PUT')

            <div>
                <label class="block mb-2 font-semibold">Title</label>

                <input
                    type="text"
                    name="title"
                    value="{{ $gallery->title }}"
                    class="w-full border rounded-xl px-4 py-3">
            </div>

            <div>
                <label class="block mb-2 font-semibold">Category</label>

                <select
                    name="category"
                    class="w-full border rounded-xl px-4 py-3">

                    <option value="Wedding" {{ $gallery->category == 'Wedding' ? 'selected' : '' }}>Wedding</option>
                    <option value="Portrait" {{ $gallery->category == 'Portrait' ? 'selected' : '' }}>Portrait</option>
                    <option value="Event" {{ $gallery->category == 'Event' ? 'selected' : '' }}>Event</option>
                    <option value="Travel" {{ $gallery->category == 'Travel' ? 'selected' : '' }}>Travel</option>

                </select>
            </div>

            <div>
                <label class="block mb-2 font-semibold">Location</label>

                <input
                    type="text"
                    name="location"
                    value="{{ $gallery->location }}"
                    class="w-full border rounded-xl px-4 py-3">
            </div>

            <div>
                <label class="block mb-2 font-semibold">Description</label>

                <textarea
                    name="description"
                    rows="4"
                    class="w-full border rounded-xl px-4 py-3">{{ $gallery->description }}</textarea>
            </div>

            <div>

    <label class="block mb-2 font-semibold">
        Cover Photo
    </label>

    <label class="flex items-center gap-3">

        <input
            type="checkbox"
            name="is_cover"
            value="1"
            {{ $gallery->is_cover ? 'checked' : '' }}>

        <span>Jadikan cover untuk kategori ini</span>

    </label>

</div>

            <div>
                <label class="block mb-2 font-semibold">Current Photo</label>

                <img
                    src="{{ asset('storage/' . $gallery->image) }}"
                    class="w-48 rounded-xl shadow mb-4">

                <input
                    type="file"
                    name="image"
                    class="w-full border rounded-xl px-4 py-3">
            </div>

            <button
                class="bg-black text-white px-8 py-3 rounded-xl hover:bg-gray-800">

                Update Photo

            </button>

        </form>

    </div>

</section>

@endsection