@extends('layouts.app')

@section('content')

<section class="py-24">

<div class="max-w-7xl mx-auto px-6">

<h1 class="text-5xl font-bold mb-10">
Admin Dashboard
</h1>


<div class="grid md:grid-cols-3 gap-8">


<div class="bg-black text-white rounded-2xl p-8">

<h2 class="text-gray-300">
Total Photos
</h2>

<p class="text-5xl font-bold mt-4">
{{ $totalPhotos }}
</p>

</div>



<div class="bg-gray-100 rounded-2xl p-8">

<h2 class="text-gray-600">
Categories
</h2>

<p class="text-5xl font-bold mt-4">
{{ $categories }}
</p>

</div>



<div class="bg-gray-100 rounded-2xl p-8">

<h2 class="text-gray-600">
Cover Photos
</h2>

<p class="text-5xl font-bold mt-4">
{{ $covers }}
</p>

</div>


</div>


<div class="flex-justify-center mt-12">

<a href="{{ route('gallery.index') }}"
class="bg-black text-white px-8 py-3 rounded-xl">

Manage Gallery

</a>

</div>


</div>

</section>

@endsection