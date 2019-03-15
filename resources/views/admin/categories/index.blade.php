@extends('layouts.app2')

@section('content')

  <div class="page-inner">
    <div class="page-title">
      <h3 class="breadcrumb-header">Categories</h3>
    </div>
    <div id="main-wrapper">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="panel panel-white">
              <div class="panel-heading clearfix">
                  <h4 class="panel-title"></h4>
              </div>
              <div class="panel-body">
                  <div class="table-responsive invoice-table">
                      <table class="table">
                          <thead>
                            <tr>
                              <th class="col-md-2"><b>ID</b></th>
                              <th class="col-md-8"><b>Category Name</b></th>
                              <th class="col-md-1"><b>Action</b></th>
                            </tr>
                        </thead>
                        <tbody>
                          @if($categories->count() > 0)
                            @foreach($categories as $cat)
                              <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>

                                <td><a class="btn btn-primary btn-addon" data-toggle="modal" data-target="#editModal{{ $cat->id }}"><i class="fa fa-spin fa-refresh"></i> Edit</a></td>
                                <td><a class="btn btn-danger btn-addon" data-toggle="modal" data-target="#deleteModal{{ $cat->id }}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                                
                              </tr>

                              <!-- Start The Modal -->
                              <div class="modal fade" id="editModal{{ $cat->id }}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Update Category: {{ $cat->name }}</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <form action="{{ route('catagory.update',['id'=> $cat->id]) }}" method="post">
                                         {{ csrf_field() }}

                                         <div class="form-group">
                                           <label for="name">Name</label>
                                           <input type="text" name="name" value="{{ $cat->name }}" class="form-control">
                                         </div>

                                         <div class="form-group">
                                           <button class="btn btn-info" type="submit">Update Category</button>
                                         </div>
                                      </form>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div><!-- End The Modal -->


                              <div class="modal fade" id="deleteModal{{ $cat->id }}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Delete Category: {{ $cat->name }}</h4>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <div class="alert alert-danger">
                                        <strong>Danger!</strong> Are You Sure to Delete It...
                                      </div>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <a class="btn btn-danger btn-addon" href="{{ route('category.delete', ['id' => $cat->id]) }}"><i class="fa fa-trash" aria-hidden="true"></i> Yes</a>

                                      <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-reply-all" aria-hidden="true"></i> No</button>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div><!-- End The Modal -->
                            @endforeach
                          @else
                            <tr>
                              <th colspan="5" class="text-center"><h3 class="text-center">No Tags Yet.</h3></th>
                            </tr>
                          @endif
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6"></div>
      </div><!-- Row -->
    </div><!-- Main Wrapper -->

    <div class="page-footer">
    <p>Made with <i class="fa fa-heart"></i> by Zihad</p>
    </div>
</div><!-- /Page Inner -->
@endsection
