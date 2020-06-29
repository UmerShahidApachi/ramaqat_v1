@extends('backend.admin.layouts.app')
@section('customSection')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Used Space</p>
              <h3 class="card-title">49/50
                <small>GB</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">warning</i>
                <a href="javascript:;">Get More Space...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Revenue</p>
              <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Fixed Issues</p>
              <h3 class="card-title">75</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Github
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-twitter"></i>
              </div>
              <p class="card-category">Followers</p>
              <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div>
        </div>
      </div>
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
<<<<<<< HEAD
                            <a href="" data-id="{{$row->id}}" id="edit_cat"  class="edit_category" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
=======
                            <a href="" data-id="{{$row->id}}" id="edit_cat"  class="edit category_edit"><i class="material-icons" data-toggle="" title="Edit">&#xE254;</i></a>
>>>>>>> 293343eaf4fc332f888989678c72b94159792000
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
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
              <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                  <span class="nav-tabs-title">Tasks:</span>
                  <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#profile" data-toggle="tab">
                        <i class="material-icons">bug_report</i> Bugs
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#messages" data-toggle="tab">
                        <i class="material-icons">code</i> Website
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#settings" data-toggle="tab">
                        <i class="material-icons">cloud</i> Server
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                  </ul>
                </div>
            </form>
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
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Employees Stats</h4>
              <p class="card-category">New employees on 15th September, 2016</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Salary</th>
                  <th>Country</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Dakota Rice</td>
                    <td>$36,738</td>
                    <td>Niger</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Minerva Hooper</td>
                    <td>$23,789</td>
                    <td>Curaçao</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Sage Rodriguez</td>
                    <td>$56,142</td>
                    <td>Netherlands</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Philip Chaney</td>
                    <td>$38,735</td>
                    <td>Korea, South</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<<<<<<< HEAD
=======
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
