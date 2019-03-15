@extends('layouts.app2')

@section('content')

  <div class="page-inner">
    <div class="page-title">
      <h3 class="breadcrumb-header">All Orders</h3>
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
                            <th class="col-md-2"><b>Order SN:</b></th>
                            <th class="col-md-2"><b>Purchased</b></th>
                            <th class="col-md-2"><b>Ship to</b></th>
                            <th class="col-md-2"><b>Date</b></th>
                            <th class="col-md-2"><b>Total</b></th>
                            <th class="col-md-2"><b>Actions</b></th>
                          </tr>
                        </thead>
                        <tbody>
                          @if($orders->count() > 0)
                            @foreach ($orders as $order)
                            <tr>
                              <td>
                                #{{ $order->id }} by {{ $order->f_name }} {{ $order->l_name }} <br>+88{{ $order->phone }}
                              </td>
                              <td>
                                <a class="btn btn-primary btn-addon" data-toggle="modal" data-target="#ItemModal{{ $order->id }}"><i class="fa fa-spin fa-refresh"></i> Item</a>
                              </td>
                              <td>
                                {{ $order->address }}<br> {{ $order->post_code }},{{ $order->city }},{{ $order->country }}
                              </td>
                              <td>
                                {{ $order->created_at->toFormattedDateString() }}
                              </td>
                              <td>${{ $order->total }}</td>
                              <td>
                                @if($order->payment > 0)
                                <a href="">
                                  <i class="fa fa-credit-card" title="Payment Done" aria-hidden="true" style="color: green;">  </i>  
                                </a>
                                @else
                                <a href="{{ route('payment.update',['id'=> $order->id]) }}">
                                  <i class="fa fa-credit-card" aria-hidden="true" style="color: red;" title="No Payment">  </i>
                                </a>
                                @endif
                                @if($order->delivery > 0)
                                <a href="">
                                  <i class="fa fa-check" aria-hidden="true" title="Delivery Done"></i>
                                </a>
                                @else
                                <a href="{{ route('delivery.update',['id'=> $order->id]) }}">
                                  <i class="fa fa-ellipsis-h" aria-hidden="true" title="Delivery Proccesing"> </i>
                                </a>
                                @endif
                                <a href="{{ route('order.delete', ['id'=> $order->id]) }}" >
                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                              </td>
                            </tr>
                            <!-- Start The Modal -->
                              <div class="modal fade" id="ItemModal{{ $order->id }}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  <?php $count = $order->orderItems->count(); ?> 
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Item List: {{ $count }} <br>{{ $order->orderNo }}</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <ul class="list-group">
                                        @foreach($order->orderItems as $item)
                                        <li class="list-group-item">{{ $item->name }} ({{ $item->quantity }})</li>
                                        @endforeach()
                                      </ul>
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
                                  <th colspan="5" class="text-center"><h3 class="text-center">No order Yet.</h3></th>
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
