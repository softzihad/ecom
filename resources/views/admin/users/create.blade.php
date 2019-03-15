@extends('layouts.app2')

@section('content')

  <div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Create a New User</h3>
    </div>
    <div id="main-wrapper">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
          @endif
          <div class="panel panel-white">
            <div class="panel-body">
               <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                   <div class="form-group">
                       <label for="title"><b>User Name</b></label>
                       <input type="text" name="name" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="featured"><b>Email</b></label>
                       <input type="email" name="email" class="form-control">
                   </div>
                   <div class="form-group">
                       <div class="text-left">
                           <button class="btn btn-success" type="submit">Add User</button>
                       </div>
                   </div>
               </form>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-6"> </div>
      </div><!-- Row -->
    </div><!-- Main Wrapper -->
    
    <div class="page-footer">
        <p>Made with <i class="fa fa-heart"></i> by Zihad</p>
    </div>
  </div><!-- /Page Inner -->
@endsection
