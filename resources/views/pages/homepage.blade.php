@extends('template1')
@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<div class="super_container">

	
	
<!-- Menu -->
<div class="menu_container menu_mm">

	<!-- Menu Close Button -->
	<div class="menu_close_container">
		<div class="menu_close"></div>
	</div>

	<!-- Menu Items -->
	<div class="menu_inner menu_mm">
		<div class="menu menu_mm">
			<ul class="menu_list menu_mm">
				<li class="menu_item menu_mm"><a href="#">Home</a></li>
				<li class="menu_item menu_mm"><a href="#">About us</a></li>
				<li class="menu_item menu_mm"><a href="anggota.html">Anggota</a></li>
				<li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
				<li class="menu_item menu_mm"><a href="news.html">News</a></li>
				<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
			</ul>

			<!-- Menu Social -->
			
			<div class="menu_social_container menu_mm">
				<ul class="menu_social menu_mm">
					<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
					<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
				</ul>
			</div>

			<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
		</div>

	</div>

</div>

<!-- Home -->

<div class="home">

	<!-- Hero Slider -->
	<div class="hero_slider_container">
		<div class="hero_slider owl-carousel">
			
			<!-- Hero Slide -->
			<div class="hero_slide">
				<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
				<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
					<div class="hero_slide_content text-center">
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> <span>Selamat Datang di perpusku!</span></h1>
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> Budayakan Membaca!</h1>
					</div>
				</div>
			</div>
			
			<!-- Hero Slide -->
			<div class="hero_slide">
				<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
				<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
					<div class="hero_slide_content text-center">
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> <span>Selamat Datang di perpusku!</span></h1>
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> Budayakan Membaca!</h1>
					</div>
				</div>
			</div>
			
			<!-- Hero Slide -->
			<div class="hero_slide">
				<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
				<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
					<div class="hero_slide_content text-center">
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> <span>Selamat Datang di perpusku!</span></h1>
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> Budayakan Membaca!</h1>
					</div>
				</div>
			</div>

		</div>

		<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
		<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
	</div>

</div>



<div class="testimonials page_section">
	<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
	<div class="testimonials_background_container prlx_parent">
		<div class="testimonials_background prlx" style="background-image:url(images/rak_buku.jpg)"></div>
	</div>
	<div class="container">

		<div class="row">
			<div class="col">
				<div class="section_title text-center">
					<h1>Tentang Kami</h1>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				
				<div class="testimonials_slider_container">

					<!-- Testimonials Slider -->
					<div class="owl-carousel owl-theme testimonials_slider">
						
						<!-- Testimonials Item -->
						<div class="owl-item">
							<div class="testimonials_item text-center">
								<div class="quote">“</div>
								<p class="testimonials_text">Nama	: Talitha Sevrilla Duriga</p>
								<p class="testimonials_text">Alamat	: Bali, Indonesia</p>
								<p class="testimonials_text">TTL	: Tulungangung, 9 April 2003</p>
								<p class="testimonials_text">Umur	: 16 Tahun</p>
								<p class="testimonials_text">No Telp	: 0812345678896</p>
								<p class="testimonials_text">Email	: talitha_sevrilla_27rpl@student.smktelkom-mlg.sch.id</p>
								<div class="testimonial_user">
									<div class="testimonial_image mx-auto">
										<img src="images/33.Talitha Sevrilla Duriga .jpg" alt="">
									</div>
									<div class="testimonial_name">Talitha Sevrilla Duriga</div>
	
								</div>
							</div>
						</div>

						<!-- Testimonials Item -->
						<div class="owl-item">
							<div class="testimonials_item text-center">
								<div class="quote">“</div>
								<p class="testimonials_text">Nama	: Lathifinda Rosari Mahida</p>
								<p class="testimonials_text">Alamat	: Ponorogo, Indonesia</p>
								<p class="testimonials_text">TTL	: Ponorogo, 26 Juni 2002</p>
								<p class="testimonials_text">Umur	: 17 Tahun</p>
								<p class="testimonials_text">No Telp	: 082335675915</p>
								<p class="testimonials_text">Email	: lathifinda_rosari_27rpl@student.smktelkom-mlg.sch.id</p>
								<div class="testimonial_user">
									<div class="testimonial_image mx-auto">
										<img src="images/17. Lathifinda Rosari Mahida .jpg" alt="">
									</div>
									<div class="testimonial_name">Lathifinda Rosari Mahida</div>
						
								</div>
							</div>
						</div>
						<!-- Testimonials Item -->
						<div class="owl-item">
							<div class="testimonials_item text-center">
								<div class="quote">“</div>
								<p class="testimonials_text">Nama	: Muhammad Ilyas Farhanul Adha</p>
								<p class="testimonials_text">Alamat	: Ponorogo, Indonesia</p>
								<p class="testimonials_text">TTL	: Ponorogo, 29 Januari 2004</p>
								<p class="testimonials_text">Umur	: 15 Tahun</p>
								<p class="testimonials_text">No Telp	: 082338899664</p>
								<p class="testimonials_text">Email	: muhammad_ilyas_27rpl@student.smktelkom-mlg.sch.id</p>
								<div class="testimonial_user">
									<div class="testimonial_image mx-auto">
										<img src="images/27. Muhammad Ilyas Farhanul Huda.jpg" alt="">
									</div>
									<div class="testimonial_name">Muhammad Ilyas Farhanul Adha</div>
									
								</div>
							</div>
						</div>

						<!-- Testimonials Item -->
						<div class="owl-item">
							<div class="testimonials_item text-center">
								<div class="quote">“</div>
								<p class="testimonials_text">Nama	: Viery Athaya Sonilendra</p>
								<p class="testimonials_text">Alamat	: Malang, Indonesia</p>
								<p class="testimonials_text">TTL	: Malang,  2002</p>
								<p class="testimonials_text">Umur	: 17 Tahun</p>
								<p class="testimonials_text">No Telp	: 082399664425</p>
								<p class="testimonials_text">Email	: viery_athaya_27rpl@student.smktelkom-mlg.sch.id</p>
								<div class="testimonial_user">
									<div class="testimonial_image mx-auto">
										<img src="images/35.Vieri Athaya Sonilendra .jpg" alt="">
									</div>
									<div class="testimonial_name">Viery Athaya Sonilendra</div>
									
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>

	</div>
</div>

<!-- Events -->

<div class="events page_section">

<div class="testimonials_background_container prlx_parent">
		<div class="testimonials_background prlx" style="background-image:url(images/bukuuu.jpg)"></div>
	</div>

	<div class="container">
		
		<div class="row">
			<div class="col">
				<div class="section_title text-center">
					<h1>Best Book</h1>
				</div>
			</div>
		</div>
		
		<div class="event_items">

			<!-- Event Item -->
			<div class="row event_item">
				<div class="col">
					<div class="row d-flex flex-row align-items-end">

						<div class="col-lg-2 order-lg-1 order-2">
							<div class="event_date d-flex flex-column align-items-center justify-content-center">
								<div class="event_day">01</div>
								<div class="event_month">2019</div>
								
							</div>
						</div>

						<div class="col-lg-6 order-lg-2 order-3">
							<div class="event_content">
								<div class="event_name"><a class="trans_200" href="#">SI ANAK BADAI</a></div>
								<div class="event_location">Tere Liye</div>
								<br>
								<br>
								<br>
								<p></p>
								
							</div>
						</div>

						<div class="col-lg-4 order-lg-3 order-1">
							<!-- <div class="event_image"> -->
								<img src="images/badai.jpg" width="200px" height="250px" >
							<!-- </div> -->
						</div>

					</div>	
				</div>
			</div>

			<!-- Event Item -->
			<div class="row event_item">
				<div class="col">
					<div class="row d-flex flex-row align-items-end">

						<div class="col-lg-2 order-lg-1 order-2">
							<div class="event_date d-flex flex-column align-items-center justify-content-center">
								<div class="event_day">02</div>
								<div class="event_month">2019</div>
							</div>
						</div>

						<div class="col-lg-6 order-lg-2 order-3">
							<div class="event_content">
								<div class="event_name"><a class="trans_200" href="#">Kata</a></div>
								<div class="event_location">Rintik Sedu</div>
								<br>
								<br>
								<br>
								<br>
							</div>
						</div>

						<div class="col-lg-4 order-lg-3 order-1">
							<!-- <div class="event_image"> -->
								<img src="images/kata.jpg" width="200px" height="250px">
							<!-- </div> -->
						</div>

					</div>	
				</div>
			</div>

			<!-- Event Item -->
			<div class="row event_item">
				<div class="col">
					<div class="row d-flex flex-row align-items-end">

						<div class="col-lg-2 order-lg-1 order-2">
							<div class="event_date d-flex flex-column align-items-center justify-content-center">
								<div class="event_day">03</div>
								<div class="event_month">2014</div>
							</div>
						</div>

						<div class="col-lg-6 order-lg-2 order-3">
							<div class="event_content">
								<div class="event_name"><a class="trans_200" href="#">Mimpi Sejuta Dollar</a></div>
								<div class="event_location">Merry Riana</div>
								<br>
								<br>
								<br>
								<br>
							</div>
						</div>

						<div class="col-lg-4 order-lg-3 order-1">
							<!-- <div class="event_image"> -->
							<img src="images/mimpisejutadollar.jpg" width="200px" height="250px" >
							<!-- </div> -->
						</div>

					</div>	
				</div>
			</div>

		</div>
			
	</div>
</div>



</div>

</body>
</html>