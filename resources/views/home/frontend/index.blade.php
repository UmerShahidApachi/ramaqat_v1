@extends('layouts.main')
@section('indexpage')
<div class="plum-bg pt-3 pb-3">
    <div class="container">
        <ul class="ulDBlock-top">
            <li>
                <i class="fadeIn fa fa-youtube-play"></i>
                <div class="font16 white-text">All</div>
            </li>
            @foreach($categories as $cat)
            <li>
                <img class='fadeIn' src="{{asset('category/'. $cat->image)}}"></img>
                <div class="font16 white-text">{{$cat->name}}</div>
            </li>
            @endforeach

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
        @foreach($slider as $s)
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="{{asset('slider/'.$s->image)}}" alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive font45">{{$s->title}}</h3>
                <p class="font35">{{$s->heading}}</p>
            </div>
        </div>
        @endforeach
{{--        <div class="carousel-item">--}}
{{--            <!--Mask color-->--}}
{{--            <div class="view">--}}
{{--                <img class="d-block w-100" src="{{asset('assets/frontend/img/slider-11.png')}}" alt="Second slide">--}}
{{--                <div class="mask rgba-black-strong"></div>--}}
{{--            </div>--}}
{{--            <div class="carousel-caption">--}}
{{--                <h3 class="h3-responsive font45">Strong mask</h3>--}}
{{--                <p class="font35">Secondary text</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <!--Mask color-->--}}
{{--            <div class="view">--}}
{{--                <img class="d-block w-100" src="{{asset('assets/frontend/img/slider-11.png')}}" alt="Third slide">--}}
{{--                <div class="mask rgba-black-slight"></div>--}}
{{--            </div>--}}
{{--            <div class="carousel-caption">--}}
{{--                <h3 class="h3-responsive font45">Slight mask</h3>--}}
{{--                <p class="font35">Third text</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
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
<div class="plum-bg">
<div class="container over-view-box">
 <div class="row text-center">
   <div class="col-12 col-sm-4 text-center over-view">
      <div><img src="{{asset('assets/frontend/img/customer.png')}}"></div>
      <div class="ml-3">
      <span class="font-23"><b>100,000 online courses</b></span><br>
      <span>Explore a veriety of fresh topics</span>
      </div>
   </div>
   <div class="col-12 col-sm-4 text-center over-view">
      <img src="{{asset('assets/frontend/img/instructions.png')}}">
      <div class="ml-3">
      <span class="font-23"><b>Expert instruction</b></span><br>
      <span>Find the right instructor for you</span>
      </div>
   </div>
   <div class="col-12 col-sm-4 text-center over-view">
      <img src="{{asset('assets/frontend/img/timeaccess.png')}}">
      <div class="ml-3">
      <span class="font-23"><b>Lifetime access</b></span><br>
      <span>Learn on your schedule</span>
      </div>
   </div>
 </div>
</div>
</div>

<div class="heading mt-3">Latest Videos</div>
<div class="container mt-3 mb-3">
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
    <div class="col-12 col-sm-10 offset-md-1 mt-5">
        <div class="row text-center">
            <div class="col-12 col-sm-9 pt-5 text-right">
                <div class="plum-text font36">اشكرك أ.دانة عالطرح الرائع حقيقة استفدت من كلامك كثير واتمنى لو احضر</div>
                <div class="plum-text font36">عندك دورة مباشرة احس راح تضيفين لي الكثييير</div>
                <div class="social">
                    <ul class="tranee-social">
                        <li>
                            <a href="#"><img src="{{asset('assets/frontend/img/twitter.png')}}"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('assets/frontend/img/facebook.png')}}"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('assets/frontend/img/instagram-sketched.png')}}"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('assets/frontend/img/linkedin.png')}}"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-3">
                <div class="trainee-img">
                <img class="rounded-circle img-fluid" src="{{asset('assets/frontend/img/Mask Group 1.png')}}">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Description -->
<div class="heading mt-3">Courses Cetagories</div>
<div class="container mt-3 mb-3">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
      aria-selected="true">Accountancy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
      aria-selected="false">Art</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
      aria-selected="false">Cooking</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <div class="mt-3 mb-3">
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
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="mt-3 mb-3">
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
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <div class="mt-3 mb-3">
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
  </div>
</div>
</div>
<!--Description-->

<!-- Student Comment Section -->
<div class="heading mt-5">Student Feedback</div>
<div class="container mt-3 mb-3">
    <div class="carousel slide multi-item-carousel" id="theCarousel">
        <div class="carousel-inner row mx-auto">
            <div class="carousel-item active col-md-4 mb-5">
                <div class="student-box shadow-sm bg-white rounded">
                <div class="d-flex">
                     <div class="student-img">
                         <img class="img-fluid rounded-circle" src="{{asset('assets/frontend/img/Mask Group 1.png')}}">
                     </div>
                     <div class="stu-name">Abcom</div>
                 </div>
                 <div class="stu-description">
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                 </div>
                </div>
            </div>
            <div class="carousel-item active col-md-4 mb-5">
                <div class="student-box shadow-sm bg-white rounded">
                <div class="d-flex">
                     <div class="student-img">
                         <img class="img-fluid rounded-circle" src="{{asset('assets/frontend/img/Mask Group 1.png')}}">
                     </div>
                     <div class="stu-name">Abcom</div>
                 </div>
                 <div class="stu-description">
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                 </div>
                </div>
            </div>
            <div class="carousel-item active col-md-4 mb-5">
                <div class="student-box shadow-sm bg-white rounded">
                <div class="d-flex">
                     <div class="student-img">
                         <img class="img-fluid rounded-circle" src="{{asset('assets/frontend/img/Mask Group 1.png')}}">
                     </div>
                     <div class="stu-name">Abcom</div>
                 </div>
                 <div class="stu-description">
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                 </div>
                </div>
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
<!-- End -->

<!-- Books Reading Section -->
<div class="book-sec">
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 text-center">
         <h4><b>Become an instructor</b></h4>
         <p>Top instructors from around the world teach millions of students on Udemy. We provide the tools and skills to teach what you love.</p>
         <button class="btn plum-btn waves-effect waves-light">Start teching today</button>
        </div>
        <div class="col-12 col-sm-6 text-center">
        <h4><b>Become an Student</b></h4>
         <p>Top instructors from around the world teach millions of students on Udemy. We provide the tools and skills to teach what you love.</p>
         <button class="btn plum-btn waves-effect waves-light">Start learning today</button>
        </div>
    </div>
</div>
</div>
<!-- End -->
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
