@extends('layouts.app2')

@section('content')
  <div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Create a New Tag</h3>
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
              <form action="{{ route('tag.store') }}" method="post">
                 {{ csrf_field() }}

                 <div class="form-group">
                   <label for="tag"><b>Tag Name</b></label>
                   <input type="text" name="tag" class="form-control">
                 </div>

                 <div class="form-group">
                   <button class="btn btn-success" type="submit">Store Tag</button>
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
