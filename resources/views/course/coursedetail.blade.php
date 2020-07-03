@extends('layouts.main')
<style>
    .course-heading{
        font-size:20px;

    }
    ul.course-accordian{
        border-bottom:1px solid #570055;
    }
    ul.course-accordian li{
        display:inline-block;
        margin: 7px 10px;
        cursor:pointer;
    }
    .trainer-image{
        width:201;
        height:201px;
        text-align:center;
    }
    .t-img{
        width:100%;
        height:100%;
    }
    ul.trainer-rating{

    }
    ul.trainer-rating li{
        display:inline-block;
        margin: 5px 5px;
    }
    ul.review-rating li{
        display:inline-block;
    }
    .comment-img{
        width:84px;
        height:84px;
    }
    .comment-description{
        width:100%;
        /* height:200px;
        white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    -webkit-line-clamp: 5; */

    }
</style>
@section('online-course')
{{--    {{dd($data->lessons)}}--}}
    <!-- couser-detail main section -->
    <div class="main">
        <div class="plum-bg mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-4 course-name">
                        <h3><b>{{$data->name}}</b></h3>
                        <p>{{$data->description}}</p>
                        <ul class="rating">
                            <li><img src="{{asset('assets/frontend/img/star-fill.png')}}"></li>
                            <li><img src="{{asset('assets/frontend/img/star-fill.png')}}"></li>
                            <li><img src="{{asset('assets/frontend/img/star-fill.png')}}"></li>
                            <li><img src="{{asset('assets/frontend/img/star-fill.png')}}"></li>
                            <li><img src="{{asset('assets/frontend/img/star.png')}}"></li>
                            <li>4.8</li>
                            <li>(1234,567)</li>
                        </ul>
                        <h6 class="mt-3">Trainer : Jose Portilla</h6>
                        <h6>Language : English/Arabic</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-4 feature-box">
                    <div class="feature">
                        <h5><b>What you'll learn</b></h5>
                        <ul class="feature-list">
                            <li><img src="{{asset('assets/frontend/img/tick.png')}}"></li>
                            <li>Use SQL to query a database</li>
                        </ul>
                        <ul class="feature-list">
                            <li><img src="img/tick.png"></li>
                            <li>Use SQL to query a database</li>
                        </ul>
                        <ul class="feature-list">
                            <li><img src="img/tick.png"></li>
                            <li>Use SQL to query a database</li>
                        </ul>
                        <ul class="feature-list">
                            <li><img src="img/tick.png"></li>
                            <li>Use SQL to query a database</li>
                        </ul>
                        <ul class="feature-list">
                            <li><img src="img/tick.png"></li>
                            <li>Use SQL to query a database</li>
                        </ul>
                    </div>
                    <div class="course-cart z-depth-1-half">
                        <div class="course-img">
                            <img src="{{asset('assets/frontend/img/course-1.png')}}" alt="Name">
                            <img class="course-play" src="{{asset('assets/frontend/img/play-course.png')}}" alt="play">
                        </div>
                        <div class="text-center mt-3">
                            <ul class="course-price">
                                <li><h3><b>$18.99</b></h3></li>
                                <li><strike>$30.99</strike></li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="#"><button class="w-90 btn plum-btn">Add to cart</button></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="#"><button class="btn white-btn w-90">Buy now</button></a>
                            </div>
                        </div>
                        <div class="height-2 mt-2"></div>
                        <div class="mt-3">
                            <h4><b>This course includes</b></h4>
                            <div>  9 hours on-demand video</div>
                            <div>  15 articles</div>
                            <div>  5 downloadable resources</div>
                            <div>  Full lifetime access</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="height-2"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 course-description">
                    <h2><b>Description</b></h2>
                    <p>Learn how to use SQL quickly and effectively with this course!</p>
                    <div class="Description-text">
                        You'll learn how to read and write complex queries to a database using one of the most in demand skills - PostgreSQL. These skills are also applicable to any other major SQL database, such as MySQL, Microsoft SQL Server, Amazon Redshift, Oracle, and much more.
                        Learning SQL is one of the fastest ways to improve your career prospects as it is one of the most in demand tech skills! In this course you'll learn quickly and receive challenges and tests along the way to improve your understanding!
                    </div>
                </div>
            </div>
        </div>

        <div class="height-2"></div>

        <div class="container">
            <div class="row p-3">
                <div class="col-12 col-sm-8">
                    <div class="row">
                        <div class="col-6">
                            <h6><b>Course content</b></h6>
                        </div>
                        <div class="col-2">
                            <h6><b>Extend all</b></h6>
                        </div>
                        <div class="col-2">
                            <h6><b>81 Lectures</b></h6>
                        </div>
                        <div class="col-2">
                            <h6><b>08:52:11</b></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4"></div>
            </div>
            <div class="row pb-5">
                <div class="col-12 col-sm-8">
                    <!-- Accordian -->
                    <div class="height">
                        <div id="accordion" role="tablist" aria-multiselectable="true">

                            <!-- Accordion Item 1 -->
                            <div class="card">
                                <div class="card-header" role="tab" id="accordionHeadingOne">
                                    <div class="mb-0 row">
                                        <div class="col-12 no-padding accordion-head">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordionBodyOne" aria-expanded="false" aria-controls="accordionBodyOne"
                                               class="collapsed ">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                <h6>Course Introduction</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div id="accordionBodyOne" class="collapse" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
                                    <div class="card-block col-12 p-0">
                                        <ul class="course-accordian">
                                            <li>
                                                <img src="{{asset('assets/frontend/img/course-dropdown-play.png')}}" alt="Play">
                                            </li>
                                            <li>
                                                <div class="course-heading plum-text"> Welcome Message</div>
                                            </li>
                                        </ul>
                                        <ul class="course-accordian">
                                            <li>
                                                <img src="{{asset('assets/frontend/img/course-dropdown-play.png')}}" alt="Play">
                                            </li>
                                            <li>
                                                <div class="course-heading plum-text"> Welcome Message</div>
                                            </li>
                                        </ul>
                                        <ul class="course-accordian">
                                            <li>
                                                <img src="{{asset('assets/frontend/img/course-dropdown-play.png')}}" alt="Play">
                                            </li>
                                            <li>
                                                <div class="course-heading plum-text"> Welcome Message</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 2 -->
                            <div class="card">
                                <div class="card-header" role="tab" id="accordionHeadingTwo">
                                    <div class="mb-0 row">
                                        <div class="col-12 no-padding accordion-head">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordionBodyTwo" aria-expanded="false" aria-controls="accordionBodyTwo"
                                               class="collapsed ">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                <h6>Section 1: Course Name And Detail</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div id="accordionBodyTwo" class="collapse" role="tabpanel" aria-labelledby="accordionHeadingTwo" aria-expanded="false" data-parent="accordion">
                                    <div class="card-block col-12">
                                        <p>Accordion Item 2 - Body</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet ante at nisi tempus, maximus bibendum
                                            odio consequat. Proin eleifend elit nec facilisis luctus. Donec ut ornare tellus. Proin posuere et leo
                                            vel congue. Nunc ipsum eros, vestibulum non mi et, porttitor tristique nulla. Pellentesque habitant morbi
                                            tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum a turpis eu quam bibendum
                                            interdum a quis erat. Fusce porta odio sed nulla ultrices, gravida viverra nunc imperdiet.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 3 -->
                            <div class="card">
                                <div class="card-header" role="tab" id="accordionHeadingThree">
                                    <div class="mb-0 row">
                                        <div class="col-12 no-padding accordion-head">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordionBodyThree" aria-expanded="false" aria-controls="accordionBodyThree"
                                               class="collapsed ">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                <h6>Section 1: Course Name And Detail</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div id="accordionBodyThree" class="collapse" role="tabpanel" aria-labelledby="accordionHeadingThree" aria-expanded="false" data-parent="accordion">
                                    <div class="card-block col-12">
                                        <p>Accordion Item 3 - Body</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet ante at nisi tempus, maximus bibendum
                                            odio consequat. Proin eleifend elit nec facilisis luctus. Donec ut ornare tellus. Proin posuere et leo
                                            vel congue. Nunc ipsum eros, vestibulum non mi et, porttitor tristique nulla. Pellentesque habitant morbi
                                            tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum a turpis eu quam bibendum
                                            interdum a quis erat. Fusce porta odio sed nulla ultrices, gravida viverra nunc imperdiet.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 3 -->
                            <div class="card">
                                <div class="card-header" role="tab" id="accordionHeadingThree">
                                    <div class="mb-0 row">
                                        <div class="col-12 no-padding accordion-head">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordionBodyThree" aria-expanded="false" aria-controls="accordionBodyThree"
                                               class="collapsed ">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                <h6>Section 1: Course Name And Detail</h6>

                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div id="accordionBodyThree" class="collapse" role="tabpanel" aria-labelledby="accordionHeadingThree" aria-expanded="false" data-parent="accordion">
                                    <div class="card-block col-12">
                                        <p>Accordion Item 3 - Body</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet ante at nisi tempus, maximus bibendum
                                            odio consequat. Proin eleifend elit nec facilisis luctus. Donec ut ornare tellus. Proin posuere et leo
                                            vel congue. Nunc ipsum eros, vestibulum non mi et, porttitor tristique nulla. Pellentesque habitant morbi
                                            tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum a turpis eu quam bibendum
                                            interdum a quis erat. Fusce porta odio sed nulla ultrices, gravida viverra nunc imperdiet.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 3 -->
                            <div class="card">
                                <div class="card-header" role="tab" id="accordionHeadingThree">
                                    <div class="mb-0 row">
                                        <div class="col-12 no-padding accordion-head">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordionBodyThree" aria-expanded="false" aria-controls="accordionBodyThree"
                                               class="collapsed ">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                <h6>Section 1: Course Name And Detail</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div id="accordionBodyThree" class="collapse" role="tabpanel" aria-labelledby="accordionHeadingThree" aria-expanded="false" data-parent="accordion">
                                    <div class="card-block col-12">
                                        <p>Accordion Item 3 - Body</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet ante at nisi tempus, maximus bibendum
                                            odio consequat. Proin eleifend elit nec facilisis luctus. Donec ut ornare tellus. Proin posuere et leo
                                            vel congue. Nunc ipsum eros, vestibulum non mi et, porttitor tristique nulla. Pellentesque habitant morbi
                                            tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum a turpis eu quam bibendum
                                            interdum a quis erat. Fusce porta odio sed nulla ultrices, gravida viverra nunc imperdiet.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion Item 3 -->
                            <div class="card">
                                <div class="card-header" role="tab" id="accordionHeadingThree">
                                    <div class="mb-0 row">
                                        <div class="col-12 no-padding accordion-head">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordionBodyThree" aria-expanded="false" aria-controls="accordionBodyThree"
                                               class="collapsed ">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                <h6>Section 1: Course Name And Detail</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div id="accordionBodyThree" class="collapse" role="tabpanel" aria-labelledby="accordionHeadingThree" aria-expanded="false" data-parent="accordion">
                                    <div class="card-block col-12">
                                        <p>Accordion Item 3 - Body</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet ante at nisi tempus, maximus bibendum
                                            odio consequat. Proin eleifend elit nec facilisis luctus. Donec ut ornare tellus. Proin posuere et leo
                                            vel congue. Nunc ipsum eros, vestibulum non mi et, porttitor tristique nulla. Pellentesque habitant morbi
                                            tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum a turpis eu quam bibendum
                                            interdum a quis erat. Fusce porta odio sed nulla ultrices, gravida viverra nunc imperdiet.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End -->
                </div>
                <div class="col-12 col-sm-4"></div>
            </div>
        </div>

        <div class="height-2"></div>

        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-12 col-sm-8">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-12 col-sm-11">
                            <div class="row">
                                <div class="col-5">
                                    <div class="trainer-image">
                                        <img class="t-img rounded-circle" src="{{asset('assets/frontend/img/download.png')}}" alt="trainer-img">
                                    </div>
                                    <ul class="trainer-rating pl-3">
                                        <li>
                                            <img src="{{asset('assets/frontend/img/trainer-star.png')}}" alt="trainer-star">
                                        </li>
                                        <li>
                                            <h6 class="m-0"><dt>4.7</dt></h6>
                                        </li>
                                        <li>
                                            <div class="plum-text">instructor Rating</div>
                                        </li>
                                    </ul>
                                    <ul class="trainer-rating pl-3">
                                        <li>
                                            <img src="{{asset('assets/frontend/img/comment.png')}}" alt="trainer-star">
                                        </li>
                                        <li>
                                            <h6 class="m-0"><dt>1400</dt></h6>
                                        </li>
                                        <li>
                                            <div class="plum-text">Reviews</div>
                                        </li>
                                    </ul>
                                    <ul class="trainer-rating pl-3">
                                        <li>
                                            <img src="{{asset('assets/frontend/img/student.png')}}" alt="trainer-star">
                                        </li>
                                        <li>
                                            <h6 class="m-0"><dt>2000</dt></h6>
                                        </li>
                                        <li>
                                            <div class="plum-text">Students</div>
                                        </li>
                                    </ul>
                                    <ul class="trainer-rating pl-3">
                                        <li>
                                            <img src="{{asset('assets/frontend/img/course-video.png')}}" alt="trainer-star">
                                        </li>
                                        <li>
                                            <h6 class="m-0"><dt>980</dt></h6>
                                        </li>
                                        <li>
                                            <div class="plum-text">Coures</div>
                                        </li>
                                    </ul>
                                    <ul class="trainer-rating pl-3 mt-3">
                                        <li>
                                            <img src="{{asset('assets/frontend/img/t-fb.png')}}" alt="trainer-star">
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/frontend/img/t-insta.png')}}" alt="trainer-star">
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/frontend/img/t-link.png')}}" alt="trainer-star">
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/frontend/img/t-twi.png')}}" alt="trainer-star">
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-7">
                                    <div class="trainer-description plum-text">
                                        Jose Marcial Portilla has a BS and MS in Mechanical Engineering from Santa Clara University and years of experience as a professional instructor and trainer for Data Science and programming. He has publications and patents in various fields such as microfluidics, materials science, and data science technologies. Over the course of his career he has developed a skill set in analyzing data and he hopes to use his experience in teaching and data science to help other people learn the power of programming the ability to analyze data, as well as present the data in clear and beautiful visualizations. Currently he works as the Head of Data Science for Pierian Data Inc. and provides in-person data science and python
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>

        <div class="height-2"></div>

        <div class="container pt-5 pb-5">

            <!-- Comment Review Section -->
            <div class="row">
                <div class="col-12 col-sm-8">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-12 col-sm-11">
                            <div class="row">
                                <div class="col-5">

                                    <ul class="trainer-rating pl-3">
                                        <li>
                                            <div class="comment-img">
                                                <img class="t-img rounded-circle" src="{{asset('assets/frontend/img/download.png')}}" alt="trainer-star">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="plum-text"><dt>A weak ago</dt></div>
                                            <div class="plum-text">abcom</div>
                                        </li>
                                    </ul>

                                </div>
                                <div class="col-7 mb-3">
                                    <div class="text-center"><h6><dt>Reviews</dt></div>
                                    <div>
                                        <ul class="review-rating mb-3">
                                            <li>
                                                <img src="{{asset('assets/frontend/img/star-review.png')}}" alt="trainer-star">
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/frontend/img/star-review.png')}}" alt="trainer-star">
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/frontend/img/star-review.png')}}" alt="trainer-star">
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/frontend/img/star-review.png')}}" alt="trainer-star">
                                            </li>
                                            <li>
                                                <img src="{{asset('assets/frontend/img/star-r-empty.png')}}" alt="trainer-star">
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="comment-description plum-text">
                                        Jose Marcial Portilla has a BS and MS in Mechanical Engineering from Santa Clara University and years of experience as a professional instructor and trainer for Data Science and programming.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <!-- End Comment Review Section-->
            <div class="row"></div>
            <div class="height-2"></div>
        </div>
    </div>
@endsection
