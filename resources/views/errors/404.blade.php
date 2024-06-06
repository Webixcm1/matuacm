@extends('layouts.main')

@section('title')
    Error 404
@endsection

@section('content')
<section>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-10 text-center mx-auto">
				<!-- Image -->
				<img src="{{ asset('assets/images/element/error.svg') }}" class="h-lg-500px mb-4" alt="">
				<!-- Title -->
				<h1 class="display-1 text-primary mb-0">404</h1>
				<!-- Subtitle -->
				<h2>Oh no, something went wrong!</h2>
				<!-- info -->
				<p class="mb-4">Either something went wrong or this page doesn't exist anymore.</p>
				<!-- Button -->
				<a href="{{ route('index') }}" class="btn btn-dark mb-0">Accueil</a>
			</div>
		</div>
	</div>
</section>
@endsection