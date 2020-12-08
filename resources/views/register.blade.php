@extends('templates.index')
@section('main')
    <!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">Register Now</h3>
				<div class="inner-sec">
			<div class="login p-5 bg-light mx-auto mw-100">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

				<form action="{{route('register')}}" method="post">
                    @csrf
						<div class="form-row">
								<div class="col-md-6 mb-3">
										<label for="validationCustom01">First name</label>

									<input name="firstname" type="text" class="form-control" id="validationDefault01" placeholder="" required="">
								</div>
								<div class="col-md-6 mb-3">
										<label for="validationCustom02">Last name</label>
									<input name="lastname" type="text" class="form-control" id="validationDefault02" placeholder="" required="">
								</div>
							</div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">E-Mail</label>
                            <input name="email" type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                        </div>
                    </div>

							<div class="form-row">
								<div class="form-group col-md-6">
										<label for="exampleInputPassword1 mb-2">Password</label>
									<input name="password" type="password" class="form-control" id="password1" placeholder="" required="">
								</div>
								<div class="form-group col-md-6">
										<label for="exampleInputPassword2 mb-2">Confirm Password</label>
										<input name="password_confirmation" type="password" class="form-control" id="password2" placeholder="" required="">
									</div>

							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Register</button>
								<p>
									<a href="#">By clicking Register, I agree to your terms</a>
								</p>
				</form>
				<button onclick="generate()">Генерировать</button>

				<script>
					function rand(min, max) {
						return Math.floor(Math.random() * (max - min + 1)) + min; //Максимум и минимум включаются
					}

					const leaters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
					let inputs = document.querySelectorAll('input[placeholder]');
					function generate() {
						let word = "";
						for (let i=0; i<10; i++) {
							word += leaters[rand(0,52)];
						}
						word += "@mail.ru";
						inputs.forEach(input => {
							input.value = word;
						})
					}
				</script>
			</div>
			</div>
		</div>
	</section>
	<!--//main-->
@endsection

@section('under')
	<!-- //js -->
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

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
