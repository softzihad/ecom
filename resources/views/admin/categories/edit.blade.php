@extends('layouts.app2')

@section('content')
  
  <div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Update Category: {{ $category->name }}</h3>
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
              <form action="{{ route('catagory.update',['id'=> $category->id]) }}" method="post">
                 {{ csrf_field() }}

                 <div class="form-group">
                   <label for="name">name</label>
                   <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                 </div>

                 <div class="form-group">
                   <button class="btn btn-info" type="submit">Update Category</button>
                 </div>
              </form>
            </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6"> </div>
      </div><!-- Row -->
    </div><!-- Main Wrapper -->
    
    <div class="page-footer">
        <p>Made with <i class="fa fa-heart"></i> by stacks</p>
    </div>
  </div><!-- /Page Inner -->
@endsection
