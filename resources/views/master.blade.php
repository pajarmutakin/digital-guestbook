<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
	<title>DIGITAL GUEST BOOK</title>

	<style>
        body {
            background-image: url('image/bg.png'); /* Sesuaikan dengan path dan nama gambar Anda */
            background-size: cover; /* Untuk memastikan gambar mencakup seluruh background */
            backdrop-filter: blur(5px);
        }
    </style>

    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5gXDEK7l5IepCk68f/LtTl3UAd9eR5uFfC2gTVFhT6jEam72bI2t5I1+1d8b" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-cg6HT3qioJkn4pqQ3hPj9c5Ive8VpLbKaIHaA2z/A4eX5XjYwIoSMw+DP5Jef4Z5" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>

<body>
    <div class="container">
		<div class="card"> 	
        <div class="card-body">
	
		<h2 class="text-center font-weight-bold">MY GUESTBOOK</h2>
		<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
			<div class="container">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="/create">CREATE</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/read">READ</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	
    
	<br/>
	<br/>
  
 
 
	<!-- bagian konten blog -->
	@yield('konten')
		</div>
		</div>
 
	

	<footer>
		<p ></p>
	</footer>
	</div>
	<br/>
	<br/>
</body>
</html>