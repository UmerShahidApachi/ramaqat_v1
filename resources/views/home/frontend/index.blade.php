@extends('layouts.main')

@section('indexpage')
    <style>
        #img_slider .slider_header a {
            color: #570055;
            font-size: 29px;
        }

        section div:nth-child(0) {
            max-width: 1920px;
        }

        section #content_main_body {
            /* margin-top:201px; */
            margin-bottom: 41px;
            padding-bottom: 2%;
            background-color: white;
        }


        .main_color {
            color: #570055;
        }

        .auto_height {
            min-height: 100px;
            /* overflow: hidden; */
        }

        #left_body {

            /*background-color: lightpink;*/
        }

        #trainer11_logo {
            /* margin-top:-150px */
        }

        #trainer11_logo_title p:nth-child(1) {
            font-size: 43px;

        }

        #trainer11_logo_title p:nth-child(2) {
            font-size: 19px;
        }

        .border_right {
            border-right: 1px solid #570055;
        }

        .table_f_size {
            font-size: 18px;
        }

        .carousel_item_footer {
            overflow: hidden;
            position: relative;
            bottom: 0px;
            right: 0px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            padding: 2%;
        }

        .carousel_item_footer div {
            padding: 5px;
        }

        .carousel_item_footer div p:nth-child(1) {
            font-size: 14px;
        }

        .carousel_item_footer div p:nth-child(2) {
            font-size: 10px;
            margin-top: 2%;
            margin-bottom: 1%;
        }

        .carousel_item_footer div p {
            margin: 0px;
        }


        .hr_home {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }
         /* basic slider style */

#mixedSlider {
  position: relative;
}
#mixedSlider .MS-content {
  white-space: nowrap;
  overflow: hidden;
  margin: 0 5%;
}
#mixedSlider .MS-content .item {
  display: inline-block;
  width: 33.3333%;
  position: relative;
  vertical-align: top;
  overflow: hidden;
  height: 100%;
  white-space: normal;
  padding: 0 10px;
}
@media (max-width: 991px) {
  #mixedSlider .MS-content .item {
    width: 50%;
  }
}
@media (max-width: 767px) {
  #mixedSlider .MS-content .item {
    width: 100%;
  }
}
#mixedSlider .MS-content .item .imgTitle {
  position: relative;
}
#mixedSlider .MS-content .item .imgTitle .blogTitle {
  margin: 0;
  text-align: left;
  letter-spacing: 2px;
  color: #252525;
  font-style: italic;
  position: absolute;
  background-color: rgba(255, 255, 255, 0.5);
  width: 100%;
  bottom: 0;
  font-weight: bold;
  padding: 0 0 2px 10px;
}
#mixedSlider .MS-content .item .imgTitle img {
  height: auto;
  width: 100%;
}
#mixedSlider .MS-content .item p {
  font-size: 16px;
  margin: 2px 10px 0 5px;
  text-indent: 15px;
}
#mixedSlider .MS-content .item a {
  float: right;
  margin: 0 20px 0 0;
  font-size: 16px;
  font-style: italic;
  color: rgba(173, 0, 0, 0.82);
  font-weight: bold;
  letter-spacing: 1px;
  transition: linear 0.1s;
}
#mixedSlider .MS-content .item a:hover {
  text-shadow: 0 0 1px grey;
}
#mixedSlider .MS-controls button {
  position: absolute;
  border: none;
  background-color: transparent;
  outline: 0;
  font-size: 50px;
  top: 95px;
  color: rgba(0, 0, 0, 0.4);
  transition: 0.15s linear;
}
#mixedSlider .MS-controls button:hover {
  color: rgba(0, 0, 0, 0.8);
}
@media (max-width: 992px) {
  #mixedSlider .MS-controls button {
    font-size: 30px;
  }
}
@media (max-width: 767px) {
  #mixedSlider .MS-controls button {
    font-size: 20px;
  }
}
#mixedSlider .MS-controls .MS-left {
  left: 0px;
}
@media (max-width: 767px) {
  #mixedSlider .MS-controls .MS-left {
    left: -10px;
  }
}
#mixedSlider .MS-controls .MS-right {
  right: 0px;
}
@media (max-width: 767px) {
  #mixedSlider .MS-controls .MS-right {
    right: -10px;
  }
}
#basicSlider { position: relative; }

#basicSlider .MS-content {
  white-space: nowrap;
  overflow: hidden;
  margin: 0 2%;
  padding-top:1%;

}

#basicSlider .MS-content .item {
  display: inline-block;
  width: 12%;
  position: relative;
  vertical-align: top;
  overflow: hidden;
  height: 100%;
  white-space: normal;
  line-height: 30px;
  vertical-align: middle;
}
@media (max-width: 991px) {

#basicSlider .MS-content .item { width: 25%; }
}
@media (max-width: 767px) {

#basicSlider .MS-content .item { width: 35%; }
}
@media (max-width: 500px) {

#basicSlider .MS-content .item {
    width: 25%;
}

}

#basicSlider .MS-content .item a {
  line-height: 50px;
  vertical-align: middle;
}

#basicSlider .MS-controls button { position: absolute; }

#basicSlider .MS-controls .MS-left {
  top: 35px;
  left: 10px;
  background: transparent;
  border: none;
  outline: none;
  color: lightgray;
  font-size: 30px;
  font-weight: 400 !important;
}

#basicSlider .MS-controls .MS-right {
  top: 35px;
  right: 10px;
  background: transparent;
  border: none;
  outline: none;
  color: lightgray;
  font-size: 30px;
  font-weight: 400 !important;
}

/* custom-css-start */
.newcard {
    border-bottom-width: 3px;
    border-radius: 0.8rem;
    border: 1px solid #e9ecef;
    padding: .3rem;
    margin-top: 3px;
    /*transition: all ease-in-out .2s;*/
}
.newcard .card {
  border-radius: 0.6rem;
}
.newcard img {
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  overflow: hidden;
}
.newcard:hover  {
    overflow: hidden;
    -webkit-transform: scale(1.02);
    box-shadow: 5px 5px 4px rgba(0, 0, 0, 0.102) !important;
}
.middlesec {
  color: white;
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
}
.middlesec-p1, .middlesec-p2 {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
 }
.middlesec-p3 {
    font-size: 12px;
  }
.bottomsec {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  padding: 2px 10px;
  background-color: #343a40;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}
.bottomsec-img {
  width: 50px;
}
.bottomsec-p {
  margin-bottom: 0;
  font-weight: 600;
  padding-left: 10px;
  color: white;
}
.cat-title {
  font-weight: 600;
  font-size: 28px;
  color: #343A40;
  text-transform: capitalize;
}
.student-box {
  border-radius: 10px 20px !important;
  box-shadow: 5px 5px 4px 4px rgba(0, 0, 0, 0.102) !important;
}
.student-box:hover {
  overflow: hidden;
  -webkit-transform: scale(1.02);
}
.stu-description {
  font-size: 13px;
  font-weight: 400;
  padding: 0 5px;
  overflow: hidden;
  margin-top: 10px;
}

@media (max-width: 992px) {
  .middlesec-p1 {
    font-size: 10px !important;
    font-weight: 400 !important;
  }
  .middlesec-p2 {
    font-size: 9px !important;
    font-weight: 400 !important;
  }
  .middlesec-p3 {
    font-size: 10px;
  }
  .bottomsec p{
      padding-left: : 5px;
      font-size: 12px;
  }
}
@media (max-width: 767px) {
  #mixedSlider .MS-content .item {
    width: 100%;
  }
}
/* custom-css-end */

         /* end */
    </style>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <div class="plum-bg">
      <div class="row">
          <div class="container">
              <div id="basicSlider">
                  <div class="MS-content">
                    @if(isset($categories))
                    @foreach($categories as $cat)
                      <div class="item text-center">
                        <a href="{{route('all-course',['id'=>$cat->id])}}" target="">
                            <img class="fadeIn fa " style="width: 57px; height: 57px;" src="{{asset('category/'.$cat->logo)}}">
                            <div class="font12 white-text cat-text">{{$cat->name}}</div>
                        </a>
                      </div>
                    @endforeach
                    @endif
                  <!-- <div class="item"> <a href="http://www.google.com" target="_blank"> <img src="http://placehold.it/125x26" alt="" /> </a> </div>
                  <div class="item"> <a href="http://www.google.com" target="_blank"> <img src="http://placehold.it/125x26" alt="" /> </a> </div>
                  <div class="item"> <a href="http://www.google.com" target="_blank"> <img src="http://placehold.it/125x26" alt="" /> </a> </div>
                  <div class="item"> <a href="http://www.google.com" target="_blank"> <img src="http://placehold.it/125x26" alt="" /> </a> </div>
                  <div class="item"> <a href="http://www.google.com" target="_blank"> <img src="http://placehold.it/125x26" alt="" /> </a> </div>
                  <div class="item"> <a href="http://www.google.com" target="_blank"> <img src="http://placehold.it/125x26" alt="" /> </a> </div>
                  <div class="item"> <a href="http://www.google.com" target="_blank"> <img src="http://placehold.it/125x26" alt="" /> </a> </div>
                  <div class="item"> <a href="http://www.google.com" target="_blank"> <img src="http://placehold.it/125x26" alt="" /> </a> </div>
                  <div class="item"> <a href="http://www.google.com" target="_blank"> <img src="http://placehold.it/125x26" alt="" /> </a> </div>
                  <div class="item"> <a href="http://www.google.com" target="_blank"> <img src="http://placehold.it/125x26" alt="" /> </a> </div> -->
                  </div>
              </div>
          </div>
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
            @if(isset($slider1))
                <div class="carousel-item active">
                    <div>
                        <div class="view main-slider-height">
                            <img class="d-block full-img w-100" src="{{url('slider').'/'.$slider1['image']}}"
                                 alt="First slide">
                            <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive font45">{{$slider1['title']}}</h3>
                            <p class="font35">{{$slider1['heading']}}</p>
                        </div>
                    </div>
                </div>
            @endif
            @if(isset($slider))

                @foreach($slider as $slide)
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view main-slider-height">
                            <img class="d-block full-img w-100" src="{{url('slider').'/'.$slide['image']}}"
                                 alt="Second slide">
                            <div class="mask rgba-black-strong"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive font45">{{$slide['title']}}</h3>
                            <p class="font35">{{$slide['heading']}}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    {{-- <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/slider-11.png" alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive font45">Slight mask</h3>
        <p class="font35">Third text</p>
      </div>
    </div> --}}
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
                    <img src="{{asset('assets/frontend/img/time.png')}}">
                    <div class="ml-3">
                        <span class="font-23"><b>Lifetime access</b></span><br>
                        <span>Learn on your schedule</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="heading mt-3">Latest Courses</div>

    <div class="container mt-5 mb-5">

<div class="col-sm-12" id="img_slider">
            <!-- block 1 -->
    <div class="col pt-1" style="min-height: 100px ;overflow: hidden; font-size: 17px;">
                <!--Carousel Wrapper-->
        <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">
                  <!--/.Indicators-->
            <div class="row" style="direction:ltr !important;">
                <div class="col-md-1 controls-top p-0 text-end">
                    <a class="btn-floating" href="#multi-item-example2" style="color: #570055" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                </div>
                        <!--Slides-->
                <div class="col-md-10">
                    <div class="carousel-inner" role="listbox">
                            <!--First slide-->
                           <div class="carousel-item active mb-2">
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="newcard">
                                      <div class="card topsec">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                            alt="Card image cap">
                                      </div>
                                      <div class="col carousel_item_footer main_bg_color middlesec">
                                          <div class="col float-left">
                                              <p class="middlesec-p1">The Art Painting and Digital Art Course Digital Art Course<br>
                                              -12 Courses in 1</p>
                                              <p class="middlesec-p2">Miss Nabeela, Coderstars by rob  percival Experien</p>
                                              <p class="float-right p-0 mt-1 middlesec-p3">
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
                                      <div class="bottomsec">
                                        <img class="bottomsec-img" src="{{asset('assets/frontend/img/Mask Group 1.png')}}"  />
                                        <p class="bottomsec-p">Mr Abcom</p>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="newcard">
                                      <div class="card topsec">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                            alt="Card image cap">
                                      </div>
                                      <div class="col carousel_item_footer main_bg_color middlesec">
                                          <div class="col float-left">
                                              <p class="middlesec-p1">The Art Painting and Digital Art Course<br>
                                              -12 Courses in 1</p>
                                              <p class="middlesec-p2">Miss Nabeela, Coderstars by rob  percival Experien</p>
                                              <p class="float-right p-0 mt-1 middlesec-p3">
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
                                      <div class="bottomsec">
                                        <img class="bottomsec-img" src="{{asset('assets/frontend/img/Mask Group 1.png')}}"  />
                                        <p class="bottomsec-p">Mr Abcom</p>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="newcard">
                                      <div class="card topsec">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                            alt="Card image cap">
                                      </div>
                                      <div class="col carousel_item_footer main_bg_color middlesec">
                                          <div class="col float-left">
                                              <p class="middlesec-p1">The Art Painting and Digital Art Course<br>
                                              -12 Courses in 1</p>
                                              <p class="middlesec-p2">Miss Nabeela, Coderstars by rob  percival Experien</p>
                                              <p class="float-right p-0 mt-1 middlesec-p3">
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
                                      <div class="bottomsec">
                                        <img class="bottomsec-img" src="{{asset('assets/frontend/img/Mask Group 1.png')}}"  />
                                        <p class="bottomsec-p">Mr Abcom</p>
                                      </div>
                                    </div>
                                  </div>



                                      <!-- <div class="col-md-4 clearfix d-none d-md-block">
                                          <div class="card mb-">
                                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                              alt="Card image cap">
                                          </div>
                                          <div class="col carousel_item_footer main_bg_color" style="color: white">

                                          <div class="col float-left">
                                          <p>The Art Painting and Digital Art Course<br>
                                          -12 Courses in 1</p>
                                          <p>Miss Nabeela, Coderstars by rob  percival Experien</p>
                                          <p class="float-right p-0" style="font-size: 10px">
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
                                      </div> -->

                                      <!-- <div class="col-md-4 clearfix d-none d-md-block">
                                      <div class="card">
                                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                          alt="Card image cap">
                                      </div>
                                      <div class="col carousel_item_footer main_bg_color" style="color: white">

                                          <div class="col float-left">
                                          <p>The Art Painting and Digital Art Course<br>
                                          -12 Courses in 1</p>
                                          <p>Miss Nabeela, Coderstars by rob  percival Experien</p>
                                          <p class="float-right p-0" style="font-size: 10px">
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
                                      </div> -->
                                </div>
                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item mb-2">
                                <div class="row">

                                  <div class="col-md-4">
                                    <div class="newcard">
                                      <div class="card topsec">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                            alt="Card image cap">
                                      </div>
                                      <div class="col carousel_item_footer main_bg_color middlesec">
                                          <div class="col float-left">
                                              <p class="middlesec-p1">The Art Painting and Digital Art Course<br>
                                              -12 Courses in 1</p>
                                              <p class="middlesec-p2">Miss Nabeela, Coderstars by rob  percival Experien</p>
                                              <p class="float-right p-0 mt-1 middlesec-p3">
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
                                      <div class="bottomsec">
                                        <img class="bottomsec-img" src="{{asset('assets/frontend/img/Mask Group 1.png')}}"  />
                                        <p class="bottomsec-p">Mr Abcom</p>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="newcard">
                                      <div class="card topsec">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                            alt="Card image cap">
                                      </div>
                                      <div class="col carousel_item_footer main_bg_color middlesec">
                                          <div class="col float-left">
                                              <p class="middlesec-p1">The Art Painting and Digital Art Course<br>
                                              -12 Courses in 1</p>
                                              <p class="middlesec-p2">Miss Nabeela, Coderstars by rob  percival Experien</p>
                                              <p class="float-right p-0 mt-1 middlesec-p3">
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
                                      <div class="bottomsec">
                                        <img class="bottomsec-img" src="{{asset('assets/frontend/img/Mask Group 1.png')}}"  />
                                        <p class="bottomsec-p">Mr Abcom</p>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="newcard">
                                      <div class="card topsec">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                            alt="Card image cap">
                                      </div>
                                      <div class="col carousel_item_footer main_bg_color middlesec">
                                          <div class="col float-left">
                                              <p class="middlesec-p1">The Art Painting and Digital Art Course<br>
                                              -12 Courses in 1</p>
                                              <p class="middlesec-p2">Miss Nabeela, Coderstars by rob  percival Experien</p>
                                              <p class="float-right p-0 mt-1 middlesec-p3">
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
                                      <div class="bottomsec">
                                        <img class="bottomsec-img" src="{{asset('assets/frontend/img/Mask Group 1.png')}}"  />
                                        <p class="bottomsec-p">Mr Abcom</p>
                                      </div>
                                    </div>
                                  </div>

                                    <!-- <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                        alt="Card image cap">
                                    </div>
                                    <div class="col carousel_item_footer main_bg_color" style="color: white">

                                        <div class="col float-left">
                                        <p>The Art Painting and Digital Art Course<br>
                                        -12 Courses in 1</p>
                                        <p>Miss Nabeela, Coderstars by rob  percival Experien</p>
                                        <p class="float-right p-0" style="font-size: 10px">
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
                                    </div> -->

                                    <!-- <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="card">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                        alt="Card image cap">
                                    </div>
                                    <div class="col carousel_item_footer main_bg_color" style="color: white">

                                        <div class="col float-left">
                                        <p>The Art Painting and Digital Art Course<br>
                                        -12 Courses in 1</p>
                                        <p>Miss Nabeela, Coderstars by rob  percival Experien</p>
                                        <p class="float-right p-0" style="font-size: 10px">
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
                                    </div> -->

                                    <!-- <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="card">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                        alt="Card image cap">
                                    </div>
                                    <div class="col carousel_item_footer main_bg_color" style="color: white">

                                        <div class="col float-left">
                                        <p>The Art Painting and Digital Art Course<br>
                                        -12 Courses in 1</p>
                                        <p>Miss Nabeela, Coderstars by rob  percival Experien</p>
                                        <p class="float-right p-0" style="font-size: 10px">
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
                                    </div> -->
                                </div>
                            </div>
                            <!--/.Second slide-->
                    </div>
                </div>

                <div class="controls-top col-md-1 p-0">
                        <a class="btn-floating" href="#multi-item-example2" style="color: #570055" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
     <!-- col close -->
</div>
</div>

<!-- old -->
    <div class="container mt-5 mb-5">
        <div class="carousel slide multi-item-carousel" id="theCarousel">
            <div class="carousel-inner row w-100 d-none">
                <div class="carousel-item active multi-img p-0">
                    <div class="">
                        @if(isset($latest1))
                            <img src="{{asset('course/'. $latest1->thumbnail)}}" class="thumbnail-img">
                            <div class="img-hover">
                                <div class="row hover-bg">
                                    <div class="col-3 p-0 text-center">
                                        <div class="course-traine-img">
                                            @if($latest1->users['image'] == "")
                                                <img src="{{asset('assets/frontend/img/user-1.png')}}" class="">
                                            @else
                                                <img src="{{asset('users/'. $latest1->users['image'])}}" class="">

                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-5 p-0">
                                        <div class="trainer-name">{{$latest1->users['name']}}</div>
                                        <div class="course-d mt-2">{{$latest1->name}}</div>
                                    </div>
                                    <div class="col-4 pt-3">
                                        <ul class="card-item">
                                            <li><img src="{{asset('assets/frontend/img/star-small-fill.png')}}">
                                            </li>
                                            <li><img src="{{asset('assets/frontend/img/star-small-fill.png')}}">
                                            </li>
                                            <li><img src="{{asset('assets/frontend/img/star-small.png')}}"></li>
                                            <li>4.8</li>
                                            <li>(12)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @endif
                </div>
                @if(isset($latest))

                    @foreach($latest as $c)
                        <div class="carousel-item  multi-img p-0">
                            <div class="">
                                <img src="{{asset('course/'. $c->thumbnail)}}" class="thumbnail-img">
                                <div class="img-hover">
                                    <div class="row hover-bg">
                                        <div class="col-3 p-0 text-center">
                                            <div class="course-traine-img">
                                                @if($c->users['image'] == "")
                                                    <img src="{{asset('assets/frontend/img/user-1.png')}}" class="">
                                                @else
                                                    <img src="{{asset('users/'. $c->users['image'])}}" class="">

                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-5 p-0">
                                            <div class="trainer-name">{{$c->users['name']}}</div>
                                            <div class="course-d mt-2">{{$c->name}}</div>
                                        </div>
                                        <div class="col-4 pt-3">
                                            <ul class="card-item">
                                                <li><img src="{{asset('assets/frontend/img/star-small-fill.png')}}">
                                                </li>
                                                <li><img src="{{asset('assets/frontend/img/star-small-fill.png')}}">
                                                </li>
                                                <li><img src="{{asset('assets/frontend/img/star-small.png')}}"></li>
                                                <li>4.8</li>
                                                <li>(12)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif

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
<!-- old container close -->

    <!-- Product Slider End -->
<div class="height-2 mt-3"></div>
    <div>
        <div class="col-12 col-sm-10 offset-md-1 mt-5 mb-5">
            <div class="row text-center">
                <div class="col-12 col-sm-9 pt-5 text-right">
                    <div class="plum-text font-25">
                        {!! $setting->about_us_description !!}
                    </div>
                    <div class="social">
                        <ul class="tranee-social">
                            <li>
                                <a href="{{$setting->twitter_link}}" target="_blank"><img src="{{asset('assets/frontend/img/t-twi.png')}}"></a>
                            </li>
                            <li>
                                <a href="{{$setting->fb_link}}" target="_blank"><img src="{{asset('assets/frontend/img/t-fb.png')}}"></a>
                            </li>
                            <li>
                                <a href="{{$setting->insta_link}}" target="_blank"><img src="{{asset('assets/frontend/img/t-insta.png')}}"></a>
                            </li>
                            <li>
                                <a href="{{$setting->in_link}}" target="_blank"><img src="{{asset('assets/frontend/img/t-link.png')}}"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="trainee-img">
                        <img class="rounded-circle img-fluid"
                             src="{{asset('setting/'.$setting->about_us_image)}}">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="height-2"></div>
    <!-- Description -->
    <div class="heading mt-3 mb-3">Different Courses</div>

    <!-- Cetegory slider -->
    <div class="row">
        <div class="col-12" id="img_slider">
            <!-- block 1 -->
            <div class="">
                <div class="" style="min-height: 100px ;overflow: hidden;">
                    @foreach($categories1 as $cat)

                    <!-- <div class="slider_header text-center m-2"><u>{{$cat->name}}</u></div> -->

                    <!-- <div class="slider_header text-center m-2 cat-title">
                      <u style="text-decoration: none !important;">{{$cat->name}}</u>
                    </div> -->
                    <!-- <hr style="width: 20%; height: 5px; border-top:2px solid #570055; margin-top: 0" /> -->

                    <!--Carousel Wrapper-->
                    <div id="multi-item-{{$cat->name}}" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!--/.Indicators-->
                      <div class="row" style="direction:ltr !important;">
                        <div class="col-md-1 controls-top">
                            <a class="btn-floating" href="#multi-item-{{$cat->name}}" style="color: #570055" data-slide="prev"><i
                                    class="fa fa-chevron-left"></i></a>
                        </div>
                        <!--Slides-->
                        @php
                            $data = \App\Models\Course::whereRaw("find_in_set($cat->id,category_id)")->orderByRaw('RAND()')->take(3)->get();
                        @endphp
                        <div class="col-12 col-sm-10 p-0">
                            <div class="carousel-inner" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active mb-2">

                                    {{--                            {{dd($data)}}--}}
                                    <div class="row">
                                        @foreach($data as $c)

                                        <!-- <div class="col-4 col-md-4 p-mob">
                                            <div class="card">
                                                <img class="card-img-top"
                                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                                    alt="Card image cap">
                                            </div>
                                            <div class="col carousel_item_footer main_bg_color" style="color: white">
                                                <div class="col float-left">
                                                    <p>{{$c->name}}<br>
                                                        {{$c->description}}</p>
                                                    <p>{{$c->users->name}}, {{$c->users->experience}}</p>
                                                    <p class="float-right p-0" style="font-size: 10px">
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
                                        </div> -->

                                        <div class="col-md-4">
                                          <div class="newcard">
                                            <div class="card topsec">
                                              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                                  alt="Card image cap">
                                            </div>
                                            <div class="col carousel_item_footer main_bg_color middlesec">
                                                <div class="col float-left">
                                                    <p class="middlesec-p1">{{$c->name}}<br>
                                                      {{$c->description}}</p>
                                                    <p class="middlesec-p2">{{$c->users->name}}, {{$c->users->experience}}</p>
                                                    <p class="float-right p-0 mt-1 middlesec-p3">
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
                                            <div class="bottomsec">
                                              <img class="bottomsec-img" src="{{asset('assets/frontend/img/Mask Group 1.png')}}"  />
                                              <p class="bottomsec-p">Mr Abcom</p>
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
                                            @php
                                                $data1 = \App\Models\Course::whereRaw("find_in_set($cat->id,category_id)")->orderByRaw('RAND()')->take(3)->get();
                                            @endphp
                                            @foreach($data1 as $c)

                                            <!-- <div class="col-4 col-md-4 p-mob">
                                                <div class="card">
                                                    <img class="card-img-top"
                                                        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                                        alt="Card image cap">
                                                </div>
                                                <div class="col carousel_item_footer main_bg_color" style="color: white">

                                                    <div class="col float-left">
                                                        <p>{{$c->name}}<br>
                                                            {{$c->description}}</p>
                                                        <p>{{$c->users->name}}, {{$c->users->experience}}</p>
                                                        <p class="float-right p-0" style="font-size: 10px">
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
                                            </div> -->

                                            <div class="col-md-4">
                                          <div class="newcard">
                                            <div class="card topsec">
                                              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                                  alt="Card image cap">
                                            </div>
                                            <div class="col carousel_item_footer main_bg_color middlesec">
                                                <div class="col float-left">
                                                    <p class="middlesec-p1">{{$c->name}}<br>
                                                      {{$c->description}}</p>
                                                    <p class="middlesec-p2">{{$c->users->name}}, {{$c->users->experience}}</p>
                                                    <p class="float-right p-0 mt-1 middlesec-p3">
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
                                            <div class="bottomsec">
                                              <img class="bottomsec-img" src="{{asset('assets/frontend/img/Mask Group 1.png')}}"  />
                                              <p class="bottomsec-p">Mr Abcom</p>
                                            </div>
                                          </div>
                                        </div>

                                            @endforeach

                                        </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-sm-1 controls-top">
                            <a class="btn-floating" href="#multi-item-{{$cat->name}}" style="color: #570055" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                        </div>
                        </div>
                        <!--/.Slides-->

                    </div>
                    <!--/.Carousel Wrapper-->

                    <!-- <div class="slider_header text-center m-2 cat-title">
                      <u style="text-decoration: none !important;">{{$cat->name}}</u>
                    </div> -->

                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <!-- slider close -->

    <!-- End -->

    <!--Description-->
    <hr class="mt-5" style="width: 100%; height: 5px; border-top:2px solid">
    <!-- Student Comment Section -->
    <div class="heading mt-4">Student Feedback</div>
    <div class="container mt-5 mb-3">
        <div class="carousel slide multi-item-carousel" id="theCarousel">
            <div class="carousel-inner row mx-auto">
                <div class="carousel-item active col-md-4 mb-5">
                    <div class="student-box shadow-sm bg-white rounded">
                        <div class="d-flex">
                            <div class="student-img">
                                <img class="img-fluid rounded-circle"
                                     src="{{asset('assets/frontend/img/Mask Group 1.png')}}">
                            </div>
                            <div class="stu-name">Abcom</div>
                        </div>
                        <div class="stu-description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of
                            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                    </div>
                </div>
                <div class="carousel-item active col-md-4 mb-5">
                    <div class="student-box shadow-sm bg-white rounded">
                        <div class="d-flex">
                            <div class="student-img">
                                <img class="img-fluid rounded-circle"
                                     src="{{asset('assets/frontend/img/Mask Group 1.png')}}">
                            </div>
                            <div class="stu-name">Abcom</div>
                        </div>
                        <div class="stu-description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of
                            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                    </div>
                </div>
                <div class="carousel-item active col-md-4 mb-5">
                    <div class="student-box shadow-sm bg-white rounded">
                        <div class="d-flex">
                            <div class="student-img">
                                <img class="img-fluid rounded-circle"
                                     src="{{asset('assets/frontend/img/Mask Group 1.png')}}">
                            </div>
                            <div class="stu-name">Abcom</div>
                        </div>
                        <div class="stu-description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of
                            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
    <!-- <hr class="mt-2" style="width: 100%; height: 5px; border-top:2px solid"> -->
    <!-- End -->
    </div>
  </div>
    
    <div class="container-fluid px-0">
      <!-- Books Reading Section -->
      <div class="book-sec" style="padding: 50px 20px">
          <div class="row">
            <div class="col-1"></div>
            <div class="col-lg-5 col-md-12 col-sm-12 text-center">
                <h4><b>Become an instructor</b></h4>
                <p style="font-size: 14px;width: 80%;text-align: center;margin: auto;line-height: 24px">Top instructors from around the world teach millions of students on Udemy. We provide the
                    tools and skills to teach what you love.</p>
                <button class="btn plum-btn waves-effect waves-light mt-3">Start teaching today</button>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 text-center">
                <h4><b>Become an Student</b></h4>
                <p style="font-size: 14px;width: 80%;text-align: center;margin: auto;line-height: 24px">Top instructors from around the world teach millions of students on Udemy. We provide the
                    tools and skills to teach what you love.</p>
                <button class="btn plum-btn waves-effect waves-light mt-3">Start learning today</button>
            </div>
            <div class="col-1"></div>
          </div>
      </div>
      <!-- End -->
    </div>
    <div class="plum-bg">
        <div class="col-12 col-sm-10 offset-md-1" style="padding: 40px 15px;line-height: 1;">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 my-2 text-center">
                    <!-- <div class="mb-1 white-text">Sign up to receive our weekly newsletter</div> -->
                    <div class="white-text" style="padding-top: 10px">Stay uploaded on all new online and offline training courses</div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 my-2 text-center">
                    <div class="Subscription">
                        <input class="SubInput z-depth-1" type="text" placeholder="Enter your email" style="width: 60%">
                        <span class="SubBtn ml-2 px-4">
                          <a href="#">Subscribe</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="to-top" title="back to top">↑</div>
    <div class="sidepanel">
        <span><i class="fa fa-cog fa-spin"></i></span>
        <div class="color-picker">
            <h3>Choose Your Color</h3>
            <a class="color applied" onclick="setActiveStyleSheet('color'); return false;" href="{{url('/')}}"></a>
            <a class="color1" onclick="setActiveStyleSheet('color1'); return false;" href="{{url('/')}}"></a>
        </div>
    </div>



@endsection
<!-- Latter Subscription End -->