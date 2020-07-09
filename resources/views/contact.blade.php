@extends('layouts.main')
@section('contact')
    <!--Coantct main start here  -->
    <div class="contact-first-sec">
        <div class="text-center p-center text-white">
            <div>Expanding learning opportunities</div>
        </div>
    </div>

    <div class="address pt-3 pb-3">
        <div class="container">
            <div class="row mb-4">
                <div class="col-10 col-sm-6 mx-auto text-center plum-text">
                    <h3>Our Office</h3>
                    <div class="">
                        {!! $data->contact_us_description !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-11 col-sm-10 mx-auto">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="office-img">
                                <img class="full-img" src="{{asset('setting/'.$data->contact_us_image)}}">
{{--                                <img class="full-img" src="{{asset('assets/frontend/img/office.png')}}">--}}
                            </div>
                            <h5 class="plum-text"><b>{{$data->contact_city}}</b></h5>
                            <div><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<span>{{$data->contact_email}}</span></div>
                            <div><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>{{$data->contact_address}}</span></div>
                            <div><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;<span>{{$data->contact_phone}}</span></div>
                        </div>
                        <form>

                        <div class="col-12 col-sm-6 pt-4">
                            <div class="row">

                                <div class="col-6">
                                    <div class="md-form">
                                        <input type="text" name="name" id="form1" class="form-control">
                                        <label for="form1" >Name</label>
                                    </div>

                                </div>
                                <div class="col-6">

                                    <div class="md-form">
                                        <input type="email" id="form2" name="email" class="form-control">
                                        <label for="form1">Email</label>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">

                                    <div class="md-form amber-textarea active-amber-textarea">
                                        <textarea id="form19" name="msg" class="md-textarea form-control" rows="3"></textarea>
                                        <label for="form19">Description</label>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 text-end">
                                    <button class="btn plum-btn">Submit</button>
                                </div>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="follow plum-bg">
        <div class="row">
            <div class="col-12 col-sm-6 mx-auto text-center text-white">
                <div>

                    <ul class="follow-social">
                        <li>
                             <span class="follow-text">Follow us</span>
                        <li>
                            <a href="{{$data->fb_link}}" target="_blank">  <img src="{{asset('assets/frontend/img/f-fb.png')}}"></a>
                        </li>
                        <li>
                            <a href="{{$data->in_link}}" target="_blank"> <img src="{{asset('assets/frontend/img/f-ln.png')}}"></a>
                        </li>
                        <li>
                            <a href="{{$data->insta_link}}" target="_blank"><img src="{{asset('assets/frontend/img/f-insta.png')}}"></a>
                        </li>
                        <li>
                            <a href="{{$data->twitter_link}}" target="_blank">  <img src="{{asset('assets/frontend/img/f-twi.png')}}"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Coantct main end here  -->

@endsection
