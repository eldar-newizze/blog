@extends('templates.index')
@section('main')
	<!--/banner-->
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
						<h3>Create the lifestyle
							<span>you desire</span>
						</h3>
						<div class="read">
							<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>Engaging Purposeful
							<span>and Creative</span>
						</h3>
						<div class="read">
							<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
						<h3>Create the lifestyle
							<span>you desire</span>
						</h3>
						<div class="read">
							<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption">
						<h3>Engaging Purposeful
							<span>and Creative</span>
						</h3>
						<div class="read">
							<a href="{{route('single')}}" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--/model-->
	<!---->
    <section class="main-content-w3layouts-agileits">
        <div class="container">
            <h3 class="tittle">Blog Posts</h3>
            <div class="inner-sec">
                <!--left-->
                <div class="left-blog-info-w3layouts-agileits text-left">
                    <div class="row">
                        @auth
                        <div class="col-12">
                            <form action="{{route('post.store')}}" method="post"  enctype="multipart/form-data" class="bg-light p-2">
                                @csrf
                                <div class="form-group">
                                    <label for="postTitle">Title</label>
                                    <input type="text" class="form-control" id="postTitle" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="postDescription">Text</label>
                                    <textarea class="form-control" id="postDescription" rows="3" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Image</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                </div>
                                <input type="submit" value="Write" class="btn btn-dark">
                            </form>
                            <hr class="mt-5 mb-5">
                        </div>
                        @endauth
                            @foreach($posts as $post)
                                <div class="col-lg-4 card">
                                    <a href="post/{{$post->id}}">
                                        <img src="{{asset('storage/'.$post->image)}}" class="card-img-top img-fluid" alt="">
                                    </a>
                                    <div class="card-body">
                                        <ul class="blog-icons my-4">
                                            <li>
                                                <a href="#">
                                                    <sub><i class="far fa-calendar-alt"></i>{{$post->created_at}}</sub></a>
                                            </li>
                                            <li class="mx-2">
                                                <a href="#">
                                                    <i class="far fa-comment"></i>0</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-eye"></i>{{$post->looks}}</a>
                                            </li>
                                            @auth
                                            @if(Auth::user()->id == $post->user_id)
                                            <li>
                                                <form action="post/{{$post->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="border: none; background-color: white">
                                                        <i class="fas fa-trash"></i>
                                                    </button>

                                                </form>
                                            </li>
                                            @endif
                                            @endauth
                                        </ul>
                                        <h5 class="card-title">
                                            <a href="post/{{$post->id}}">{{$post->title}}</a>
                                        </h5>
                                        <p class="card-text mb-3">{{$post->description}}</p>
                                        <a href="post/{{$post->id}}" class="btn btn-primary read-m">Read More</a>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-12">
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
	<!-- desoslide-JavaScript -->
	<script src="{{asset('js/jquery.desoslide.js')}}"></script>

	<!-- requried-jsfiles-for owl -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo2").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<script src="{{asset('js/jquery.flexisel.js')}}"></script>
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

									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear'
							 		};


			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
@endsection
