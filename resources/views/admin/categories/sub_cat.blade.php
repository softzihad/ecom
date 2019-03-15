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
                              <th class="col-md-2">ID</th>
                              <th class="col-md-3">Sub Category Name</th>
                              <th class="col-md-3">Primary Category Name</th>
                              <th class="col-md-2">Editing</th>
                              <th class="col-md-2">Deleting</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if($subcategory->count() > 0)
                            @foreach ($subcategory as $subcat)
                            <tr>
                              <td>{{ $subcat->id }}</td>
                              <td>{{ $subcat->name }}</td>
                              <td>{{ $subcat->category->name }}</td>

                              <td><a href="" class="btn btn-primary btn-addon"><i class="fa fa-spin fa-refresh"></i> Edit</a></td>

                              <td><a href="{{ route('sub_category.delete', ['id' => $subcat->id ]) }}" class="btn btn-danger btn-addon"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                              
                            </tr>
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
