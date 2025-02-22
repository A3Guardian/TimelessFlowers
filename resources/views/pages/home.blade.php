@extends('layouts.app')

@section('content')
<section class="home" id="home">
    <div class="content">
        <h3> handmade flowers </h3>
        <span> creative & beautiful flowers </span>
        <p>Each handmade flower we create is more than just a piece of art; it's a vibrant story told through delicate petals and rich colors. Crafted with love and passion, our flowers bring nature’s beauty to life, leaving an unforgettable impression on the hearts of those who receive them. </p>
    </div>
</section>
@include('components.about')
@include('components.products')
@include('components.review')
@endsection