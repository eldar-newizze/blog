@extends('templates.index')
@section('main')
    <!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
				<h3 class="tittle">Sign In Now</h3>
				<div class="row inner-sec">
					<div class="login p-5 bg-light mx-auto mw-100">
					<form action="#" method="post">
							<div class="form-group">
							  <label for="exampleInputEmail1 mb-2">Email address</label>
							  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
							  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1 mb-2">Password</label>
							  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
							</div>
							<div class="form-check mb-2">
							  <input type="checkbox" class="form-check-input" id="exampleCheck1">
							  <label class="form-check-label" for="exampleCheck1">Check me out</label>
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
							<p><a href="{{route('register')}}"> Don't have an account?</a></p>
						  </form>
		</div>
		</div>
	</div>
	</section>
	<!--//main-->
@endsection

@section('under')
	<!--/ start-smoth-scrolling -->
    <script src="{{asset('js/move-top.js')}}"></script>
    <script src="{{asset('js/easing.js')}}"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
@endsection
