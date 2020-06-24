@extends('backend.admin.master.master')

@section('content')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>


    <div class="col-sm-12">
        <h1 class="m-0 text-dark">Gallery
            <a href="{{url('add-slider-data') }}" class="btn btn-sm btn-success pull-right cust_color" style="margin: 11px;"><i class="fa fa-plus"></i> Add Image</a>
        </h1>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="container">
        <div class="content">
            <div class="table-responsive">
                <table class="table  table-bordered" id="table_id">
                    <thead class="back_blue">
                    <tr>
                        <th>Serial#</th>
                        <th>Image</th>
                        {{--							<th>Created_at</th>							--}}
                        <th width="130" class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $number = 1; ?>
                    @foreach($gallery as $row)
                        <tr>
                            <td>{{ $number }}</td>

                            <?php $number++; ?>
                            <td>
                                @if($row->image!="")
                                    <img src="{{asset('gallery/'.$row->image)}}" style="width: 75px;" >
                                @else
                                    <img src="{{url('image/dummy.jpg')}} " style="width: 75px;">
                                @endif
                            </td>
                            {{--							<td>{{$row->created_at}}  </td>							--}}
                            <td class="text-center">
                                <div class="actions-btns dule-btns">
                                    <a href="javascript:void(0)" data-id="{{$row->id}}" class="btn btn-sm btn-danger removePartner"><i class="fa fa-trash"></i></a>
                                    {{--                                    <a href="{{url('sauce/edit/'.$row->id)}}" class="back_color btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>--}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@section('script')
    <script>

        $(document).ready(function() {
            $('#table_id').DataTable( {
                "order": [[ 2, "desc" ]]
            } );
        } );
        $( "body" ).on( "click", ".removePartner", function () {
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
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
                        },
                        url: '<?php echo url("delete/sauce"); ?>',
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

    </script>
    <script src="/assets/plugins/chart.js/Chart.min.js"></script>
    <script src="/assets/dist/js/pages/dashboard3.js"></script>
@endsection
@endsection
