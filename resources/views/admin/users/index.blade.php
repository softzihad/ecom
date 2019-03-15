@extends('layouts.app2')

@section('content')

  <div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Users</h3>
    </div>
    <div id="main-wrapper">
      <div class="row">
        <div class="col-lg-12 col-md-6">
          @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
          @endif
          <div class="panel panel-white">
            <div class="panel-body">            
              <div class="table-responsive invoice-table">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="col-md-2"><b>Image</b></th>
                            <th class="col-md-6"><b>Name</b></th>
                            <th class="col-md-3"><b>Permissions</b></th>
                            <th class="col-md-1"><b>Delete</b></th>
                          </tr>
                        </thead>
                        <tbody>
                          @if($users->count() > 0)
                            @foreach ($users as $user)
                            <tr>
                              <td><img src="{{ asset($user->profile->image) }}" alt="" height="60" width="60" style="border-radius: 50%;"></td>
                              <td> {{ $user->name }} </td>
                              <td>
                                @if($user->admin)
                                    <a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Remove Permission</a>
                                  @else
                                    <a href="{{ route('user.admin', ['id'=> $user->id]) }}" class="btn btn-xs btn-success">Make Admin</a>
                                @endif
                              </td>
                              <td><a class="btn btn-xs btn-danger btn-addon" data-toggle="modal" data-target="#deleteModal{{ $user->id }}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                            </tr>
                            <div class="modal fade" id="deleteModal{{ $user->id }}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Delete User: {{ $user->name }}</h4>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <div class="alert alert-danger">
                                        <strong>Notice: </strong> Are You Sure to Delete It...
                                      </div>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <a class="btn btn-danger btn-addon" href="{{ route('user.delete', ['id'=> $user->id]) }}"><i class="fa fa-trash" aria-hidden="true"></i> Yes</a>

                                      <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-reply-all" aria-hidden="true"></i> No</button>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div><!-- End The Modal -->
                            @endforeach
                            @else
                                  <tr>
                                    <th colspan="5" class="text-center"><h3 class="text-center">No Users Yet.</h3></th>
                                  </tr>
                          @endif
                        </tbody>
                      </table>
                  </div>
            </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-6"> </div>
      </div><!-- Row -->
    </div><!-- Main Wrapper -->
    
    <div class="page-footer">
        <p>Made with <i class="fa fa-heart"></i> by stacks</p>
    </div>
  </div><!-- /Page Inner -->
@endsection
