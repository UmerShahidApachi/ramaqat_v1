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
    .card{
        position: relative;
    }
    .card_text_bottom{
      position: absolute;
      bottom: 0px;
      right: 16px;
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

                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" class="rounded-circle" alt="Cinque Terre"  width="278" height="278" id="trainer11_logo">
                    </div>

                    <div class="col text-center mt-3" id="trainer11_logo_title">
                        <p class="mb-0">Trainer  Name</p>
                        <p>IT Tech & Networking Expert Trainer </p>
                    </div>
                    <div class="col text-center table_f_size mt-5" style="min-height: 50px;overflow: hidden;">
                        <div class="col-md-4 text-center border_right float-left p-0">
                            <p>26,843</p>
                            <p>My Stucdents</p>
                        </div>
                        <div class="col-md-4 text-center border_right float-left p-0">
                            <p>6</p>
                            <p>My Courses</p>
                        </div>
                        <div class="col-md-4 text-center float-left p-0">
                            <p>4.5 / 6</p>
                            <p>My Rating</p>
                        </div>
                    </div>
                    <div class="col text-center mt-5">
                        <p>Im passionat trainer to make my  student a professional to work in  maket as a  expert.Im passionat trainer to make my  studenta professional to .</p>
                    </div>

                    <div class="col text-center mt-2 mb-2 float-left">
                        <span><i class="fa fa-facebook-square" style="font-size:36px"></i></span>
                        <span><i class="fa fa-linkedin-square" style="font-size:36px"></i></span>
                        <span><i class="fa fa-instagram" style="font-size:36px"></i></span>
                        <span><i class="fa fa-twitter-square" style="font-size:36px"></i></span>
                    </div>
                </div>


                <div class="col-md-8 float-left" id="img_slider">
<!-- block 1 -->
                    <div class="col pt-1" style="min-height: 100px ;overflow: hidden; font-size: 17px;font-weight: regular">
                          <div class="slider_header text-center m-2" style="color:#570055;"><a href="#"><u>Discount Courses</u></a>
                          </div>
                        <!--Carousel Wrapper-->
                        <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">

                          <!--/.Indicators-->

                            <div class="col-md-1 controls-top float-left p-0 text-end pt-5">
                                <a class="btn-floating" href="#multi-item-example2" style="color: #570055" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                            </div>
                            <!--Slides-->

                            <div class="col-md-10 float-left">
                              <div class="carousel-inner" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active mb-2">

                                  <div class="row">
                                    <div class="col-md-3 ">
                                      <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                          alt="Card image cap">

                                      </div>
                                    </div>

                                    <div class="col-md-3 clearfix d-none d-md-block">
                                      <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                          alt="Card image cap">
                                        <div class="card_text_bottom main_bg_color" style="color: white">
                                            <p> The art and design</p>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-md-3 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                            alt="Card image cap">

                                        </div>
                                    </div>

                                    <div class="col-md-3 clearfix d-none d-md-block">
                                      <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                          alt="Card image cap">
                                      </div>
                                    </div>
                                  </div>

                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item mb-2">

                                  <div class="row">
                                    <div class="col-md-3">
                                      <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                          alt="Card image cap">

                                      </div>
                                    </div>

                                    <div class="col-md-3 clearfix d-none d-md-block">
                                      <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                          alt="Card image cap">
                                      </div>
                                    </div>

                                    <div class="col-md-3 clearfix d-none d-md-block">
                                      <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                          alt="Card image cap">

                                      </div>
                                    </div>

                                    <div class="col-md-3 clearfix d-none d-md-block">
                                      <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                          alt="Card image cap">
                                      </div>
                                    </div>
                                  </div>

                                </div>
                                <!--/.Second slide-->

                              </div>
                            </div>

                            <div class="controls-top col-md-1 float-left p-0 pt-5">
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
                            <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">

                              <!--/.Indicators-->

                                <div class="col-md-1 controls-top float-left p-0 text-end pt-5">
                                    <a class="btn-floating" href="#multi-item-example2" style="color: #570055" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                </div>
                                <!--Slides-->

                                <div class="col-md-10 float-left">
                                  <div class="carousel-inner" role="listbox">
                                    <!--First slide-->
                                    <div class="carousel-item active mb-2">

                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                              alt="Card image cap">

                                          </div>
                                        </div>

                                        <div class="col-md-3 clearfix d-none d-md-block">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                              alt="Card image cap">
                                          </div>
                                        </div>

                                        <div class="col-md-3 clearfix d-none d-md-block">
                                            <div class="card mb-2">
                                              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                                alt="Card image cap">

                                            </div>
                                        </div>

                                        <div class="col-md-3 clearfix d-none d-md-block">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                              alt="Card image cap">
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                    <!--/.First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item mb-2">

                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                              alt="Card image cap">

                                          </div>
                                        </div>

                                        <div class="col-md-3 clearfix d-none d-md-block">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                              alt="Card image cap">
                                          </div>
                                        </div>

                                        <div class="col-md-3 clearfix d-none d-md-block">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                              alt="Card image cap">

                                          </div>
                                        </div>

                                        <div class="col-md-3 clearfix d-none d-md-block">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                              alt="Card image cap">
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                    <!--/.Second slide-->

                                  </div>
                                </div>

                                <div class="controls-top col-md-1 float-left p-0 pt-5">
                                    <a class="btn-floating" href="#multi-item-example2" style="color: #570055" data-slide="next"><i class="fa fa-chevron-right"></i></a>
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
                            <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">

                              <!--/.Indicators-->

                                <div class="col-md-1 controls-top float-left p-0 text-end pt-5">
                                    <a class="btn-floating" href="#multi-item-example2" style="color: #570055" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                </div>
                                <!--Slides-->

                                <div class="col-md-10 float-left">
                                  <div class="carousel-inner" role="listbox">
                                    <!--First slide-->
                                    <div class="carousel-item active mb-2">

                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                              alt="Card image cap">

                                          </div>
                                        </div>

                                        <div class="col-md-3 clearfix d-none d-md-block">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                              alt="Card image cap">
                                          </div>
                                        </div>

                                        <div class="col-md-3 clearfix d-none d-md-block">
                                            <div class="card mb-2">
                                              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                                alt="Card image cap">

                                            </div>
                                        </div>

                                        <div class="col-md-3 clearfix d-none d-md-block">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                              alt="Card image cap">
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                    <!--/.First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item mb-2">

                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                              alt="Card image cap">

                                          </div>
                                        </div>

                                        <div class="col-md-3 clearfix d-none d-md-block">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                              alt="Card image cap">
                                          </div>
                                        </div>

                                        <div class="col-md-3 clearfix d-none d-md-block">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                              alt="Card image cap">

                                          </div>
                                        </div>

                                        <div class="col-md-3 clearfix d-none d-md-block">
                                          <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                              alt="Card image cap">
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                    <!--/.Second slide-->

                                  </div>
                                </div>

                                <div class="controls-top col-md-1 float-left p-0 pt-5">
                                    <a class="btn-floating" href="#multi-item-example2" style="color: #570055" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                              <!--/.Slides-->

                            </div>
                        <!--/.Carousel Wrapper-->
                    </div>
                    <!-- col close -->
                </div>

            </div>
        </div>
    </section>
@endsection
    <!-- Latter Subscription End -->
