<style>
    .main_color {
        color: #570055;
    }


    #basicSlider {
        position: relative;
    }

    #basicSlider img {
        width: 65px;
        height: 65px;
    }

    #basicSlider .MS-content {
        white-space: nowrap;
        overflow: hidden;
        margin: 0 2%;
        padding-top: 1%;

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

    #basicSlider .MS-content .item a {
        line-height: 50px;
        vertical-align: middle;
    }

    #basicSlider .MS-controls button {
        position: absolute;
    }

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

    li .white-btn {
        padding: 13px 25px;
    }

    li .signup {
        padding: 13px 25px;
    }

    #Subscribe_body .SubBtn {
        display: inline-block;
    }

    #Subscribe_inner_body input {
        width: inherit;
    }


    @media (max-width: 991px) {

        .container.container_category {
            max-width: 90%;
        }

        #basicSlider .MS-content .item {
            width: 20%;
        }
    }

    @media (max-width: 767px) {

        #basicSlider div:last-child {
            font-size: 0.9em;
        }


        .auto_margin {
            margin: 0 auto;
        }

        .hide_on_mobile {
            display: none;
        }


       li .white-btn{
            padding: 12px 15px;
       }
       li .logout-btn{
          padding: 12px 15px; 
       }
       li .signup{
        padding: 12px 15px;
       }
       .custom-select {
        width: 85px;
       }
        #Subscribe_body .SubBtn {
            display: inline-block;
          }

        .book-sec h4 {
            font-size: 1.5em;

        }

        .book-sec p {
            font-size: 0.9em;
        }

        .book-sec button.btn {
            font-size: 0.6em;
        }
    }

    @media (max-width: 767px) {

        #subscribebody .SubInput {
            margin-top: 0px;
        }
    }


    @media (max-width: 767px) {

        #basicSlider .MS-content .item {
            /*width: 35%;*/
            width: 25%;
        }
    }

    @media (max-width: 575px) {

        #basicSlider .MS-content .item {
            width: 25%;
        }

        .book-sec p {
            font-size: 1em;
        }

        .book-sec button.btn {
            font-size: 1em;
        }

        .book-sec .row div:nth-child(2) {
            margin-top: 3%;
        }

        .over-view-box .over-view {
            margin-top: 3%;
        }


        .container.container_category {
            max-width: 83%;
        }

        #basicSlider img {
            width: 60px;
            height: 60px;
        }
    }

    @media (max-width: 500px) {

        #basicSlider .MS-content .item {
            width: 25%;
        }
    }

    /* end */

    header ul.ulDBlock li {
        display: contents;
    }

    @media (max-width: 900px) {
        #searchbox_header {
            display: none;
        }
    }

    @media (max-width: 600px) {
        header ul.ulDBlock li:nth-child(3) {
            display: none;
        }
    }

    @media (max-width: 370px) {
        header #hide_on_mobile {
            display: none;
        }
    }
</style>
<!-- <script>
  $( "openbtn" ).click(function() {
  $( "#mySidebar" ).toggle();
});
</script>
 --><!-- Start your project here-->
<header>
    <!-- Start your project here-->
@php $currenices = \App\Currency::all(); @endphp

    <nav>
        <div class="d-flex justify-content-between top-header">
            <div class="col-3" id="leftmenu">
                <ul class="ulDBlockMenu">
                    <li>
                        <img src="{{asset('assets/frontend/img/toggle.png')}}" class="openbtn" id="openbtn" value="1"
                             onclick="openNav()">
                    </li>
                    <li>
                        <a href="{{url('/')}}"> <img class="animated fadeIn logo_img"
                                                     src="{{asset('assets/frontend/img/logo.png')}}"></a>
                    </li>
                </ul>
            </div>

            <div class="col-4" id="searchbox_header">
                <div class="HeaderSearch d-none d-sm-block">
                    <input class="SearchInput z-depth-1" type="search" placeholder="Search">
                    <img class="plumIcon" src="{{asset('assets/frontend/img/search (2).png')}}">
                </div>
            </div>

            <div class="col-5 text-end" id="hide_on_mobile">
                <ul class="ulDBlock d-sm-block">


                    {{--       <li><img src="{{asset('assets/frontend/img/line.png')}}" alt="cart"></li>--}}
                    <li>
                        <a href="#"><img src="{{asset('assets/frontend/img/cart.png')}}" alt="cart"></a>
                    </li>

                    <li>
                        <div class="custom-select ml-1">
                            <!--
                             <select id="select_language">
                                <option class="plum-text" value="0">Language</option>
                                <option value="1">English</option>
                                <option value="2">Arabic</option>
                            </select>
                            -->
                            @if(Session::has('lang'))

                                <button id="change_lamguage" class="btn white-btn">
                                    <!-- <i style="pointer-events: none;" class="fa fa-language fa-2x" aria-hidden="true"></i> -->
                                    @if(Session::get('lang')=="ar") English @else Arabic @endif </button>
                            @else
                                <button id="change_lamguage" class="btn white-btn">Arabic</button>
                            @endif
                        </div>
                    </li>
                <!--
{{--       <li><img src="{{asset('assets/frontend/img/line.png')}}" alt="cart"></li>--}}
                    <li>
                      <a href="#"><img src="{{asset('assets/frontend/img/cart.png')}}" alt="cart"></a>
            </li> -->
                    @guest
                        <li>
                            <a href="{{route('login')}}">
                                <button class="btn white-btn">Login</button>
                            </a>
                        </li>

                    @endguest
                    @auth
                        <li>
                            <a href="">
                                <button class="btn white-btn">
                                    <!-- <i class="fa fa-user fa-2x" aria-hidden="true"></i> -->{{\Illuminate\Support\Facades\Auth::user()->name}}</button>
                            </a>
                        </li>

                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 3)
                            <li>
                                @if(\Illuminate\Support\Facades\Auth::user()->is_trainer == 0)
                                    <a href="{{route('become_trainer')}}">
                                        <button class="btn white-btn">Become a Trainer</button>
                                    </a>
                                @else
                                    <a href="{{route('Trainer/dashboard')}}">
                                        <button class="btn white-btn">
                                            <i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>
                                        </button>
                                    </a>

                                @endif
                            </li>
                        @endif
                <li>
                    <a href="{{route('logout')}}"><button class="btn plum-btn logout-btn">Logout</button></a>
                </li>
                @endauth
        </ul>
      </div>
        </div>
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        @php
            $categories = \App\Models\Category::all();
        @endphp

        <div class="plum-bg">
            <div class="row">
                <div class="container container_category">
                    <div id="basicSlider">
                        <div class="MS-content">
                            @if(isset($categories))
                                @foreach($categories as $cat)
                                    <div class="item text-center">
                                        <a href="{{route('all-course',['id'=>$cat->id])}}" target="">
                                            <img class="fadeIn fa category_width"
                                                 src="{{asset('category/'.$cat->logo)}}">
                                            <div class="font12 white-text cat-text">{{$cat->name}}</div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--   sidebar -->

    <div id="mySidebar" class="sidebar z-depth-1-half">
        @auth
            <div class="row login_id">
                @if(Auth::user()->image == "")
                    <img src="{{asset('assets/frontend/img/singup_person.png')}}">
                @else
                    <div class="login-img">
                        <img class="rounded-circle full-img" src="{{asset('users/'. Auth::user()->image)}}">
                    </div>
            @endif

            <!-- <div class="mb-1 white-text">Sign up to receive our weekly newsletter</div> -->
                <div class="flex-center mb-1 mt-1 offline_courses">
                    <u><a class="Socialb plum-text singup_id_name p-0" href="">{{Auth::user()->name}}</a></u>
                </div>
                <p>{{Auth::user()->email}}</p>
            </div>

        @endauth
        @guest
            <div class="row login_id">
            {{--                        <img src="{{asset('assets/frontend/img/singup_person.png')}}">--}}

            <!-- <div class="mb-1 white-text">Sign up to receive our weekly newsletter</div> -->
                <div class="flex-center mb-1 mt-1 offline_courses">
                    <u><a class="Socialb plum-text singup_id_name" href="{{route('login')}}">Login/Signup</a></u>
                </div>
                {{--                        <p>guest</p>--}}
            </div>

        @endguest
        <div class="row sidebar_icons">
            <a href="javascript:void(0)" class="closebtn close_sidbar" onclick="closeNav()">×</a>
            @auth
                @if(Auth::user()->role_id == 3 and Auth::user()->is_trainer == 1)
                    <a href="{{route('Trainer/dashboard')}}"><img src="{{asset('assets/frontend/img/category.png')}}">Dashboard</a>
                    <a href="#" onclick="setActiveStyleSheet('color1'); return false;" href="{{url('/')}}"><img
                            src="{{asset('assets/frontend/img/dark_mode.png')}}">Dark Mode</a>
                    <a href="{{route('Trainer/dashboard')}}"><img src="{{asset('assets/frontend/img/currency_rate.png')}}">My Wallet</a>
                    <a href="{{route('form')}}"><img src="{{asset('assets/frontend/img/your_courses.png')}}">Upload a Course</a>
                    <a href="{{route('my_courses')}}"><img src="{{asset('assets/frontend/img/online_courses.png')}}">My
                        Courses</a>

{{--                    <a href="#"><img src="{{asset('assets/frontend/img/your_courses.png')}}">Your Courses</a>--}}
                    <a href="#"><img src="{{asset('assets/frontend/img/favourites%20.png')}}">Favourites </a>
                    <a href="#currencymodal" data-toggle="modal" data-target=""><img src="{{asset('assets/frontend/img/currency_rate.png')}}">Currency Rate</a>

                    <a href="#"><img src="{{asset('assets/frontend/img/contact_us.png')}}">Contact Us</a>


                @endif
                @if(Auth::user()->role_id == 3 and Auth::user()->is_trainer == 0)

                    <a href="{{route('my_courses')}}"><img src="{{asset('assets/frontend/img/online_courses.png')}}">My
                        Courses</a>

{{--                    <a href="#"><img src="{{asset('assets/frontend/img/your_courses.png')}}">Your Courses</a>--}}
                    <a href="#"><img src="{{asset('assets/frontend/img/favourites%20.png')}}">Favourites </a>
                        <a href="#currencymodal" data-toggle="modal" data-target=""><img src="{{asset('assets/frontend/img/currency_rate.png')}}">Currency Rate</a>
                        <a href="#"><img src="{{asset('assets/frontend/img/contact_us.png')}}">Contact Usasdasd</a>


                    <a href="{{route('become_trainer')}}"><img src="{{asset('assets/frontend/img/contact_us.png')}}">Become a Trainer</a>
                    @endif

                <a href="{{route('logout')}}"><img src="{{asset('assets/frontend/img/logout.png')}}">Logout</a>
            @endauth
            @guest
                <a href="#" onclick="setActiveStyleSheet('color1'); return false;" href="{{url('/')}}"><img
                        src="{{asset('assets/frontend/img/dark_mode.png')}}">Dark Mode</a>

                <a href="#"><img src="{{asset('assets/frontend/img/contact_us.png')}}">Contact Us</a>
            @endguest
        </div>

    </div>

    <div class="modal fade" id="currencymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="container">
          <div class="row">
            <div class="col-10 mx-auto">
             <!--  <div class="HeaderSearch d-none d-sm-block">
                <input style="background-color: #F6F6F6;" class="SearchInput z-depth-1" type="search" placeholder="Enter Country of Currency"> -->
                <!-- <img class="plumIcon" src="img/search (2).png"> -->
              <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body pt-4 pb-4">
        <div class="container">
          <div class="row mb-3">
            @foreach($currenices as $currency)
            <div class="col-4">                
              <div class="currency-flag">                
                <div><a href="{{url('set_currency/'.$currency->symbol)}}"><img src="{{url('currency/'.$currency->flag)}}" style="width: 30%;">&nbsp;&nbsp;&nbsp;<span>{{$currency->symbol}}</span></div>
              </div>
            </div>
            @endforeach

          </div>
          
         
        </div>
      </div>
      <div class="modal-footer">
        <div class="container">
          <div class="row ">
            <!-- <div class="col-12 text-end">
              <button class="btn plum-btn">Done</button>
            </div> -->
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</header>
<!--Header End Here  -->
