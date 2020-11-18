@extends('templates.index')
@section('main')
    <!--/main-->
    <section class="main-content-w3layouts-agileits">
        <div class="container">
            <h3 class="tittle">Sign In Now</h3>
            <div class="row inner-sec">
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
                    @if(session('error'))
                            <div class="alert alert-danger">
                        <i> {{session('error')}}</i>
                            </div>
                    @endif

                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1 mb-2">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="" required="">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1 mb-2">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="" required="">
                        </div>
                        <div class="form-check mb-2">
                            <input name="savePassword" type="checkbox" class="form-check-input" id="exampleCheck1">
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
