@extends('layouts.main')
@section('indexpage')
<style>
    #img_slider .slider_header a{
        color:#570055;
        font-size: 29px;
    }
    section div:nth-child(0) {
        max-width:1920px;
    }

    section #content_main_body {
        /* margin-top:201px; */
        margin-bottom: 41px;
        padding-bottom: 2%;
        background-color: white;
    }
    .main_bg_color{
        background-color:#570055;
    }
    .main_color{
        color: #570055;
    }
    .auto_height{
        min-height: 100px;
        /* overflow: hidden; */
    }
    #left_body{

        /*background-color: lightpink;*/
    }
    #trainer11_logo{
        /* margin-top:-150px */
    }
    #trainer11_logo_title p:nth-child(1){
        font-size: 43px;

    }
    #trainer11_logo_title p:nth-child(2){
        font-size: 19px;
    }
    .border_right{
        border-right: 1px solid #570055;
    }
    .table_f_size{
        font-size: 18px;
    }

    .carousel_item_footer{
      overflow: hidden;
      position: relative;
      bottom: 0px;
      right: 0px;
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
      padding: 2%;
    }
      .carousel_item_footer div{
        padding: 5px;
      }
        .carousel_item_footer div p:nth-child(1){
            font-size: 8px;
        }
        .carousel_item_footer div p:nth-child(2){
            font-size: 6px;
            margin-top: 2%;
            margin-bottom: 1%;
        }
        .carousel_item_footer div p{
            margin: 0px;
        }
    .col-md-1{
        margin-top: 10%;
    }
.test{
    border: 1px solid red;
}
.mr-t{
    margin-top:-10%;
}
</style>


    <section class="container-fluid p-0">
        <div class="row">
         <div class="col-12 plum-bg" style="height:200px;">
        </div>
        <div class="col-md-12 p-0 pb main_color" style="min-width: 100px;">

            <div class="col-md-12 main_color auto_height" id="content_main_body">
                <div class="col-md-4 float-left mr-t" id="left_body">
                    <div class="col text-center">
        @if($user->image == "")
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" class="rounded-circle" alt="Cinque Terre"  width="278" height="278" id="trainer11_logo">
                     @else
                        <img src="{{asset('users/'.$user->image)}}" class="rounded-circle" alt="Cinque Terre"  width="278" height="278" id="trainer11_logo">
        @endif
                    </div>

                    <div class="col text-center mt-3" id="trainer11_logo_title">
                        <p class="mb-0">{{$user->name}}</p>
                        <p>{{$user->experience}} </p>
                    </div>
                    <div class="col text-center table_f_size mt-5" style="min-height: 50px;overflow: hidden;">
                        <div class="col-md-4 text-center border_right float-left p-0">
                            <p>26,843</p>
                            <p>My Students</p>
                        </div>
                        <div class="col-md-4 text-center border_right float-left p-0">
                            <p>{{$course_count}}</p>
                            <p>My course</p>
                        </div>
                        <div class="col-md-4 text-center float-left p-0">
                            <p>{{$user->rating->avg('rating')}} / 5</p>
                            <p>My Rating</p>
                        </div>
                    </div>
                    <div class="col text-center mt-5">
                        <p>
                            {!! $user->about !!}
                        </p>
                    </div>

                    <div class="col text-center mt-2 mb-2 float-left">
                       <a href="{{$user->fb_link}}" target="_blank"><span><i class="fa fa-facebook-square" style="font-size:36px"></i></span></a>
                        <a href="{{$user->in_link}}" target="_blank"> <span><i class="fa fa-linkedin-square ml-3 mr-3" style="font-size:36px"></i></span></a>
                            <a href="{{$user->insta_link}}" target="_blank">  <span><i class="fa fa-instagram mr-3" style="font-size:36px"></i></span></a>
                                <a href="{{$user->twitter_link}}" target="_blank"> <span><i class="fa fa-twitter-square" style="font-size:36px"></i></span></a>
                    </div>
                </div>


                <div class="col-md-8 float-left" id="img_slider">
<!-- block 1 -->
                    <div class="col pt-1" style="min-height: 100px ;overflow: hidden; font-size: 17px;">

                          <div class="slider_header text-center m-2" style="color:#570055;"><a href="#"><u>Discount Courses</u></a>
                          </div>
                        <!--Carousel Wrapper-->
                        <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">

                          <!--/.Indicators-->

                            <div class="col-md-1 controls-top float-left p-0 text-end">
                                <a class="btn-floating" href="#multi-item-example2" style="color: #570055" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                            </div>
                            <!--Slides-->

                            <div class="col-md-10 float-left">
                              <div class="carousel-inner" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active mb-2">

                                  <div class="row">
                                      @foreach($discounted as $discounted)
                                    <div class="col-md-4 newcard">
                                      <div class="card">
                                        <img class="card-img-top" src="{{asset('course/'.$discounted->thumbnail)}}"
                                          alt="Card image cap">
                                        </div>
                                        <div class="col carousel_item_footer main_bg_color" style="color: white">

                                        <div class="col float-left">
                                        <p>{{$discounted->name}}<br>
                                          {{$discounted->description}}</p>
                                        <p class="float-right p-0" style="font-size:10px">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span> 5</span>
                                            <span>(12345)</span>
                                        </p>
                                        </div>
                                      </div>
                                    </div>
                                      @endforeach




                                  </div>

                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item mb-2">

                                  <div class="row">
                                      @foreach($discounted2 as $discounted)
                                          <div class="col-md-4 newcard">
                                              <div class="card">
                                                  <img class="card-img-top" src="{{asset('course/'.$discounted->thumbnail)}}"
                                                       alt="Card image cap">
                                              </div>
                                              <div class="col carousel_item_footer main_bg_color" style="color: white">

                                                  <div class="col float-left">
                                                      <p>{{$discounted->name}}<br>
                                                          {{$discounted->description}}</p>
                                                      <p class="float-right p-0" style="font-size:10px">
                                                          <span class="fa fa-star checked"></span>
                                                          <span class="fa fa-star checked"></span>
                                                          <span class="fa fa-star checked"></span>
                                                          <span class="fa fa-star"></span>
                                                          <span class="fa fa-star"></span>
                                                          <span> 5</span>
                                                          <span>(12345)</span>
                                                      </p>
                                                  </div>
                                              </div>
                                          </div>
                                      @endforeach


                                  </div>

                                </div>
                                <!--/.Second slide-->

                              </div>
                            </div>

                            <div class="controls-top col-md-1 float-left p-0">
                                <a class="btn-floating" href="#multi-item-example2" style="color: #570055" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                            </div>
                          <!--/.Slides-->

                        </div>
                    <!--/.Carousel Wrapper-->
                  </div>
                    <!-- col close -->

<!-- block 2 -->

                    <div class="col" style="min-height: 100px ;overflow: hidden;">
                          <div class="slider_header text-center m-2"><a href="#"><u>Top selling Courses</u></a>
                          </div>
                        <!--Carousel Wrapper-->
                            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                              <!--/.Indicators-->

                                <div class="col-md-1 controls-top float-left p-0 text-end">
                                    <a class="btn-floating" href="#multi-item-example" style="color: #570055" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                </div>
                                <!--Slides-->

                                <div class="col-md-10 float-left">
                                  <div class="carousel-inner" role="listbox">
                                    <!--First slide-->
                                    <div class="carousel-item active mb-2">

                                      <div class="row">

                                          @foreach($top as $discounted)
                                              <div class="col-md-4 newcard">
                                                  <div class="card">
                                                      <img class="card-img-top" src="{{asset('course/'.$discounted->thumbnail)}}"
                                                           alt="Card image cap">
                                                  </div>
                                                  <div class="col carousel_item_footer main_bg_color" style="color: white">

                                                      <div class="col float-left">
                                                          <p>{{$discounted->name}}<br>
                                                              {{$discounted->description}}</p>
                                                          <p class="float-right p-0" style="font-size:10px">
                                                              <span class="fa fa-star checked"></span>
                                                              <span class="fa fa-star checked"></span>
                                                              <span class="fa fa-star checked"></span>
                                                              <span class="fa fa-star"></span>
                                                              <span class="fa fa-star"></span>
                                                              <span> 5</span>
                                                              <span>(12345)</span>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endforeach


                                      </div>

                                    </div>
                                    <!--/.First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item mb-2">

                                      <div class="row">
                                          @foreach($top2 as $discounted)
                                              <div class="col-md-4 newcard">
                                                  <div class="card">
                                                      <img class="card-img-top" src="{{asset('course/'.$discounted->thumbnail)}}"
                                                           alt="Card image cap">
                                                  </div>
                                                  <div class="col carousel_item_footer main_bg_color" style="color: white">

                                                      <div class="col float-left">
                                                          <p>{{$discounted->name}}<br>
                                                              {{$discounted->description}}</p>
                                                          <p class="float-right p-0" style="font-size:10px">
                                                              <span class="fa fa-star checked"></span>
                                                              <span class="fa fa-star checked"></span>
                                                              <span class="fa fa-star checked"></span>
                                                              <span class="fa fa-star"></span>
                                                              <span class="fa fa-star"></span>
                                                              <span> 5</span>
                                                              <span>(12345)</span>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endforeach


                                      </div>

                                    </div>
                                    <!--/.Second slide-->

                                  </div>
                                </div>

                                <div class="controls-top col-md-1 float-left p-0">
                                    <a class="btn-floating" href="#multi-item-example" style="color: #570055" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                              <!--/.Slides-->

                            </div>
                        <!--/.Carousel Wrapper-->
                    </div>
                    <!-- col close -->
<!-- block 3 -->
                    <div class="col" style="min-height: 100px ;overflow: hidden;">
                          <div class="slider_header text-center m-2"><a href="#"><u>Latest Courses</u></a>
                          </div>
                        <!--Carousel Wrapper-->
                            <div id="multi-item-example3" class="carousel slide carousel-multi-item" data-ride="carousel">

                              <!--/.Indicators-->

                                <div class="col-md-1 controls-top float-left p-0 text-end">
                                    <a class="btn-floating" href="#multi-item-example3" style="color: #570055" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                </div>
                                <!--Slides-->

                                <div class="col-md-10 float-left">
                                  <div class="carousel-inner" role="listbox">
                                    <!--First slide-->
                                    <div class="carousel-item active mb-2">

                                      <div class="row">
                                          @foreach($latest as $discounted)
                                              <div class="col-md-4 newcard">
                                                  <div class="card">
                                                      <img class="card-img-top" src="{{asset('course/'.$discounted->thumbnail)}}"
                                                           alt="Card image cap">
                                                  </div>
                                                  <div class="col carousel_item_footer main_bg_color" style="color: white">

                                                      <div class="col float-left">
                                                          <p>{{$discounted->name}}<br>
                                                              {{$discounted->description}}</p>
                                                          <p class="float-right p-0" style="font-size:10px">
                                                              <span class="fa fa-star checked"></span>
                                                              <span class="fa fa-star checked"></span>
                                                              <span class="fa fa-star checked"></span>
                                                              <span class="fa fa-star"></span>
                                                              <span class="fa fa-star"></span>
                                                              <span> 5</span>
                                                              <span>(12345)</span>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endforeach

                                      </div>

                                    </div>
                                    <!--/.First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item mb-2">

                                      <div class="row">
                                          @foreach($latest2 as $discounted)
                                              <div class="col-md-4 newcard">
                                                  <div class="card">
                                                      <img class="card-img-top" src="{{asset('course/'.$discounted->thumbnail)}}"
                                                           alt="Card image cap">
                                                  </div>
                                                  <div class="col carousel_item_footer main_bg_color" style="color: white">

                                                      <div class="col float-left">
                                                          <p>{{$discounted->name}}<br>
                                                              {{$discounted->description}}</p>
                                                          <p class="float-right p-0" style="font-size:10px">
                                                              <span class="fa fa-star checked"></span>
                                                              <span class="fa fa-star checked"></span>
                                                              <span class="fa fa-star checked"></span>
                                                              <span class="fa fa-star"></span>
                                                              <span class="fa fa-star"></span>
                                                              <span> 5</span>
                                                              <span>(12345)</span>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endforeach

                                      </div>

                                    </div>
                                    <!--/.Second slide-->

                                  </div>
                                </div>

                                <div class="controls-top col-md-1 float-left p-0">
                                    <a class="btn-floating" href="#multi-item-example3" style="color: #570055" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                              <!--/.Slides-->

                            </div>
                        <!--/.Carousel Wrapper-->
                    </div>
                    <!-- col close -->

                    <!-- slide close -->
                </div>

            </div>
        </div>
        <div class="col-12 plum-bg mt-3" style="height:50px;">
        </div>
    </section>
@endsection
    <!-- Latter Subscription End -->
