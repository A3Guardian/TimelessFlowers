<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=0.1">
	<title> Timeless Flowers </title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>


<body>

	<header>

		<input type="checkbox" name="" id="toggler">
		<label for="toggler" class="fas fa-bars"> </label>

		<a href="#" class="logo"> Timeless Flowers<span>.</span> </a>

		<nav class="navbar">
			<a href="#home"> Dashboard </a>
			<a href="#about"> About </a>
			<a href="#products"> Products </a>
			<a href="#review"> Review </a>
			<a href="#contact"> Contact </a>
		</nav>

		<div class="icons">
			<a href="#" class="fas fa-heart"></a>
			<a href="#" class="fas fa-shopping-cart"> </a>
			<a href="#" class="fas fa-user"> </a>
		</div>

	</header>

	<section class="home" id="home">
		<div class="content">
			<h3> handmade flowers </h3>
			<span> creative & beautiful flowers </span>
			<p>Each handmade flower we create is more than just a piece of art; it's a vibrant story told through delicate petals and rich colors. Crafted with love and passion, our flowers bring nature’s beauty to life, leaving an unforgettable impression on the hearts of those who receive them. </p>
		</div>
	</section>

	<section class="about" id="about">
		<h1 class="heading"> <span> about </span> us </h1>
		<div class="row">

			<div class="video-container">
				<video autoplay loop muted width="100%" height="auto">
					<source src="/images/video.mp4" type="video/mp4">
				</video>
				<h3> best flowers</h3>
			</div>

			<div class="content">
				<h3> why choose us?</h3>
				<p>1. Calitate și Unicitate
					La Timeless Flowers, fiecare floare este creată cu grijă și atenție la detalii, ceea ce face ca fiecare piesă să fie unică. Folosim doar cele mai bune materiale pentru a ne asigura că fiecare floare este de o calitate impecabilă, perfectă pentru a adăuga frumusețe și eleganță în orice moment special.
				</p>
				<p>2. Pasiune și Creativitate
					Fiecare floare este o operă de artizanat, născută din pasiunea noastră pentru frumusețea naturii. Îmbinăm tehnica și creativitatea pentru a aduce la viață flori care nu doar că încântă privirea, dar își lasă amprenta în inima celor care le primesc. Alege Timeless Flowers pentru a adăuga un strop de magie în fiecare moment special.
				</p>
				<p>3. Personalizare și Atenție la Detalii
					Credem că fiecare floare ar trebui să spună o poveste personală. De aceea, oferim opțiuni de personalizare pentru ca fiecare buchet să fie perfect adaptat preferințelor și nevoilor tale. La Timeless Flowers, ne dedicăm fiecărui detaliu, asigurându-ne că florile tale vor fi exact așa cum le-ai visat.
				</p>
				<p>4. Experiență Unică
					Alegerea florilor handmade înseamnă mai mult decât un simplu cadou. Este o experiență de neuitat. De la procesul de selecție până la livrare, ne asigurăm că fiecare pas este realizat cu grijă și respect față de client. Fiecare floare este o declarație de frumusețe, rafinament și emoție.
				</p>
				<p>5. Flori care Împărtășesc Momente Speciale
					Fiecare floare pe care o creăm este mai mult decât o simplă floare. Este un simbol al iubirii, al aprecierei și al momentelor speciale. Alege Timeless Flowers pentru a celebra momentele tale unice cu flori care spun povești. Fiecare petală reflectă pasiunea și dedicația noastră pentru artizanatul floristic.
				</p>
				<a href="#" class="btn"> learn more </a>
			</div>

		</div>
	</section>

	<section class="icons-container">

		<div class="icons">
			<img src="/images/free delivery.png" alt="Free Delivery">
			<div class="info">
				<h3> free delivery </h3>
				<span> on all orders </span>
			</div>
		</div>

		<div class="icons">
			<img src="/images/save money.png" alt="Money Returns">
			<div class="info">
				<h3> 10 days returns </h3>
				<span> moneyback guarantee </span>
			</div>
		</div>

		<div class="icons">
			<img src="/images/gift box.png" alt="Gifts">
			<div class="info">
				<h3> offer & gifts </h3>
				<span> on all orders </span>
			</div>
		</div>

		<div class="icons">
			<img src="/images/credit-card.png" alt="Safe Payments">
			<div class="info">
				<h3> secure payments </h3>
				<span> protected by revolut </span>
			</div>
		</div>

	</section>

	<section class="products" id="products">

		<h1 class="heading"> latest <span> products </span> </h1>
		<div class="box-container">
			<div class="box">
				<span class="discount"> -10% </span>
				<div class="image">
					<img src="/images/f1.jpg" alt="">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn"> add to cart </a>
						<a href="#" class="fas fa-share"></a>
					</div>
				</div>
				<div class="content">
					<h3> Pastel Freshness Bouquet </h3>
					<div class="price"> 120 ron <span> 140 ron </span> </div>
				</div>
			</div>

			<div class="box">
				<span class="discount"> -18% </span>
				<div class="image">
					<img src="/images/f2.jpg" alt="">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn"> add to cart </a>
						<a href="#" class="fas fa-share"></a>
					</div>
				</div>
				<div class="content">
					<h3> Magic of Spring Bouquet </h3>
					<div class="price"> 130 ron <span> 150 ron </span> </div>
				</div>
			</div>



			<div class="box">
				<span class="discount"> -10% </span>
				<div class="image">
					<img src="/images/f3.jpg" alt="Buchet Prospețime Pastelată">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn"> add to cart </a>
						<a href="#" class="fas fa-share"></a>
					</div>
				</div>
				<div class="content">
					<h3> Flower Euphoria Bouquet </h3>
					<div class="price"> 80 ron <span> 100 ron </span> </div>
				</div>
			</div>

			<div class="box">
				<span class="discount"> -7% </span>
				<div class="image">
					<img src="/images/f4.jpg" alt="Buchet Prospețime Pastelată">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn"> add to cart </a>
						<a href="#" class="fas fa-share"></a>
					</div>
				</div>
				<div class="content">
					<h3> Springtime Radiance Bouquet </h3>
					<div class="price"> 70 ron <span> 85 ron </span> </div>
				</div>
			</div>


			<div class="box">
				<span class="discount"> -23% </span>
				<div class="image">
					<img src="/images/f5.jpg" alt="Buchet Prospețime Pastelată">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn"> add to cart </a>
						<a href="#" class="fas fa-share"></a>
					</div>
				</div>
				<div class="content">
					<h3> Dreamy Blooms Bouquet </h3>
					<div class="price"> 125 ron <span> 160 ron </span> </div>
				</div>
			</div>


			<div class="box">
				<span class="discount"> -17% </span>
				<div class="image">
					<img src="/images/f6.jpg" alt="Buchet Prospețime Pastelată">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn"> add to cart </a>
						<a href="#" class="fas fa-share"></a>
					</div>
				</div>
				<div class="content">
					<h3> Floral Sweetness Bouquet </h3>
					<div class="price"> 110 ron <span> 125 ron </span> </div>
				</div>
			</div>


			<div class="box">
				<span class="discount"> -20% </span>
				<div class="image">
					<img src="/images/f7.jpg" alt="Buchet Prospețime Pastelată">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn"> add to cart </a>
						<a href="#" class="fas fa-share"></a>
					</div>
				</div>
				<div class="content">
					<h3> Harmony in Colors Bouquet </h3>
					<div class="price"> 120 ron <span> 140 ron </span> </div>
				</div>
			</div>


			<div class="box">
				<span class="discount"> -8% </span>
				<div class="image">
					<img src="/images/f8.jpg" alt="Buchet Prospețime Pastelată">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn"> add to cart </a>
						<a href="#" class="fas fa-share"></a>
					</div>
				</div>
				<div class="content">
					<h3> April Smiles Bouquet </h3>
					<div class="price"> 130 ron <span> 140 ron </span> </div>
				</div>
			</div>


			<div class="box">
				<span class="discount"> -12% </span>
				<div class="image">
					<img src="/images/f9.jpg" alt="Buchet Prospețime Pastelată">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn"> add to cart </a>
						<a href="#" class="fas fa-share"></a>
					</div>
				</div>
				<div class="content">
					<h3> Garden Scent Bouquet </h3>
					<div class="price"> 180 ron <span> 200 ron </span> </div>
				</div>
			</div>


			<div class="box">
				<span class="discount"> -5% </span>
				<div class="image">
					<img src="/images/f10.jpg" alt="Buchet Prospețime Pastelată">
					<div class="icons">
						<a href="#" class="fas fa-heart"></a>
						<a href="#" class="cart-btn"> add to cart </a>
						<a href="#" class="fas fa-share"></a>
					</div>
				</div>
				<div class="content">
					<h3> Springtime Fairytale Bouquet </h3>
					<div class="price"> 280 ron <span> 300 ron </span> </div>
				</div>
			</div>
		</div>

	</section>

	<section class="review" id="review">

		<h1 class="heading"> customer's <span> review </span> </h1>

		<div class="box-container">
			<div class="box">
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
				<p>
					Un buchet extraordinar! Am comandat pentru prima dată și sunt absolut încântat de calitatea florilor. Buchetul a ajuns impecabil. Recomand cu drag!
				</p>
				<div class="user">
					<img src="/images/p1.jpg" alt="">
					<div class="user-info">
						<h3> Bita Simone</h3>
						<span> happy costumer </span>
					</div>
				</div>
				<span class="fas fa-quote-right"></span>
			</div>


			<div class="box">
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
				<p>
					Un cadou perfect!Am achiziționat acest buchet ca și cadou pentru mama mea și a fost foarte apreciat! Florile sunt superbe. Mulțumesc pentru serviciile excelente! </p>
				<div class="user">
					<img src="/images/p2.jpg" alt="">
					<div class="user-info">
						<h3> Amalia Gabriela</h3>
						<span> happy costumer </span>
					</div>
				</div>
				<span class="fas fa-quote-right"></span>
			</div>

			<div class="box">
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
				<p>
					Cea mai bună alegere!Am comandat florile pentru o ocazie specială și nu am fost dezamăgită! Calitate excelentă, livrare rapidă și serviciu prietenos. Voi recomanda cu siguranță acest site tuturor prietenilor mei!"
				</p>
				</p>
				<div class="user">
					<img src="/images/p3.jpg" alt="">
					<div class="user-info">
						<h3> Simireanu Marina</h3>
						<span> happy costumer </span>
					</div>
				</div>
				<span class="fas fa-quote-right"></span>
			</div>
		</div>

	</section>

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

	<section class="footer">

		<div class="box-container">
			<div class="box">
				<h3> quick links </h3>
				<a href="#"> home </a>
				<a href="#"> about </a>
				<a href="#"> products </a>
				<a href="#"> review </a>
				<a href="#"> contact </a>
			</div>

			<div class="box">
				<h3> extra links </h3>
				<a href="#"> my account </a>
				<a href="#"> my order </a>
				<a href="#"> my favorite </a>
			</div>

			<div class="box">
				<h3> location </h3>
				<a href="#"> Romania </a>
			</div>

			<div class="box">
				<h3> contact info </h3>
				<a href="#"> 0720 798 649 </a>
				<a href="#"> timelessflowers.ro@gmail.com </a>
				<a href="#"> Pascani, Iasi - 705200 </a>
				<img src="/images/card.png" alt="">
			</div>
		</div>
		<div class="credit"> created by <span> Astefanoai Amalia Gabriela </span> | all rights reserved |
		</div>
	</section>
	<style>

	</style>
</body>

</html>