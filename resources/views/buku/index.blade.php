@extends('template1')
@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>BUKU</title>
</head>
<body>
<div class="super_container">

	
	
<!-- Menu -->
<div class="menu_container menu_mm">

	<!-- Menu Close Button -->
	<div class="menu_close_container">
		<div class="menu_close"></div>
	</div>

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




<!-- Events -->

<div class="events page_section">

<div class="testimonials_background_container prlx_parent">
		<div class="testimonials_background prlx" style="background-image:url(images/bukuuu.jpg)"></div>
	</div>

	<div class="container"> 
      <section class="masthead text-dark bg-light text-center" id="buku">
        
        <h2>Daftar Buku</h2>
        <div class="divider-custom divider-dark">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>    
        @if (!empty($buku_list))
        
          <table class="table lead text-center text-dark ">
          <thead>
            <tr>
              <th>Image</th>
              <th>Judul</th>
              <th>Genre</th>
              <th>Stok</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>


            @foreach($buku_list as $buku)
            
              <tr>
                <td><img src="{{asset('images/'.$buku->image)}}" class="rounded-circle" alt="img" width="69px" height="69px"></td>
                <td>{{ $buku->tittle }}</td>
                <td>{{ $buku->genre }}</td>
                <td>{{ $buku->stock }}</td>
                <td><a class="btn btn-success btn-sm" href="{{ url('detail/buku/' . $buku->id) }}">Detail</a>
                <a class="btn btn-warning btn-sm" href="{{ url('edit/buku/' . $buku->id) }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="{{ url('delete/buku/' . $buku->id) }}" onclick="confirm('Are you sure you want to delete this?')">Delete</a></td>
              </tr>
            
            @endforeach
          </tbody>
        </table>
        @else   
            <p>Tidak ada data buku</p>
        @endif

        <br>
        <a href="{{ url('create/buku ' ) }}" class="btn btn-outline-dark btn-xl"> + Tambah Buku</a>

    </section>
  
	</div>
</div>



</div>

</body>
</html>