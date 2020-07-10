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
                        <input type="number" class="form-control" name="admin_percentage" value="{{$data->admin_percentage}}" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Instagram link</label>
                        <input type="number" class="form-control" name="author_percentage" value="{{$data->author_percentage}}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Twitter Link</label>
                        <input type="number" class="form-control" name="producer_percentage" value="{{$data->producer_percentage}}" required>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success cat" id="cat">
            </div>
        </form>
    </div>


@endsection

