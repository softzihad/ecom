@extends('layouts.app2')

@section('content')

  <div class="page-inner">
    <div class="page-title">
      <h3 class="breadcrumb-header">Trashed Product</h3>
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
                            <th class="col-md-2"><b>Image</b></th>
                            <th class="col-md-4"><b>Name</b></th>
                            <th class="col-md-6"><b>Price</b></th>
                            <th class="col-md-1"><b>Action</b></th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @if($products->count() > 0)
                            @foreach ($products as $product)
                            <tr>
                              <td><img src="{{ $product->image }}" alt="{{ $product->name }}" width="50px" height="50px"></td>
                              <td>{{ $product->name }}</td>
                              <td>{{ $product->price }}</td>

                              <td><a href="{{ route('product.restore', ['id' => $product->id]) }}" class="btn btn-success btn-sm"><i class="fa fa-spin fa-refresh"></i> Restore</a></td>

                              <td><a href="{{ route('product.kill', ['id' => $product->id]) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Trash</a></td>

                            </tr>
                            @endforeach
                            @else
                                <tr>
                                  <th colspan="5" class="text-center"><h3 class="text-center">No Trashed products Yet.</h3></th>
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
