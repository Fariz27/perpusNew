<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="{{asset('images/bookshelf.png')}}" width="97px" height="97px">
					<span>PERPUSKU</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="{{ url('/') }}">home</a></li>
						<li class="main_nav_item"><a href="http://localhost:8000/anggota">Anggota</a></li>
						<li class="main_nav_item"><a href="{{url('buku')}}">Buku</a></li>
						<li class="main_nav_item"><a href="{{url('pinjam')}}">Peminjaman</a></li>
						
						
						
						
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			
			<a href="#" span>LOGIN </a></span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
</body>
</html>