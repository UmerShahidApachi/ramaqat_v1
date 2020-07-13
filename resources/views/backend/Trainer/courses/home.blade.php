@extends('backend.trainer.layouts.app')
@section('customSection')
<style>
    label{
        top: -20px;
    }
    .HeaderSearch{
        margin:2.5%;
    }
    .crud-opration{
        overflow-y: scroll;
        position: relative;
        
    }
</style>

    {{--    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>--}}
    {{--    <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>--}}

{{--    <div class="content">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header card-header-primary">--}}
{{--                    <div class="table-title">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <h2>My <b>Courses</b></h2>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <a href="{{url('trainer/add-form')}}" class="btn btn-success" data-toggle=""><i--}}
{{--                                        class="material-icons">&#xE147;</i> <span>Add New Course</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h4 class="plum-text"><b>Dashboard</b></h4>
                </div>
            </div>
            <div class="crud-sec z-depth-1-half mt-5">
                <div class="course-heading plum-bg">
                    <div class="row">
                        <div class="col-6">
                            <h4><b>My Course</b></h4>
                        </div>
                        <div class="col-6 text-end">
                          <a href="{{url('trainer/add-form')}}" > <buton class="btn white-btn" data-toggle="" data-target="#">Add New Courses</buton></a>
                        </div>
                    </div>
                </div>
                <div class="crud-opration">
                    <div class="table-responsive">

                        <table class="table table-striped table-hover" id="table_id">
                            <thead>
                            <tr>
                                {{--						<th>--}}
                                {{--							<span class="custom-checkbox">--}}
                                {{--								<input type="checkbox" id="selectAll">--}}
                                {{--								<label for="selectAll"></label>--}}
                                {{--							</span>--}}
                                {{--						</th>--}}
                                <th>Category</th>
                                <th>Name</th>
                                <th>Thumbnail</th>
                                <th>Description</th>
                                <th>Duration</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if($data)
                                @foreach($data as $row)
                                    <tr>
                                        {{--                                            {{dd($row->category)}}--}}
                                        <td>{{$row->category->name}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>
                                            @if($row->thumbnail!="")
                                                <img src="{{asset('course/' .$row->thumbnail)}}"
                                                     style="width: 75px;">
                                            @else
                                                <img src="{{url('image/dummy.jpg')}} " style="width: 75px;">
                                            @endif
                                        </td>
                                        <td>{!! $row->description !!}</td>
                                        <td>{{$row->duration}}</td>
                                        <td>{{$row->created_at}}</td>
                                        <td>
                                            <a href="#" id="show_lessonss" class="{{$row->id}}"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('trainer/edit-course/'.$row->id)}}"><i class="fa fa-edit"></i></a>
                                            <a href="#" data-id="{{$row->id}}"  class="delete removePartner" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>

                                        {{--						<td>89 Chiaroscuro Rd, Portland, USA</td>--}}
                                        {{--                        <td>(171) 555-2222</td>--}}
                                        {{--                                            <td>--}}
                                        {{--                                                <a href="" data-id="{{$row->id}}" id="edit_cat"  class="edit category_edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>--}}
                                        {{--                                                <a href="#" data-id="{{$row->id}}"  class="delete removePartner" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>--}}
                                        {{--                                            </td>--}}

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        <div class="row mt-3">
        <div class="col-6">
                        <ul class="bottom-menu">
                            <li>About Us</li>
                            <li>Blog</li>
                            <li>Licesnses</li>
                        </ul>
                    </div>
        </div>
    </div>
    </div>


    <div id="addCourse" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
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
                                @foreach($categories as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
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
            </div>
        </div>
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
        <button type="button" class="btn btn-default" data-dismiss="modal" id="close_section">Close</button>
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
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"  id="close_add_lesson">
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

    {{--@section('script')--}}

@endsection
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<link rel="stylesheet" href="{{url('assets/sweetalerts/sweetalert.css')}}">
<script src="{{url('assets/sweetalerts/sweetalert.js')}}"></script>

<script>
  
</script>
<script>

    $(document).ready(function () {
        $('#table_id').DataTable({
            "order": [[2, "desc"]]
        });
    });
    $(document).on('click', '.removePartner', function (evt) {
        var task_id = $( this ).attr( "data-id" );
        var form_data = {
            id: task_id
        };
        swal({
            title: "Do you want to delete this Record",
            text: "@lang('packages.delete_package_msg')",
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#F79426',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            showLoaderOnConfirm: true
        }).then( ( result ) => {
            if ( result.value == true ) {
                $.ajax( {
                    type: 'get',
                    headers: {
                        'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
                    },
                    url: '<?php echo url("trainer/delete"); ?>',
                    data: form_data,
                    success: function ( msg ) {
                        swal( "Record Delete Successfully", '', 'success' )
                        setTimeout( function () {
                            location.reload();
                        }, 2000 );
                    }
                } );
            }
        } );

    } );
 $(document).on('click', '#show_lessonss', function () {
    var lesson_id = $(this).attr('class')
  $.ajax({
    url:"{{ url('trainer/get_lesson_section') }}/"+ lesson_id,
   method:"get",
   success:function(data)
   {
    console.log(data);
    alert(data.section.course_id);
        $('#course_idd').val(data.section.course_id);
        $('#course_ids').val(data.section.course_id);
  

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
 $(document).on('click', '#add_lesson', function () {    
    $('#basicExampleModal').modal('hide');
    var course_id = $('#course_ids').val();
    alert(course_id);
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

 $(document).on('click', '#add_section', function () {    
        $('#basicExampleModal').modal('hide');
        $('#myModal').modal('show');
    });


  $(document).on('submit', '#section_form', function () {
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
        html +='<div class="row detail-bg remove_lesson" id="dell_'+val.id+'">';
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
        html +='<div class="row detail-bg remove_lesson" id="dell_'+val.id+'">';
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


    $('#close_section').click(function(){
        $('#myModal').modal('hide');      
        $('#basicExampleModal').modal('show');
    });

     $('#close_add_lesson').click(function(){
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
