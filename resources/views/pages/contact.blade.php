@extends('layouts.app')

@section('content')
<section class="contact" id="contact">
	
	<h1 class="heading"> <span> contact </span> us </h1>

	<div class="row">
		
		<form action="">
			<input type="text" placeholder="name" class="box">
			<input type="email" placeholder="email" class="box">
			<input type="number" placeholder="number" class="box">
			<textarea name="" class="box" placeholder="message" id="" cols="30" rows="10">
			</textarea>
			<input type="submit" value="send message" class="btn">
		</form>
	    <div class="image">
			<img src="/images/contact.avif" alt="">
		</div>
	
</section>
@endsection