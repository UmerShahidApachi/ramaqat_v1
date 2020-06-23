<!-- Start your project here-->
<header>
<nav>
    <div class="container d-flex justify-content-between">
        <ul class="ulDBlockMenu">
            <li>
                <img src="{{asset('assets/frontend/img/toggle.png')}}">
            </li>
            <li>
                <a href="{{route('homePage')}}"><img class="animated fadeIn" src="{{asset('assets/frontend/img/logo.png')}}"></a>
            </li>

        </ul>
        <div class="HeaderSearch d-none d-sm-block">
            <input class="SearchInput z-depth-1" type="search" placeholder="Search">
            <img class="plumIcon" src="{{asset('assets/frontend/img/search (2).png')}}">
        </div>
        <ul class="ulDBlock d-none d-sm-block">
            <li>
                <a href="{{ route('login') }}"><img src="{{asset('assets/frontend/img/Signin.png')}}"></a>
            </li>
            <li>
                <span class="font16 plum-text">اللغة العربية</span>
            </li>
        </ul>
    </div>
</nav>
</header>
<!--Header End Here  -->
