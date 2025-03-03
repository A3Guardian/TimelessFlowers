@extends('layouts.app')

@section('content')
<section class="contact" id="contact">

	<h1 class="heading"> <span> Contact </span> Us </h1>

	<div class="row">

		<form action="{{ route('contact.submit') }}" method="POST">
			@csrf

			<input type="text" name="name" placeholder="Name" class="box" value="{{ old('name') }}">
			@error('name')
			<p class="error">{{ $message }}</p>
			@enderror

			<input type="email" name="email" placeholder="Email" class="box" value="{{ old('email') }}">
			@error('email')
			<p class="error">{{ $message }}</p>
			@enderror

			<input type="number" name="phone_number" placeholder="Phone Number" class="box" value="{{ old('phone_number') }}">
			@error('phone')
			<p class="error">{{ $message }}</p>
			@enderror

			<textarea name="message" class="box" placeholder="Your Message" cols="30" rows="10">{{ old('message') }}</textarea>
			@error('message')
			<p class="error">{{ $message }}</p>
			@enderror

			<input type="submit" value="Send Message" class="btn">
		</form>

		<div class="image">
			<img src="/images/contact.avif" alt="Contact Us">
		</div>

	</div>
</section>
@endsection