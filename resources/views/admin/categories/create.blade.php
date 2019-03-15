@extends('layouts.app2')

@section('content')
  <div class="page-inner">
    <!--div class="page-title">
    <h3 class="breadcrumb-header">Create a New Category</h3>
    </div-->
    <div id="main-wrapper">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
          @endif
          <div class="page-title">
            <h3 class="breadcrumb-header">Create a New Primary Category</h3>
          </div>
          <form action="{{ route('catagory.store') }}" method="post">
             {{ csrf_field() }}

             <div class="form-group">
               <label for="name"><b>Category Name</b></label>
               <input type="text" name="name" class="form-control">
             </div>

             <div class="form-group">
               <button class="btn btn-success" type="submit">Store Primary Category</button>
             </div>
           </form>
        </div>
        
        <div class="col-lg-2 col-md-6"></div>

        <div class="col-lg-6 col-md-6">
          <div class="page-title">
            <h3 class="breadcrumb-header">Create a New Sub-Category</h3>
          </div>
          @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
          @endif
          <form action="{{ route('sub-catagory.store') }}" method="post">
             {{ csrf_field() }}

             <div class="form-group">
               <label for="name"><b>Sub-Category Name</b></label>
               <input type="text" name="name" class="form-control" value="{{ old('name') }}">
             </div>
             <div class="form-group">
              <label for="PrimaryCat"><b>Select Primary Category</b></label>
                <select name="PrimaryCat_id" class="form-control" id="PrimaryCat">
                  @foreach($categories as $cat)
                  <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                  @endforeach()
                </select>
            </div>
             <div class="form-group">
               <button class="btn btn-success" type="submit">Store Sub-Category</button>
             </div>
           </form>
        </div>

      </div><!-- Row -->
    </div><!-- Main Wrapper -->

    <div class="page-footer">
    <p>Made with <i class="fa fa-heart"></i> by stacks</p>
    </div>
  </div><!-- /Page Inner -->

@endsection
