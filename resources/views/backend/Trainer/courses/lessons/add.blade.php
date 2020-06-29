@extends('backend.Trainer.layouts.app')
@section('customSection')
    <style>
        .progress { position:relative; width:100%; }
        .bar { background-color: #008000; width:0%; height:20px; }
        .percent { position:absolute; display:inline-block; left:50%; color: #7F98B2;}
    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <div class="container mt-5">
        <form  id="course_form" method="POST" action="{{route('add_lesson')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Add Lesson</h4>
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
            <input type="hidden" name="course_id" value="{{$id}}">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Lesson Number*</label>
                        <input type="number" min="0" class="form-control" name="name" required>
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
                    <div class="btn btn-primary btn-sm float-left">
                        <span>Choose Video*</span>
                        <input type="file" name="video" accept="video/*" required>
                        <div class="progress">
                            <div class="bar"></div >
                            <div class="percent">0%</div >
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
                <div class="col-12">
                    <div class="form-group">
                        <label>Description*</label>
                        <textarea id="description"  class="form-control description" name="description" required></textarea>
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
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
<script type="text/javascript">
    $(function() {
        $(document).ready(function()
        {
            var bar = $('.bar');
            var percent = $('.percent');

            $('form').ajaxForm({
                beforeSend: function() {
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                complete: function(xhr) {
                    // alert('File Uploaded Successfully');
                    // window.location.href = "/fileupload";
                }
            });
        });
    });
</script>
