@extends('backend.admin.layouts.app')
@section('customSection')
    <div class="container mt-5">
        <form  id="course_form" method="POST" action="{{route('update_settings')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
            <h4 class="modal-title">Settings</h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Facebook link</label>
                        <input type="url" class="form-control" name="fb_link" value="{{$data->fb_link}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Instagram link</label>
                        <input type="url" class="form-control" name="insta_link" value="{{$data->insta_link}}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Twitter Link</label>
                        <input type="url" class="form-control" name="twitter_link" value="{{$data->twitter_link}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Linkedin Link</label>
                        <input type="url" class="form-control" name="in_link" value="{{$data->in_link}}" required>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" name="location" value="{{$data->contact_city}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="{{$data->contact_address}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{$data->contact_phone}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{$data->contact_email}}" required>
                    </div>
                </div>

            </div>
            <div class="row">

            <div class="col-6">
                <div class="btn btn-primary btn-sm float-left">
                    <span>About Us Image</span>
                    <input type="file" name="image" accept="image/*"  required>
                </div>
            </div>
                <div class="col-6">
                <div class="btn btn-primary btn-sm float-left">
                    <span>Contact Us Image</span>
                    <input type="file" name="image2" accept="image/*"  required>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label> About Us Description</label>
                        <textarea id="description"  class="form-control description" name="description" required>{!! $data->about_us_description !!}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label> Contact Us Description</label>
                        <textarea id="contact_desc"  class="form-control description" name="contact_desc" required>{!! $data->contact_us_description !!}</textarea>
                    </div>
                </div>
            </div>



            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success cat" id="cat">
            </div>
        </form>
    </div>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
    <script>
        CKEDITOR.replace('contact_desc');
    </script>
    <script>
        $(".chosen").chosen();
    </script>

@endsection

