@extends('layouts.app2')

@section('content')

  <div class="page-inner">
    <div class="page-title">
      <h3 class="breadcrumb-header">All Productc</h3>
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
                            <th class="col-md-2"><b>Price</b></th>
                            <th class="col-md-3"><b>Discount(%)</b></th>
                            <th class="col-md-1"><b>Action</b></th>
                          </tr>
                        </thead>
                        <tbody>
                          @if($products->count() > 0)
                            @foreach ($products as $product)
                            <tr>
                              <td><img src="{{ $product->image }}" alt="{{ $product->name }}" width="40px" height="40px"></td>
                              <td>{{ $product->name }}</td>
                              <td>{{ $product->price }}</td>

                              <td><a class="btn btn-success btn-addon" data-toggle="modal" data-target="#discountModal{{ $product->id }}">{{ $product->discount }}%</a></td>

                              <td><a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn  btn-info" class="btn  btn-info btn-sm"><i class="fa fa-spin fa-refresh"></i> Edit</a></td>

                              <td><a href="{{ route('product.delete', ['id' => $product->id]) }}" class="btn  btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Trash</a></td>
                            </tr>

                            <!-- Start The Modal -->
                              <div class="modal fade" id="discountModal{{ $product->id }}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Update Discount: {{ $product->discount }}%</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <form action="{{ route('product.discount',['id'=> $product->id]) }}" method="post">
                                         {{ csrf_field() }}

                                         <div class="form-group">
                                           <label for="discount">Discount</label>
                                           <input type="number" name="discount" value="{{ $product->discount }}" class="form-control">
                                         </div>

                                         <div class="form-group">
                                           <button class="btn btn-info" type="submit">Update</button>
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
                            @endforeach
                            @else
                                <tr>
                                  <th colspan="5" class="text-center"><h3 class="text-center">No products Yet.</h3></th>
                                </tr>
                          @endif
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>

        <div class=""></div>
      </div><!-- Row -->
    </div><!-- Main Wrapper -->

    <div class="page-footer">
    <p>Made with <i class="fa fa-heart"></i> by Zihad</p>
    </div>
</div><!-- /Page Inner -->
@endsection
