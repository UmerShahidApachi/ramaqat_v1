@extends('backend.admin.master.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Slider Image</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Slider Image</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('alert'))
                        <div class="alert alert-danger">
                            {{ Session::get('alert') }}
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ url('store/image') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="form-group">
                                    <label for="title">Gallery Image</label>
                                    <label style="display: none;">
                                        <input id="images" type="file"  name="item_image">

                                    </label>
                                    <div class="dummi-img">

                                        <img id="blah" src="{{url('image/dummy.jpg')}}" style=" width: 170px; height: 170px; padding: 9px; border-radius: 50%;" />
                                    </div>
                                    <a style="margin-top: 8px;color: #fff; background-color: #ee8322; border-color: #ee8322;" class="btn btn-primary" id="add_images" href="#">Browse image</a>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn pl-5 pr-5 btn-success" style="margin-bottom: 10px;">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@section('script')
    <script>
        $('#add_images').click(function(){
            $('#images').click();
        });

        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#images").change(function() {
            readURL(this);
        });


    </script>


@endsection
@endsection
