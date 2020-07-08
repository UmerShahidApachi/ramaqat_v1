@extends('backend.Trainer.layouts.app')
@section('customSection')
<style>
    .form-group .bmd-label-static {
        top: -20px;
    }
</style>
    <div class="mt-5">
        <form  id="course_form" method="POST" action="{{route('update_profile')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header mb-2">
                <h4 class="modal-title" style="color: #570055">Update Profile</h4>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="{{Auth::user()->address}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Experience</label>
                        <input type="text" class="form-control" name="experience" value="{{Auth::user()->experience}}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" name="country" value="{{Auth::user()->country}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Cnic</label>
                        <input type="number" class="form-control" name="cnic" value="{{Auth::user()->cnic}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" value="{{Auth::user()->date_of_birth}}" required>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="url" class="form-control" name="fb_link" value="{{Auth::user()->fb_link}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Linkedin</label>
                        <input type="url" class="form-control" name="in_link" value="{{Auth::user()->in_link}}" required>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="url" class="form-control" name="twitter_link" value="{{Auth::user()->twitter_link}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type="url" class="form-control" name="insta_link" value="{{Auth::user()->insta_link}}" required>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>About</label>
                        <textarea id="description"  class="form-control description" name="about" required>{!! Auth::user()->about !!}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="btn btn-primary btn-sm float-left">
                    <span>Choose Profile Photo</span>
                    <input type="file" name="image" accept="image/*"  required>
                </div>
            </div>




            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success cat" id="cat" value="Update">
            </div>
        </form>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
