@extends('layouts.main')

@section('profile')

    <head>
        <style>
            .output-img{
                width: 160px;
                height: 150px;
            }
            .switch {
                position: relative;
                display: inline-block;
                width: 40px;
                height: 24px;
            }

            .switch input {display:none;}

            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .1s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 16px;
                width: 16px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked + .slider {
                background-color: #2196F3;
            }

            input:focus + .slider {
                box-shadow: 0 0 1px #2196F3;
            }

            input:checked + .slider:before {
                -webkit-transform: translateX(16px);
                -ms-transform: translateX(16px);
                transform: translateX(16px);
            }

            /* Rounded sliders */
            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }
        </style>
    </head>
    <body style="background: purple">
<div class="container" >

<br>
<br>
    <!-- Default form contact -->
    <center>
    <form class=" border border-light p-" action="#!" style="width: 80%;background: white;border-radius: 15px ">

        <div style="padding: 20px 0px 35px 20px; "  >
            <a href="#" style="text-decoration: none; color: purple; float: left; font-weight: bold " > <-- My Profile</a>
        </div>
        <div style="background: purple" >
            <img src="{{asset('assets/frontend/img/download.png')}}" alt="img" style="border-radi: 10px; width: 10%; padding-bottom: 5px;padding-top: 10px">
            <p style=" padding-bottom: 10px; color: white; font-weight: bold">Faizan</p>
        </div>

            <p >Preview Photo</p>

        <div class="box" style="background: silver;width: 60%;" >

            <img class="output-img" id="output"/>
        </div>
       <br>
        <div class="input-group"  style="width: 60%;">

            <div class="custom-file" >
                <input type="file" class="custom-file-input" id="inputGroupFile01"
                        accept="image/*" onchange="loadFile(event)" >
                <label class="custom-file-label" for="inputGroupFile01">No file Select</label>
            </div>
        </div>


        <br>
        <hr>
        <br>
        <div style="width: 70%">
        <p class="h6" style="float: left">Basics:</p>

        <!-- Name -->
        <input type="text" id="fullname" class="form-control mb-4" placeholder="Full Name" >

        <!-- Email -->
        <input type="email" id="email"  class="form-control mb-4" placeholder="E-mail"  >
        </div>


       <div style="width: 70%">
           <p class="h6" style="float: left">Links:</p>
           <input type="url" class="form-control mb-4" id="facebook" name="facebook" placeholder="www.facebook.com//">
           <input type="url" class="form-control mb-4" id="twitter" name="twitter" placeholder="www.twitter.com//">
           <input type="url" class="form-control mb-4" id="linkedin" name="linkedin" placeholder="www.linkedin.com//">
           <input type="url" class="form-control mb-4" id="youtube" name="youtube" placeholder="www.youtube.com//">

       </div>

        <hr>
        <div style="width: 70%;" >
        <span  style="float: left">Privacy:</span><br>
        <p  style="float: left"> Modify your privacy<br><br> Profile page setting</p>
        </div>
        <br><br>
        <br><br>

        <div style="width: 57%; float: left">

            <input type="checkbox" id="search-engines" name="search-engines" value="search engines">
            <span style="font-size: 14px;">Show your profile in search engines</span>

        </div>
        <br>


        <div style="width: 65.4%; float: left">
            <input type="checkbox" id="show-courses" name="show-courses" value="show courses">
            <span style="font-size: 14px;">Show courses you're taking on your profile page</span><br>
        </div>

        <br>
        <hr>
        <div style="width: 70%">

            <span style="float: left;"> Notifications</span><br>
            <span style="float: left ;  padding-top: 20px;">Turn promotional email notifications from Ramaqat on r off</span>
             <br> <br>
            <label class="switch" style="float: left;">
                <input id="on" type="checkbox">
                <div class="slider round"></div>
            </label>
            <p id="info" style="float: left; "></p>
        </div>
         <div style="padding-bottom: 50px;"></div>
        <!-- Send button -->
        <button class="btn  btn-block" type="submit" style="background: purple;color: white; ">Save</button><br>

    </form>
    <!-- Default form contact -->
    </center>
</div><br>
    </body>
<script>
    $(document).ready(function(){
        $('#on').on('change',function(){
            if(this.checked){
                $("#info").text("on");
            }
            else{
                $("#info").text("off");
            }
        });
    });

    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>

    @endsection
