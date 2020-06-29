@extends('backend.admin.layouts.app')
@section('customSection')
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success">
              <div class="ct-chart" id="dailySalesChart"></div>
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
                        <th>Name</th>
                        <th>Icon</th>
{{--						<th>Address</th>--}}
{{--                        <th>Phone</th>--}}
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                @if($data)
                    @foreach($data as $row)
                    <tr>
{{--						<td>--}}
{{--							<span class="custom-checkbox">--}}
{{--								<input type="checkbox" id="checkbox1" name="options[]" value="1">--}}
{{--								<label for="checkbox1"></label>--}}
{{--							</span>--}}
{{--						</td>--}}

                        <td>{{$row->name}}</td>
                            <td>
                                @if($row->logo!="")
                                    <img src="{{asset('category/' .$row->logo)}}" style="width: 75px;" >
                                @else
                                    <img src="{{url('image/dummy.jpg')}} " style="width: 75px;">
                                @endif
                            </td>

                            {{--						<td>89 Chiaroscuro Rd, Portland, USA</td>--}}
{{--                        <td>(171) 555-2222</td>--}}
                        <td>

                            <a href="" data-id="{{$row->id}}" id="edit_cat"  class="edit category_edit"><i class="material-icons" data-toggle="" title="Edit">&#xE254;</i></a>
                            <a href="#" data-id="{{$row->id}}"  class="delete removePartner" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>

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

<div id="edit_category" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  id="category_form" method="POST" action="{{url('admin/update/category')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Edit Slider</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body" id="replace1">
                </div>
                <div class="tab-pane" id="settings">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>

    $(document).ready(function() {
        $('#table_id').DataTable( {
            "order": [[ 2, "desc" ]]
        } );
    } );
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
                    url: '<?php echo url("admin/delete/category"); ?>',
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
<script>

    $(document).on('click', '.category_edit', function (evt) {
        var task_id = $( this ).attr( "data-id" );
        var form_data = {
            id: task_id
        }
        $.ajax({
            type: 'get',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            url: '{{url('admin/edit/category')}}',
            data: form_data,
            success: function (response) {
                if(response.status == "success") {
                    var html ="";
                    html += '<input type="hidden" name="id" value="'+response.data.id+ '" >';
                    html += '<div class="form-group">' ;

                    html +=  '<label>Name</label>' ;
                    html += '<input type="text" class="form-control" value="'+response.data.name+ '" name="name" required>' ;
                    html +=  '</div>' ;
                    html += '<div class="btn btn-primary btn-sm float-left">';
                    html +=  '<span>Choose file</span>';
                    html +=  '<input type="file" name="logo" accept="image/*" required>' ;
                    html +=  '</div>';
                    $('#replace1').html(html);
                    $('#edit_category').modal('toggle');

                }
            }
        });
    });
</script>
>>>>>>> 7bcf166d9bff424bb37fc2328be1a1bdf30eb4f3
