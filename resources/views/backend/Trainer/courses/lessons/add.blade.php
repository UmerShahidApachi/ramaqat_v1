@extends('backend.Trainer.layouts.app')
@section('customSection')
    <form  id="course_form" method="POST" action="{{route('course_data')}}" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
            <h4 class="modal-title">Add Course</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">

            <div class="form-group select-dropdown">
                <label>Category</label>
                <select class="form-control bootstrap-select" name="category_id" required>

                </select>
            </div>

            <div class="form-group">
                <label>Course Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Duration</label>
                <input type="text" class="form-control" name="duration" required>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea id="description"  class="form-control" name="description" required></textarea>
            </div>
            <div class="btn btn-primary btn-sm float-left">
                <span>Choose file</span>
                <input type="file" name="image" accept="image/*" required>
            </div>

        </div>
        {{--                    </div>--}}
        <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-success cat" id="cat">
        </div>
    </form>
@endsection
