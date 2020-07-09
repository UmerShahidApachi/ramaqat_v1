@extends('backend.Trainer.layouts.app')
@section('customSection')
    <div class="container mt-5">
    <form id="course_form">
        @csrf

        <input type="hidden" name="id" id="course_idd">

        <div class="modal-header">
            <h4 class="modal-title">Add Course</h4>
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
                <label>Course Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            </div>
            <div class="col-6">
            <div class="form-group">
                <label>Duration</label>
                <input type="text" class="form-control" name="duration" required>
            </div>
            </div>
            </div>

            <div class="row">
            <div class="col-6">
            <div class="form-group">
                <label>Price</label>
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
                <label>Description</label>
                <textarea id="description"  class="form-control description" name="description" required></textarea>
            </div>
            </div>
            </div>



        <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-success cat" id="cat" value="next">
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
         <form  id="section_form">
            @csrf
            <input type="hidden" name="course_ids" id="course_ids">
            <div class="row">
            <div class="col-12">
            <div class="form-group">
                <label>Section</label>
                <input type="test" class="form-control" name="section" placeholder="section" required>                
            </div>
            </div>
            </div>
            <button type="submit" class="btn btn-success cat">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  <!-- Modal -->
<div id="add_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">

            <input type="hidden" name="course_ids" id="course_ids">

            <button id="add_section" class="btn btn-success cat">Add section</button> <br>
            <button id="add_lesson" class="btn btn-success cat">Add lesson</button> <br>

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

<script>
  

    $('#course_form').on('submit', function(event){
  event.preventDefault();
  for ( instance in CKEDITOR.instances ) {
        CKEDITOR.instances[instance].updateElement();
    }
  var check = $('#course_idd').val();
    if(check=="")
    { 
  $.ajax({
   url:"{{ route('course_data') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data) 
   {
        $('#course_idd').val(data.course.id);
        $('#course_ids').val(data.course.id);
        $('#add_modal').modal('show');
   }
  })
}else{
    $.ajax({
   url:"{{ route('update-course') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
        $('#add_modal').modal('show');
   }
  })
}
 });

    $('#add_section').click(function(){
        $('#add_modal').modal('hide');
        $('#myModal').modal('show');
    });



     $('#section_form').on('submit', function(event){
  event.preventDefault();      
  $.ajax({
   url:"{{ route('add_section') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data) 
   {
        $('#myModal').modal('hide');
        $('#add_modal').modal('show');
   }
  })

 });

</script>

@endsection

