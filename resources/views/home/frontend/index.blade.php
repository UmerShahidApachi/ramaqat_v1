@extends('layouts.main')
@section('indexpage')
<div class="plum-bg pt-3 pb-3">
    <div class="container">
        <ul class="ulDBlock-top">
            <li>
                <i class="fadeIn fa fa-youtube-play"></i>
                <div class="font16 white-text">All</div>
            </li>
            <li>
                <i class='fadeIn fa fa-calculator'></i>
                <div class="font16 white-text">Accountancy</div>
            </li>
            <li>
                <i class='fadeIn fa fa-area-chart'></i>
                <div class="font16 white-text">Art</div>
            </li>
            <li>
                <i class='fadeIn fa fa-cc-amex'></i>
                <div class="font16 white-text">Cooking</div>
            </li>
            <li>
                <a href="{{ route('online-course') }}"><i class="fadeIn fa fa-graduation-cap"></i></a>
                <div class="font16 white-text">Educational</div>
            </li>
            <li>
                <i class='fadeIn fa fa-balance-scale'></i>
                <div class="font16 white-text">Finance</div>
            </li>
            <li>
                <i class='fadeIn fa fa-photo'></i>
                <div class="font16 white-text">Graphic design</div>
            </li>
            <li>
                <i class='fadeIn fa fa-medkit'></i>
                <div class="font16 white-text">Health</div>
            </li>
            <li>
                <i class='fadeIn fa fa-sitemap'></i>
                <div class="font16 white-text">Interior design</div>
            </li>
            <li>
                <i class="fadeIn fa fa-desktop"></i>
                <div class="font16 white-text">IT and Tech</div>
            </li>
            <li>
                <i class="fadeIn fa fa-language"></i>
                <div class="font16 white-text">language</div>
            </li>

        </ul>
    </div>
</div>
<!-- Services Section End Here -->
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators custum-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="{{asset('assets/frontend/img/slider-11.png')}}" alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive font45">Light mask</h3>
                <p class="font35">First text</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="{{asset('assets/frontend/img/slider-11.png')}}" alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive font45">Strong mask</h3>
                <p class="font35">Secondary text</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="{{asset('assets/frontend/img/slider-11.png')}}" alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive font45">Slight mask</h3>
                <p class="font35">Third text</p>
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->


<div class="container mt-5 mb-5">
    <div class="carousel slide multi-item-carousel" id="theCarousel">
        <div class="carousel-inner row w-100 mx-auto">
            <div class="carousel-item active col-md-4">
                <a href="#"><img class="zoom" src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block"></a>
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
        </div>
        <a class="carousel-control-prev" href="#theCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#theCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- Product Slider End -->
<div>
    <div class="col-12 col-sm-10 offset-md-1">
        <div class="row text-center">
            <div class="col-12 col-sm-7 pt-5">
                <div class="plum-text font36">اشكرك أ.دانة عالطرح الرائع حقيقة استفدت من كلامك كثير واتمنى لو احضر</div>
                <div class="plum-text font36">عندك دورة مباشرة احس راح تضيفين لي الكثييير</div>
            </div>
            <div class="col-12 col-sm-5">
                <img src="{{asset('assets/frontend/img/Mask Group 1.png')}}">
            </div>
        </div>
    </div>
</div>
<!-- Description -->
<div class="flex-center mb-1 mt-1">
    <u><a class="Socialb plum-text" href="#">Social Buldle</a></u>
</div>
<div class="container mt-5 mb-5">
    <div class="carousel slide multi-item-carousel" id="theCarousel">
        <div class="carousel-inner row w-100 mx-auto">
            <div class="carousel-item active col-md-4">
                <a href="#"><img class="zoom" src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block"></a>
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="carousel-item col-md-4">
                <img src="{{asset('assets/frontend/img/multislider-1.png')}}" class="img-fluid mx-auto d-block">
            </div>
        </div>
        <a class="carousel-control-prev" href="#theCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#theCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!--Description-->

<div class="plum-bg">
    <div class="col-12 col-sm-10 offset-md-1" style="padding: 40px 15px;line-height: 1;">
        <div class="row">
            <div class="col-12 col-sm-6">
                <!-- <div class="mb-1 white-text">Sign up to receive our weekly newsletter</div> -->
                <div class="white-text">Stay uploaded on all new online and offline training courses</div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="Subscription">
                    <input class="SubInput z-depth-1" type="text" placeholder="Enter your email"><span class="SubBtn"><a
                            href="#">Subscribe</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="to-top" title="back to top">↑</div>
@endsection
<!-- Latter Subscription End -->
