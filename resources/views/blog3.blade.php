@extends('templates.index')
@section('main')
<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">Blog Posts</h3>
			<div class="inner-sec">
				<!--left-->
				<div class="left-blog-info-w3layouts-agileits text-left">
					<div class="row">
						<div class="col-lg-4 card">
							<a href="{{route('single')}}">
								<img src="{{asset('images/7.jpg')}}" class="card-img-top img-fluid" alt="">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> Feb 20 .2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>

								</ul>
								<h5 class="card-title">
									<a href="{{route('single')}}">Blog Post Title</a>
								</h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<div class="col-lg-4 card">
							<a href="{{route('single')}}">
								<img src="{{asset('images/6.jpg')}}" class="card-img-top img-fluid" alt="">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> Feb 22 .2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>

								</ul>
								<h5 class="card-title ">
									<a href="{{route('single')}}">Blog Post Title</a>
								</h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<div class="col-lg-4 card">
							<a href="{{route('single')}}">
								<img src="{{asset('images/2.jpg')}}" class="card-img-top img-fluid" alt="">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> Feb 23 .2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>

								</ul>
								<h5 class="card-title ">
									<a href="{{route('single')}}">Blog Post Title</a>
								</h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<div class="col-lg-4 card my-lg-4 my-md-1 my-0">
							<a href="{{route('single')}}">
								<img src="{{asset('images/5.jpg')}}" class="card-img-top img-fluid" alt="">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> Mar 20 .2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>

								</ul>
								<h5 class="card-title">
									<a href="{{route('single')}}">Blog Post Title</a>
								</h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<div class="col-lg-4 card my-4">
							<a href="{{route('single')}}">
								<img src="{{asset('images/4.jpg')}}" class="card-img-top img-fluid" alt="">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> Mar 25 .2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>

								</ul>
								<h5 class="card-title ">
									<a href="{{route('single')}}">Blog Post Title</a>
								</h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<div class="col-lg-4 card my-lg-4 my-md-1 my-0">
							<a href="{{route('single')}}">
								<img src="{{asset('images/3.jpg')}}" class="card-img-top img-fluid" alt="">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> Feb 30 .2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>

								</ul>
								<h5 class="card-title ">
									<a href="{{route('single')}}">Blog Post Title</a>
								</h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<div class="col-lg-4 card">
							<a href="{{route('single')}}">
								<img src="{{asset('images/1.jpg')}}" class="card-img-top img-fluid" alt="">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> Mar 31 .2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>

								</ul>
								<h5 class="card-title ">
									<a href="{{route('single')}}">Blog Post Title</a>
								</h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<div class="col-lg-4 card">
							<a href="{{route('single')}}">
								<img src="{{asset('images/6.jpg')}}" class="card-img-top img-fluid" alt="">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> Apr 01 .2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>

								</ul>
								<h5 class="card-title ">
									<a href="{{route('single')}}">Blog Post Title</a>
								</h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<div class="col-lg-4 card">
								<a href="{{route('single')}}">
									<img src="{{asset('images/8.jpg')}}" class="card-img-top img-fluid" alt="">
								</a>
								<div class="card-body">
									<ul class="blog-icons my-4">
										<li>
											<a href="#">
												<i class="far fa-calendar-alt"></i> Apr 01 .2018</a>
										</li>
										<li class="mx-2">
											<a href="#">
												<i class="far fa-comment"></i> 21</a>
										</li>
										<li>
											<a href="#">
												<i class="fas fa-eye"></i> 2000</a>
										</li>

									</ul>
									<h5 class="card-title ">
										<a href="{{route('single')}}">Blog Post Title</a>
									</h5>
									<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
									<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
								</div>
							</div>
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-left mt-4">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1">Previous</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">1</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">2</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">3</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav>
					</div>
					<!--//left-->
				</div>
			</div>
		</div>
	</section>
	<!--//main-->
@endsection

@section('under')
	<!-- //js -->
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
