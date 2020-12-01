@extends('templates.index')
@section('main')
    @if($errors->any())
        <h4>{{$errors->first()}}</h4>
    @endif

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
                        <h4 class="mb-3">Comments</h4>
                        @foreach($comments as $comment)
                            <div class="media mb-4 alert alert-dark">
                                <div class="media-body">
                                    <h5 class="mt-0">{{$comment->user->name}}</h5>
                                    <p>{{$comment->message}}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    @auth
                        <div class="comment-top">
                            <h4 style="margin: 2vh 0">Leave a Comment</h4>
                            <div class="comment-bottom">
                                <form action="{{route('comment.store')}}" method="post">
                                    @csrf
                                    <textarea class="form-control" name="message" placeholder="Message..."
                                              required=""></textarea>
                                    <button type="submit" class="btn btn-primary submit mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{route('login')}}"><h4 class="alert-link">You should sign in if you want to write your
                                own comments</h4></a>
                    @endauth

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
