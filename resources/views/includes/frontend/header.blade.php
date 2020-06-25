<!-- Start your project here-->
<header>
 <!-- Start your project here-->
 <nav>
    <div class="container d-flex justify-content-between top-header">
      <ul class="ulDBlockMenu">
        <li>
          <img src="{{asset('assets/frontend/img/toggle.png')}}" class="openbtn" onclick="openNav()">
        </li>
        <li>
          <img class="animated fadeIn logo_img" src="{{asset('assets/frontend/img/logo.png')}}">
        </li>

      </ul>
      <div class="HeaderSearch d-none d-sm-block">
        <input class="SearchInput z-depth-1" type="search" placeholder="Search">
        <img class="plumIcon" src="{{asset('assets/frontend/img/search (2).png')}}">
      </div>
      <ul class="ulDBlock d-none d-sm-block">
         <li>
             <!-- Surround the select box within a "custom-select" DIV element.
        Remember to set the width: -->
        <div class="custom-select">
        <select>
            <option value="0">Select car:</option>
            <option value="1">Audi</option>
            <option value="2">BMW</option>
            <option value="3">Citroen</option>
            <option value="4">Ford</option>
            <option value="5">Honda</option>
            <option value="6">Jaguar</option>
            <option value="7">Land Rover</option>
            <option value="8">Mercedes</option>
            <option value="9">Mini</option>
            <option value="10">Nissan</option>
            <option value="11">Toyota</option>
            <option value="12">Volvo</option>
        </select>
        </div>
         </li>
        <li>
            <a href="{{route('login')}}"><button class="btn white-btn">Login</button></a>
        </li>
        <li>
            <a href="{{route('register')}}"><button class="btn plum-btn">Signup</button></a>
        </li>
      </ul>

    </div>
  </nav>

<!--   sidebar -->

    <div id="mySidebar" class="sidebar">
            <div class="row login_id">
                <img src="{{asset('assets/frontend/img/singup_person.png')}}">

              <!-- <div class="mb-1 white-text">Sign up to receive our weekly newsletter</div> -->
              <div class="flex-center mb-1 mt-1 offline_courses">
                <u><a class="Socialb plum-text singup_id_name" href="#">Sayed Muhammad Ahtesham</a></u>
              </div>
              <p>mahtesham42@gmail.com</p>


            </div>
            <div class="row sidebar_icons">
              <a href="javascript:void(0)" class="closebtn close_sidbar" onclick="closeNav()">×</a>
              <a href="#"><img src="{{asset('assets/frontend/img/dark_mode.png')}}">Dark Mode</a>
              <a href="#"><img src="{{asset('assets/frontend/img/online_courses.png')}}">Online Courses</a>
              <a href="#"><img src="{{asset('assets/frontend/img/offline_courses.png')}}">Offline Courses</a>
              <a href="#"><img src="{{asset('assets/frontend/img/your_courses.png')}}">Your Courses</a>
              <a href="#"><img src="{{asset('assets/frontend/img/favourites%20.png')}}">Favourites </a>
              <a href="#"><img src="{{asset('assets/frontend/img/currency_rate.png')}}">Currency Rate</a>
              <a href="#"><img src="{{asset('assets/frontend/img/contact_us.png')}}">Contact Us</a>
            </div>
    </div>
</header>
<!--Header End Here  -->
