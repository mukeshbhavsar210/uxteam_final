<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<title>{{ $title ?? 'Page Title' }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">  
    @livewireStyles

</head>
<body> 
	
	<div class="container">
	<header>
		<ul>
			<li><a wire:navigate href="{{ route('home') }}">Home</a></li>
			<li><a wire:navigate href="{{ route('works') }}">Works</a></li>
			<li><a wire:navigate href="{{ route('services') }}">Services</a></li>
			<li><a wire:navigate href="{{ route('blog') }}">Blog</a></li>
			<li><a wire:navigate href="{{ route('events') }}">Events</a></li>
		</ul>
	</header>

	
		{{ $slot }}
	</div>

@livewireScripts

</body>
</html>