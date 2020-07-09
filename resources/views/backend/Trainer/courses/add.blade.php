@extends('backend.Trainer.layouts.app')
@section('customSection')
<style>
    .form-group .addcourse_label{
        top: -20px;
    }
</style>
    <div class="col-8 container mt-5">

    <form id="ratingForm_Rat" action="{{ route('course_data') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id" id="course_idd">

        <div class="modal-header">
            <h4 class="modal-title" style="color: #570055;">Add Course</h4>
        </div>

            <div class="row">
            <div class="col-12">
            <div class="form-group select-dropdown">
                <label>Category</label>
                <select class="form-control chosen chosen-height" name="category_id[]" multiple required>
                    @foreach($categories as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
            </div>

            </div>
            <div class="row">
            <div class="col-6">
            <div class="form-group">
                <label class="addcourse_label">Course Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            </div>
            <div class="col-6">
            <div class="form-group">
                <label class="addcourse_label">Duration</label>
                <input type="text" class="form-control" name="duration" required>
            </div>
            </div>
            </div>

            <div class="row">
            <div class="col-6">
            <div class="form-group">
                <label class="addcourse_label">Price</label>
                <input type="number" class="form-control" name="price" required>
            </div>
            </div>
            <div class="col-6">
            <div class="btn btn-primary btn-sm float-left">
                <span>Choose file</span>
                <input type="file" name="image" accept="image/*" required>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-12">
            <div class="form-group">
                <label class="addcourse_label">Description</label>
                <textarea id="description"  class="form-control description" name="description" required></textarea>
            </div>
            </div>
            </div>



        <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-success cat" id="cat" value="Submit">
        </div>
    </form>
    </div>

    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('description');
</script>
<script>
    $(".chosen").chosen();
</script>

{{--<script>--}}
{{--  --}}

{{--    $('#ratingForm_Rat').on('submit', function(event){--}}
{{--  event.preventDefault();--}}
{{--  for ( instance in CKEDITOR.instances ) {--}}
{{--        CKEDITOR.instances[instance].updateElement();--}}
{{--    }--}}
{{--  var check = $('#course_idd').val();--}}
{{--    if(check=="")--}}
{{--    { --}}
{{--  $.ajax({--}}
{{--   url:"{{ route('course_data') }}",--}}
{{--   method:"POST",--}}
{{--   data:new FormData(this),--}}
{{--   dataType:'JSON',--}}
{{--   contentType: false,--}}
{{--   cache: false,--}}
{{--   processData: false,--}}
{{--   success:function(data)--}}
{{--   {--}}
{{--        $('#course_idd').val(data.course.id);--}}
{{--        $('#myModal').modal('show');--}}
{{--   }--}}
{{--  })--}}
{{--}else{--}}
{{--    $.ajax({--}}
{{--   url:"{{ route('update-course') }}",--}}
{{--   method:"POST",--}}
{{--   data:new FormData(this),--}}
{{--   dataType:'JSON',--}}
{{--   contentType: false,--}}
{{--   cache: false,--}}
{{--   processData: false,--}}
{{--   success:function(data)--}}
{{--   {--}}
{{--        $('#myModal').modal('show');--}}

{{--   }--}}
{{--  })--}}
{{--}--}}


{{-- });--}}
{{--</script>--}}

@endsection

