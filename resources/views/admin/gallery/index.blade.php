@extends('layouts.app')

@section('content')

<section class="py-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center mb-8">

            <h1 class="text-4xl font-bold">
                Gallery Management
            </h1>

            <a href="{{ route('gallery.create') }}"
               class="bg-black text-white px-6 py-3 rounded-xl hover:bg-gray-800 transition">
                + Add Photo
            </a>

        </div>

        @if(session('success'))
            <div class="mb-6 rounded-xl bg-green-100 text-green-700 px-4 py-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow overflow-hidden">

            <table class="w-full">

                <thead class="bg-gray-100">

                    <tr>
                        <th class="p-4 text-left">Photo</th>
                        <th class="p-4 text-left">Title</th>
                        <th class="p-4 text-left">Category</th>
                        <th class="p-4 text-left">Location</th>
                        <th class="p-4 text-center">Action</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($galleries as $gallery)

                    <tr class="border-t hover:bg-gray-50">

                        <td class="p-4">
                            <img
                                src="{{ asset('storage/' . $gallery->image) }}"
                                alt="{{ $gallery->title }}"
                                class="w-24 h-20 object-cover rounded-lg shadow">
                        </td>

                        <td class="p-4 font-medium">
                            {{ $gallery->title }}
                        </td>

                    <td class="p-4">

                        {{ $gallery->category }}

                        @if($gallery->is_cover)

                            <span class="ml-2 px-2 py-1 text-xs bg-green-500 text-white rounded-full">
                                Cover
                            </span>

                        @endif

                    </td>

                        <td class="p-4">
                            {{ $gallery->location }}
                        </td>

                        <td class="p-4 text-center">

                            <a
                                href="{{ route('gallery.edit', $gallery->id) }}"
                                class="text-blue-600 hover:underline mr-3">

                                Edit

                            </a>

                            <form
                                action="{{ route('gallery.destroy', $gallery->id) }}"
                                method="POST"
                                class="inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    onclick="return confirm('Delete this photo?')"
                                    class="text-red-600 hover:underline mr-3">

                                    Delete

                                </button>

                            </form>

                            <form
                                action="{{ route('gallery.cover', $gallery->id) }}"
                                method="POST"
                                class="inline">

                                @csrf

                                <button
                                    class="text-yellow-500 hover:text-yellow-600">

                                    @if($gallery->is_cover)

                                        ⭐ Cover

                                    @else

                                        ☆ Set Cover

                                    @endif

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="5" class="text-center py-10 text-gray-500">
                            No photos uploaded yet.
                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</section>

@endsection