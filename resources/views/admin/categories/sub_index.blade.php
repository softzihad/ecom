@extends('layouts.app2')

@section('content')

  <div class="page-inner">
    <div class="page-title">
      <h3 class="breadcrumb-header">Sub Categories</h3>
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
                              <th class="col-md-3"><b>Sub Category Name</b></th>
                              <th class="col-md-6"><b>Primary Category Name</b></th>
                              <th class="col-md-1"><b>Action</b></th>
                            </tr>
                        </thead>
                        <tbody>
                          @if($subcategory->count() > 0)
                            @foreach ($subcategory as $subcat)
                            <tr>
                              <td>{{ $subcat->id }}</td>
                              <td>{{ $subcat->name }}</td>
                              <td>{{ $subcat->category->name }}</td>

                              <td><a data-toggle="modal" data-target="#subeditModal{{ $subcat->id }}" class="btn btn-primary btn-addon"><i class="fa fa-spin fa-refresh"></i> Edit</a></td>

                              <td><a data-toggle="modal" data-target="#deleteModal{{ $subcat->id }}" class="btn btn-danger btn-addon"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                              
                            </tr>

                            <!--Start The Edit Modal -->
                            <div class="modal fade" id="subeditModal{{ $subcat->id }}">
                              <div class="modal-dialog">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">Update Sub-Category: {{ $subcat->name }}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>

                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    <form action="{{ route('sub_catagory.update', ['id' => $subcat->id]) }}" method="post">
                                     {{ csrf_field() }}

                                     <div class="form-group">
                                       <label for="name">Sub-Category Name</label>
                                       <input type="text" name="name" class="form-control" value="{{ $subcat->name }}">
                                     </div>

                                     <div class="form-group">
                                      <label for="PrimaryCat">Select Primary Category</label>
                                        <select name="PrimaryCat_id" class="form-control" id="PrimaryCat">
                                          <option selected value="{{ $subcat->category->id }}">{{ $subcat->category->name }}</option>
                                          @foreach($categories as $cat)
                                          <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                          @endforeach()
                                        </select>
                                      </div>
                                     
                                     <div class="form-group">
                                       <button class="btn btn-success" type="submit">Update Sub-Category</button>
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

                            <div class="modal fade" id="deleteModal{{ $subcat->id }}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Delete Sub-Category: {{ $subcat->name }}</h4>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <div class="alert alert-danger">
                                        <strong>Danger!</strong> Are You Sure to Delete It...
                                      </div>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <a class="btn btn-danger btn-addon" href="{{ route('sub_category.delete', ['id' => $subcat->id ]) }}"><i class="fa fa-trash" aria-hidden="true"></i> Yes</a>

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
