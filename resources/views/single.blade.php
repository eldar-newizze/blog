@extends('templates.index')
@section('main')
	<section class="banner-bottom">
		<!--/blog-->
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="{{route('single')}}">
									<img src="{{asset('storage/'.$post->image)}}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i>{{$post->created_at}}</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="fas fa-eye"></i> {{$post->looks}} Looks</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-comment"></i> 0 comments</a>
									</li>

								</ul>
							</div>
						</div>

						<h3>
							{{$post->title}}
						</h3>
						<p>{{$post->description}}</p>
					</div>

					<div class="comment-top">
						<h4>Comments</h4>
						<div class="media">
							<img src="{{asset('images/t1.jpg')}}" alt="" class="img-fluid" />
							<div class="media-body">
								<h5 class="mt-0">Joseph Goh</h5>
								<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros.
									Cras a ornare elit.</p>

								<div class="media mt-3">
									<a class="d-flex pr-3" href="#">
										<img src="{{asset('images/t2.jpg')}}" alt="" class="img-fluid" />
									</a>
									<div class="media-body">
										<h5 class="mt-0">Richard Spark</h5>
										<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros.
											Cras a ornare elit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="comment-top">
						<h4>Leave a Comment</h4>
						<div class="comment-bottom">
							<form action="#" method="post">
								<input class="form-control" type="text" name="Name" placeholder="Name" required="">
								<input class="form-control" type="email" name="Email" placeholder="Email" required="">

								<input class="form-control" type="text" name="Subject" placeholder="Subject" required="">

								<textarea class="form-control" name="Message" placeholder="Message..." required=""></textarea>
								<button type="submit" class="btn btn-primary submit">Submit</button>
							</form>
						</div>
					</div>
				</div>

				<!--//left-->
				<!--right-->

				<!--//right-->
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
