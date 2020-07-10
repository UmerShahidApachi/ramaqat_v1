@extends('backend.trainer.layouts.app')
@section('customSection')
<style>
    .form-group .bmd-label-static{
        top: -20px;
    }
    #add_cource_scroll{
      position: relative;
      overflow-y: scroll;
      height: 73vh;
    }
    .custom-file-label:after{
      content: "Choose file";
    }
    .custom-file-input:lang(en)~.custom-file-label::after{
      content: "Choose file";
    }
    #checkbox_setting{
      margin-top: 9%;
    }
    .bg_setting ,.bg_color{
      background-color:#570055 !important;

    }
    .font_color{
      color: #570055 !important;
    }
</style>
    <div class="container mt-5" id="add_cource_scroll">
    <form id="course_formss">
        @csrf
        <input type="hidden" name="id" id="course_idd">

        <div class="modal-header">
            <h4 class="modal-title" style="color: #570055;">Add Course</h4>
        </div>

            <div class="row">
              <div class="col-6">
                <div class="form-group select-dropdown">
                    <label>Category</label>
                    <select class="form-control chosen chosen-height" name="category_id[]" multiple required>
                        @foreach($categories as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group select-dropdown">
                    <label>Auther</label>
                     <select class="form-control chosen chosen-height" name="" multiple required>                        
                      <option value=""></option>
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
                  <label>Name</label>
                  <input type="text" class="form-control" name="newname">
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
              <div class="form-group">
                  <label>Discount Price</label>
                  <input type="number" class="form-control" name="discount_price" required>
              </div>
              </div>


            </div>
            <div class="row">
              <div class="col-6">
                <label>Attachment</label>

                 <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="customFile2" name="attachment" accept="image/*">
                  <label class="custom-file-label" for="customFile1">No file attached</label>
                </div>

                 <!-- <div class="btn btn-primary btn-sm float-left">
                  <span>Choose file</span>
                  <input type="file" name="attachment[]" accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/msword,image/*" multiple required>
                </div> -->
              </div>

              <div class="col-6">
                <label>Cover Image</label>
                 <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="customFile2" name="image" accept="image/*">
                  <label class="custom-file-label" for="customFile1">No file attached</label>
                </div>
               <!--  <div class="btn btn-primary btn-sm float-left">

                    <span>Choose file</span>
                    <input type="file" name="image" accept="image/*" required>
                </div> -->
              </div>

            </div>
            <div class="row">
            <div class="col-12 mt-4">
            <div class="form-group">
                <label>Description</label>
                <textarea id="description"  class="form-control description" name="description" required></textarea>
            </div>
            </div>
            </div>



        <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-success cat" id="" value="Submit">
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
        <h4 class="modal-title">Add Section</h4>
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
<div id="lessonModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content ">
      <div class="modal-header bg_color p-3">
        <button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 20px;">&times;</button>
        <h4 class="modal-title">Add Section</h4>
      </div>
      <div class="modal-body">
        <form id="lesson_form" >
            @csrf
            <div class="modal-header mb-3">
                <h4 class="modal-title font_color ">Add Lesson</h4>
            </div>

{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="form-group select-dropdown">--}}
{{--                        <label>Category</label>--}}
{{--                        <select class="form-control" name="category_id" required>--}}
{{--                            @foreach($categories as $c)--}}
{{--                                <option value="{{$c->id}}">{{$c->name}}</option>--}}

{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
            <input type="hidden" name="course_id" id="lesson_course_id" value="">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Lesson Number*</label>
                        <input type="number" min="0" class="form-control" name="l_num" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Lesson Name*</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                  <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="customFile2" name="image" accept="image/*">
                  <label class="custom-file-label" for="customFile1">No file attached</label>
                </div>
                    <!-- <div class="btn btn-primary btn-sm float-left">
                        <span>Choose Video*</span>
                        <input type="file" name="video" accept="video/*" required>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow=""
                             aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                            0%
                        </div>
                    </div>
                        <div id="success">

                        </div>
                    </div> -->
                </div>
                <div class="col-6">
                  <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="customFile2" name="image" accept="image/*">
                  <label class="custom-file-label" for="customFile1">No file attached</label>
                </div>
                    <!-- <div class="btn btn-primary btn-sm float-left">
                        <span>Choose Document (Optional)</span>
                        <input type="file" name="document" >
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Section*</label><br>
                        <select class="form-control" name="sections" id="section" required>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                      <div class="form-check-inline" id="checkbox_setting">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option select
                        </label>
                      </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>Description*</label>
                        <textarea id=""  class="form-control description" name="description" required></textarea>
                    </div>
                </div>
            </div>



            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success cat" id="cat">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="edit_lesson" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Section</h4>
      </div>
      <div class="modal-body">
        <form id="update_lesson_form" >
            @csrf
            <input type="hidden" name="course_id" id="les_course_id">
            <div class="modal-header">
                <h4 class="modal-title">Add Lesson</h4>
            </div>
            <input type="hidden" name="course_id" id="lesson_courses_id" value="">
            <input type="hidden" name="id" id="lesson_id" value="">

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Lesson Number*</label>
                        <input type="number" min="0" class="form-control" name="l_num" id="lesson_num" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Lesson Name*</label>
                        <input type="text" class="form-control" name="name" id="lesson_name" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="btn btn-primary btn-sm float-left">
                        <span>Choose Video*</span>
                        <input type="file" name="video" accept="video/*" >
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow=""
                             aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                            0%
                        </div>
                    </div>
                        <div id="success">

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="btn btn-primary btn-sm float-left">
                        <span>Choose Document (Optional)</span>
                        <input type="file" name="document" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Section*</label><br>
                        <select name="sections" id="section2" required>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>Description*</label>
                        <textarea id="lesson_desc"  class="form-control description" name="description" required></textarea>
                    </div>
                </div>
            </div>



            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success cat" id="cat">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header plum-bg">
<ul class="header-list">
<li>
<div><h5 class="modal-title" id="exampleModalLabel"><b>Courese Content</b></h5></div>
<div><h6>2 Section / 5 Lesson</h6></div>
</li>
<li>
<img src="img/traneedashboard/clock.png"><span class="ml-3"><b>13:00</b></span>
</li>
<li>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</li>
</ul>

</div>
<div class="modal-body">

<!-- course list heading-->
<ul class="course-list-sec mb-4">
<li>
<!-- Forst empty box -->
</li>
  <li>
    <div class="row">
      <div class="col-12">
        <div class="col-6 col-sm-4">
          <div class="my_section">
            <div>
               <h5 class="plum-text"><b></b></h5>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-4 text-center">
          <div>
          <!-- <span class="plum-text"><b>8:00</b></span> -->
          </div>
        </div>
        <div class="col-4 col-sm-4 text-end">
        </div>

        <!-- inner body -->
        <ul class="course-list-sec">
          <div class="show_lesson">
          </div>
        </ul>

      <!-- close -->
    </div>
  </div>
  </li>
</ul>

<!-- course list --

<ul class="course-list-sec">
<div class="show_lesson">

</div>

</ul>



<!-- footerbutton -->
<div class="row mt-5">
<div class="col-12 col-sm-8 mx-auto">
<div class="row btn-row">
<div class="col-12 col-sm-5">
<button id="add_section" class="btn btn-w-100">+ Add Section</button>
</div>
<div class="col-12 col-sm-2 text-center">
Or
</div>
<div class="col-12 col-sm-5">
<button id="add_lesson" class="btn btn-w-100">+ Add Lession</button>
</div>
</div>
</div>
</div>
</div>
<!-- <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div> -->
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


    $('#course_formss').on('submit', function(event){
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
        $('#basicExampleModal').modal('show');
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
        $('#basicExampleModal').modal('show');
   }
  })
}
 });

    $('#add_lesson').click(function(){
    $('#basicExampleModal').modal('hide');
    var course_id = $('#course_idd').val();
    $.ajax({
   url:"{{ url('trainer/get_section') }}/"+ course_id,
   method:"get",
   success:function(data)
   {
        var i;
        for (i = 0; i < data.data.length; i++) {
        $("#section").append(new Option(data.data[i].section, data.data[i].id));
    }
        $('#lesson_course_id').val(course_id);
        $('#lessonModal').modal('show');
   }
  })
    });

    $('#add_section').click(function(){
        $('#basicExampleModal').modal('hide');
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
        // for (i = 0; i < data.section.length; i++) {
        // find('.show_section').text(data.section[i].section +"");

        var html = '';
        html +='<div class="remove_section">';
        html +='<h5 class="plum-text"><b>'+ data.section.section + ':Section</b></h5>';
        html +='</div>';
        $('.my_section').append(html);

    // }
        $('#basicExampleModal').modal('show');
   }
  })

 });

        $('#lesson_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"{{route('add_lesson')}}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
        $('#lessonModal').modal('hide');
        $('.remove_section').remove();
        $('.remove_lesson').remove();
            $.each(data.section, function( index, value ) {
            var html_1 = '';
        html_1 +='<div class="remove_section">';
        html_1 +='<h5 class="plum-text"><b>'+ value.section + ':Section</b></h5>';
        html_1 +='</div>';
        $('.my_section').append(html_1);

        if(typeof(value.lessons) != "undefined" && value.lessons !== null) {
            $.each(value.lessons, function( indx, val) {
        var html = '';
        html +='<div class="row detail-bg remove_lesson">';
        html +='<div class="col-6 col-sm-4 c-text">';
        html +='<div>';
        html +='<img src="img/traneedashboard/lession.png"><span class="mr-3 ml-3">'+val.title + val.lesson_no +'</span>';
        html +='</div>';
        html +='</div>';
        html +='<div class="col-6 col-sm-4 text-center">';
        // html +='<div>';
        // html +='<span class=" plum-text"><b>8:00</b></span>';
        // html +='</div>';
        html +='</div>';
        html +='<div class="col-12 col-sm-4 text-end">';
        html +='<a class="edit-btn lessons_edit" id="'+val.id+'" href="#" >Edit</a>';
        html +='</div>';
        html +='</div>';
         $('.show_lesson').append(html);
         });
     }
         });
        $('#basicExampleModal').modal('show');

   }
  })

 });
        $('body').on('click','.lessons_edit',function(){
            var lesson_id = $(this).attr('id');
            // var course_id = $('#lesson_course_id').val();
            $.ajax({
   url:"{{ url('trainer/edit_lessons') }}/"+ lesson_id,
   method:"get",

   success:function(data)
   {
        $('#basicExampleModal').modal('hide');
        var i;
        for (i = 0; i < data.data.length; i++) {
        $("#section2").append(new Option(data.data[i].section, data.data[i].id));
    }
        $('#lesson_num').val(data.lesson.lesson_no);
        $('#lesson_name').val(data.lesson.title);
        $('#lesson_desc').text(data.lesson.description);
        $('#lesson_courses_id').val(data.lesson.course_id);
        $('#lesson_id').val(data.lesson.id);


        $('#edit_lesson').modal('show');
   }
  })
        });

        $('#update_lesson_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"{{route('update_lesson')}}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
        $('#edit_lesson').modal('hide');
        $('.remove_section').remove();
        $('.remove_lesson').remove();
            $.each(data.section, function( index, value ) {
            var html_1 = '';
        html_1 +='<div class="remove_section">';
        html_1 +='<h5 class="plum-text"><b>'+ value.section + ':Section</b></h5>';
        html_1 +='</div>';
        $('.my_section').append(html_1);

        if(typeof(value.lessons) != "undefined" && value.lessons !== null) {
            $.each(value.lessons, function( indx, val) {
        var html = '';
        html +='<div class="row detail-bg remove_lesson">';
        html +='<div class="col-6 col-sm-4 c-text">';
        html +='<div>';
        html +='<img src="img/traneedashboard/lession.png"><span class="mr-3 ml-3">'+val.title + val.lesson_no +'</span>';
        html +='</div>';
        html +='</div>';
        html +='<div class="col-6 col-sm-4 text-center">';
        // html +='<div>';
        // html +='<span class=" plum-text"><b>8:00</b></span>';
        // html +='</div>';
        html +='</div>';
        html +='<div class="col-12 col-sm-4 text-end">';
        html +='<a class="edit-btn lessons_edit" id="'+val.id+'" href="#" >Edit</a>';
        html +='</div>';
        html +='</div>';
         $('.show_lesson').append(html);
         });
     }
         });
        $('#basicExampleModal').modal('show');

   }
  })

 });

</script>


@endsection

