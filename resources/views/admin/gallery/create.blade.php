@extends('layouts.app')

@section('content')

<section class="py-20">

    <div class="max-w-3xl mx-auto px-6">

        <h1 class="text-4xl font-bold mb-8">
            Upload New Photo
        </h1>

        <form action="{{ route('gallery.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="space-y-6 bg-white p-8 rounded-2xl shadow">

            @csrf

            <div>
                <label class="block mb-2 font-semibold">
                    Title
                </label>

                <input type="text"
                       name="title"
                       class="w-full border rounded-xl px-4 py-3">
            </div>

            <div>
                <label class="block mb-2 font-semibold">
                    Category
                </label>

                <select name="category"
                        class="w-full border rounded-xl px-4 py-3">

                    <option>Wedding</option>
                    <option>Portrait</option>
                    <option>Event</option>
                    <option>Travel</option>

                </select>
            </div>

            <div>
                <label class="block mb-2 font-semibold">
                    Location
                </label>

                <input type="text"
                       name="location"
                       class="w-full border rounded-xl px-4 py-3">
            </div>

            <div>
                <label class="block mb-2 font-semibold">
                    Description
                </label>

                <textarea name="description"
                          rows="4"
                          class="w-full border rounded-xl px-4 py-3"></textarea>
            </div>

            <div>
                <label class="block mb-2 font-semibold">
                    Photo
                </label>

                <input type="file"
                       name="image"
                       class="w-full border rounded-xl px-4 py-3">
            </div>

            <button
                class="bg-black text-white px-8 py-3 rounded-xl hover:bg-gray-800">

                Upload Photo

            </button>

        </form>

    </div>

</section>

@endsection