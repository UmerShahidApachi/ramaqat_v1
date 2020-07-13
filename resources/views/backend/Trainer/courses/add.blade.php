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
      content: "upload";
    }
    .custom-file-input:lang(en)~.custom-file-label::after{
      content: "upload";
        background: purple;
        color: white;
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
    .submit_btn{
        background-color: #570055;
        color: white;
    }
    label.contents{
      display: contents;
    }
    .form-control {
        border: 1px solid #ced4da;
        border-bottom:0px  ;
    }
    .form-control:invalid {
        background-image: linear-gradient(to top,  #5786c0 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
    }
    .modal-header, .modal-footer{
      border-color: white;
    }
    .add-course{
        width: 100%;
        height: 250px;
        border: 1px solid white;
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
                <div class="form-group">
                    <span style="float: left"> Course Image</span>
                    <img class="add-course" id="addcourse"/>
                </div>

            </div>
            <div class="col-6">
                <div class="form-group" style="padding-top: 30px">
                    <p>Upload your course image here.It must meet our <a href="#" style="color: blue" >course image</a> <br>
                        <a href="#" style="color: blue">quality standreds</a>
                        to be accepted.Important guidelines:750X422 pixels; .jpg, .jpeg , .gif, or .png on text on the image </p>
                    <div class="custom-file" >
                        <input type="file" class="custom-file-input" id="inputGroupFile02"
                               accept="image/*" onchange="loadFile(event)" name="image" >
                        <label class="custom-file-label" for="inputGroupFile02">No file Select</label>
                    </div>
                </div>
            </div>
        </div>



            <div class="row">
              <div class="col-6">
                <div class="form-group">
                    <label class="contents">Course Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group ">
                    <label class="contents">Producer Name</label>
                    <select class="form-control chosen chosen-height" name="producer_name"  required>
                        @foreach($producer as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-6">
                <div class="form-group select-dropdown">
                    <label  class="contents">Category</label>
                    <select class="form-control chosen chosen-height"  name="category_id[]" multiple required>

                        @foreach($categories as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group select-dropdown">
                    <label class="contents">Auther</label>
                     <select class="form-control chosen chosen-height cat_height" name="author[]" multiple >

                      @foreach($trainer as $auther)
                      <option value="{{$auther->id}}">{{$auther->name}}</option>
                      @endforeach
                    </select>
                </div>
              </div>
            </div>



            <div class="row">
              <div class="col-6">
                <div class="form-group">
                    <label class="contents">Price</label>
                    <input type="number" class="form-control" name="price" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                    <label class="contents">Discount Price</label>
                    <input type="number" class="form-control" name="discount_price" >
                </div>
              </div>
            </div>

             <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <label class="contents">Short Description</label>
                    <textarea id="shortdescription" class="form-control description" name="shortdescription" required></textarea>
                </div>
              </div>
              </div>
        <div class="row">
              <div class="col-12">
                <div class="form-group bmd-form-group">
                    <label class="contents">Brief Description</label>
                    <textarea id="briefdescription"  class="form-control description" name="briefdescription" required></textarea>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-6">
                <div class="form-group bmd-form-group">
                    <p>Upload your course demo video here.It must meet our <a href="#" style="color: blue" >Demo Video</a> <br>
                        <a href="#" style="color: blue">quality standreds</a>
                        to be accepted.Important guidelines:.wmv, .mpg, .mpeg or .mp4  </p>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                      aria-describedby="inputGroupFileAddon01" name="promo_video" accept="video/*"  required>
                    <label class="custom-file-label" for="inputGroupFile01">Choose video</label>
                  </div>
              </div>
                 <!-- <div class="btn btn-primary btn-sm float-left">
                  <span>Choose file</span>
                  <input type="file" name="attachment[]" accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/msword,image/*" multiple required>
                </div> -->
              </div>
              <div class="col-6">
                <div class="form-group bmd-form-group">
                    <p>Upload your course extra attachments here.You can add multiple files <br>
                        <a href="#" style="color: blue">quality standreds</a>
                        to be accepted.Important guidelines:750X422 pixels; .jpg, .jpeg , .gif, .png, .pdf, or .word</p>
                  <div class="custom-file">

                    <input type="file" class="custom-file-input" id="inputGroupFile03"
                      aria-describedby="inputGroupFileAddon01" name="attachment[]" accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/msword,image/*" multiple>
                    <label class="custom-file-label" for="inputGroupFile03">Choose Attachment</label>
                  </div>
              </div>
                 <!-- <div class="btn btn-primary btn-sm float-left">
                  <span>Choose file</span>
                  <input type="file" name="attachment[]" accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/msword,image/*" multiple required>
                </div> -->
              </div>
            </div>

             <div class="row">
                <div class="col-6">
                  <label class="switch" style="float: left;"> free Course
                <input  name="free_course" type="checkbox">
                <div class="slider round"></div>
            </label>
                </div>
              </div>


              <!-- <div class="row">
                <div class="col-6">
                  <div class="form-group bmd-form-group">
                  <label>Cover</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile05"
                      aria-describedby="inputGroupFileAddon01" name="image" accept="image/*">
                    <label class="custom-file-label" for="inputGroupFile05">Choose image</label>
                  </div> -->

{{--                 <!--  <div class="btn btn-primary btn-sm float-left">--}}

{{--                      <span>Choose file</span>--}}
{{--                      <input type="file" name="image" accept="image/*" required>--}}
{{--                  </div> -->--}}

               <!--  </div>
              </div>


            </div> -->


        <div class="modal-footer">
            <input type="button" class="btn white-btn" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn white-btn submit_btn" id="" value="Submit">
        </div>
    </form>
    </div>

    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:purple">
        <button type="button" class="close close_section" data-dismiss="modal" style="float: right">&times;</button>
        <h4 class="modal-title">Add Section</h4>
      </div>
      <div class="modal-body"style="padding-top: 40px" >
         <form  id="section_form">
            @csrf
            <input type="hidden" name="course_ids" id="course_ids">
            <div class="row">
            <div class="col-12">
            <div class="form-group" >
                <label>Section</label>
                <input type="test" class="form-control" name="section" placeholder="section" required>
            </div>
            </div>
            </div>
            <button type="submit" class="btn btn-success cat" style="border-radius: 15px;background-color: purple !important;">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close_section" data-dismiss="modal" style="border: 1px solid purple; border-radius: 15px; background-color: white !important; color: purple">Close</button>
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
        <button type="button" class="close close_add_lesson" data-dismiss="modal" style="position: absolute;right: 20px;">&times;</button>
        <h4 class="modal-title">Add Lesson</h4>
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
                  <label>video</label>
                  <div class="custom-file mb-3">

                  <input type="file" class="custom-file-input" id="customFile2" name="video" accept="video/*">
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
                  <label>document</label>
                  <div class="custom-file mb-3">

                  <input type="file" class="custom-file-input" id="customFile2" name="document" accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/msword">
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
                          <input type="checkbox" name="video_lock" class="form-check-input" value="1">Video Lock
                        </label>
                      </div>
                  </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>Description*</label>
                        <textarea id="lessonss_desc"  class="form-control description" name="description" required></textarea>
                    </div>
                </div>
            </div>



            <div class="modal-footer">
                <input type="button" class="btn btn-default close_add_lesson" data-dismiss="modal" value="Cancel"  >
                <input type="submit" class="btn btn-success cat" id="cat">
            </div>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="close_add_lesson">Close</button>
      </div> -->
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
        <h4 class="modal-title">edit lesson</h4>
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
                        <select class="form-control" name="sections" id="section2" required>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                      <div class="form-check-inline" id="checkbox_setting">
                        <label class="form-check-label">
                          <input type="checkbox" name="video_lock" class="form-check-input" id="video_lock" value="1">Video Lock
                        </label>
                      </div>
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
                <input type="button" class="btn btn-default" data-dismiss="modal" id="edit_lesson_cancel" value="Cancel">
                <input type="submit" class="btn btn-success cat" id="cat">
            </div>
        </form>
      </div>
  <!--     <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
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
<!-- <div><h6>2 Section / 5 Lesson</h6></div> -->
</li>
<li>
<!-- <img src="img/traneedashboard/clock.png"><span class="ml-3"><b>13:00</b></span> -->
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



0<-- footerbutton -->
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
<link rel="stylesheet" href="{{url('assets/sweetalerts/sweetalert.css')}}">
<script src="{{url('assets/sweetalerts/sweetalert.js')}}"></script>

<script>
CKEDITOR.replace('lesson_desc');
    CKEDITOR.replace('lessonss_desc');
    CKEDITOR.replace('briefdescription');

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
        $("#section").find('option').remove();
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
   for ( instance in CKEDITOR.instances ) {
        CKEDITOR.instances[instance].updateElement();
    }
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
        html +='<div class="row detail-bg remove_lesson" id="dell_'+val.id+'">';
        html +='<div class="col-6 col-sm-4 c-text">';
        html +='<div>';
        html +='<img src="'+ origin +'/public/img/traneedashboard/lession.png"><span class="mr-3 ml-3">'+val.title +'#' + val.lesson_no +'</span>';
        html +='</div>';
        html +='</div>';
        html +='<div class="col-6 col-sm-4 text-center">';
        html +='<div>';
        html +='<span class=" plum-text"><b>'+val.video_duration + '</b></span>';
        html +='</div>';
        html +='</div>';
        html +='<div class="col-12 col-sm-4 text-end">';
        html +='<a class="edit-btn lessons_edit" id="'+val.id+'" href="#" >Edit</a>';
        html +='<a class="edit-btn lessons_del" id="'+val.id+'" href="#" >Delete</a>';
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
    if (data.lesson.video_lock==1) {
      $('#video_lock').attr( "checked", true );
    }else{
      $('#video_lock').attr( "checked", true );
    }
        $('#lesson_num').val(data.lesson.lesson_no);
        $('#lesson_name').val(data.lesson.title);
        // $('#lesson_desc').text(data.lesson.description);
        console.log(data);
        console.log(data.lesson.description);

        CKEDITOR.instances.lesson_desc.setData(data.lesson.description);
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
    var origin   = window.location.origin;
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
        html +='<div class="row detail-bg remove_lesson" id="dell_'+val.id+'">';
        html +='<div class="col-6 col-sm-4 c-text">';
        html +='<div>';
        html +='<img src="'+ origin +'/public/img/traneedashboard/lession.png"><span class="mr-3 ml-3">'+val.title + '#' + val.lesson_no +'</span>';
        html +='</div>';
        html +='</div>';
        html +='<div class="col-6 col-sm-4 text-center">';
        html +='<div>';
        html +='<span class=" plum-text"><b>'+val.video_duration + '</b></span>';
        html +='</div>';
        html +='</div>';
        html +='<div class="col-12 col-sm-4 text-end">';
        html +='<a class="edit-btn lessons_edit" id="'+val.id+'" href="#" >Edit</a>';
        html +='<a class="edit-btn lessons_del" id="'+val.id+'" href="#" >Delete</a>';
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
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('addcourse');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };


    $('.close_section').click(function(){
        $('#myModal').modal('hide');
        $('#basicExampleModal').modal('show');
    });

     $('.close_add_lesson').click(function(){
        $('#lessonModal').modal('hide');
        $('#basicExampleModal').modal('show');
    });

      $('#edit_lesson_cancel').click(function(){
        $('#edit_lesson').modal('hide');
        $('#basicExampleModal').modal('show');
    });

$('body').on('click','.lessons_del',function(){
            var lesson_id = $(this).attr('id');
            // var course_id = $('#lesson_course_id').val();
            swal({
      title: "Do you want to delete this details",
      text: "@lang('packages.delete_package_msg')",
      type: 'info',
      showCancelButton: true,
      confirmButtonColor: '#F79426',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes',
      showLoaderOnConfirm: true
    }).then( ( result ) => {
      if ( result.value == true ) {
            $.ajax({
   url:"{{ url('trainer/delete_lessons') }}/"+ lesson_id,
   method:"get",

   success:function(data)
   {
      swal({
           title: "Response",
           text: "Record Delete Successfully",
           type: 'info',
                        });
      console.log(data);
        $('#dell_'+data.data).remove();



   }
  })
        }
            } );
     } );
</script>


@endsection

