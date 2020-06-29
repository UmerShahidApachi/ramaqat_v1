@extends('backend.Trainer.layouts.app')
@section('customSection')
    {{--    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>--}}
    {{--    <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>--}}
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>My <b>Courses</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{url('trainer/add-lesson-form')}}" class="btn btn-success" data-toggle=""><i
                                        class="material-icons">&#xE147;</i> <span>Add New Course</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
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
                                            <td>{{$row->description}}</td>
                                            <td>{{$row->duration}}</td>
                                            <td>{{$row->created_at}}</td>
                                            <td><a href="{{url('view-lessons/'.$row->id)}}"><button>View Lessons</button></a></td>

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
        </div>
    </div>


    {{--@section('script')--}}

@endsection
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
<script>

    $(document).ready(function () {
        $('#table_id').DataTable({
            "order": [[2, "desc"]]
        });
    });


</script>
