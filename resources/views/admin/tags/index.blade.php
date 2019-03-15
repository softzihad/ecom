@extends('layouts.app2')

@section('content')
  <div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">All Tags</h3>
    </div>
    <div id="main-wrapper">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
          @endif
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
                            <th class="col-md-9"><b>Tag Name</b></th>
                            <th class="col-md-1"><b>Action</b></th>
                          </tr>
                        </thead>
                        <tbody>
                          @if($tags->count() > 0)
                            @foreach ($tags as $tag)
                            <tr>
                              <td>{{ $tag->id }}</td>
                              <td>{{ $tag->tag }}</td>

                              <td><a data-toggle="modal" data-target="#subeditModal{{ $tag->id }}" class="btn btn-info btn-addon"><i class="fa fa-spin fa-refresh"></i> Edit</a></td>

                              <td><a data-toggle="modal" data-target="#deleteModal{{ $tag->id }}" class="btn btn-danger btn-addon"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td> 
                              
                            </tr>

                            <!--Start The Edit Modal -->
                            <div class="modal fade" id="subeditModal{{ $tag->id }}">
                              <div class="modal-dialog">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">Update Sub-Category: {{ $tag->name }}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>

                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    <form action="{{ route('tag.update', ['id'=> $tag->id]) }}" method="post">
                                       {{ csrf_field() }}

                                       <div class="form-group">
                                         <label for="tag">tag</label>
                                         <input type="text" name="tag" class="form-control" value="{{ $tag->tag }}">
                                       </div>

                                       <div class="form-group">
                                         <button class="btn btn-info" type="submit">Update Tag</button>
                                       </div>
                                     </form>
                                  </div>

                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>

                                </div>
                              </div>
                            </div>

                            <!--Start The Dlete Modal -->
                            <div class="modal fade" id="deleteModal{{ $tag->id }}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Delete Tag: {{ $tag->name }}</h4>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <div class="alert alert-danger">
                                        <strong>Danger!</strong> Are You Sure to Delete It...
                                      </div>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <a class="btn btn-danger btn-addon" href="{{ route('tag.delete', ['id'=> $tag->id]) }}"><i class="fa fa-trash" aria-hidden="true"></i> Yes</a>

                                      <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-reply-all" aria-hidden="true"></i> No</button>
                                    </div>
                                    
                                  </div>
                                </div>
                            </div><!-- End The Modal -->
                            @endforeach

                            @else
                              <tr>
                                <th colspan="5" class="text-center">No Tags Yeat.</th>
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
