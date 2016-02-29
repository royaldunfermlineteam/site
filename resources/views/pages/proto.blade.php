@extends('templates.app')

@section('content')

<header class="">
	<div class="container">
		<div class="row ">

			<div class="col-sm-4">
				<img src="/images/logo.png" alt="Royal Dunfermline Logo">
			</div>
		</div>
	</div>
	<nav class="Navbar__navbar">
		<div class="Navbar__container">
			<div class="Navbar__navitem">
				<a href="/">Home</a>
			</div>
			<div class="Navbar__navitem">
				<a href="/past">Past</a>
			</div>
			<div class="Navbar__navitem">
				<a href="/present">Present</a>
			</div>
			<div class="Navbar__navitem">
				<a href="/future">Future</a>
			</div>
			<div class="Navbar__navitem">
				<a href="/about">About</a>
			</div>
			<div class="Navbar__navitem">
				<a href="/contact">Contact</a>
			</div>
		</div>
	</nav>
</header>
<div class="container">
	<img class="main_image" src="/images/abbey.jpg">
</div>
<div class="container">

	<div class="row">
		<div class="col-sm-4 Content__panel">
			<h2>Past</h2>
			<img class="img-responsive " src="http://ingridwu.dmmdmcfatter.com/wp-content/uploads/2015/01/placeholder.png" alt="Placeholder">
		</div>
		<div class="col-sm-4 Content__panel">
			<h2>Present</h2>
			<img class="img-responsive " src="http://ingridwu.dmmdmcfatter.com/wp-content/uploads/2015/01/placeholder.png" alt="Placeholder">
		</div>
		<div class="col-sm-4 Content__panel">
			<h2>Future</h2>
			<img class="img-responsive " src="http://ingridwu.dmmdmcfatter.com/wp-content/uploads/2015/01/placeholder.png" alt="Placeholder">
		</div>

	</div>

</div>

<div class="Footer__container">
	<div class="Footer__content">
		<div class="Footer__item">
			<i class="fa fa-3x fa-twitter"></i>
		</div>
		<div class="Footer__item">
			<i class="fa fa-3x fa-facebook"></i>
		</div>
	</div>
</div>
@endsection