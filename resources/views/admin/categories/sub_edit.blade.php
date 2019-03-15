@extends('layouts.app2')

@section('content')
  <div class="page-inner">
    <!--div class="page-title">
    <h3 class="breadcrumb-header">Create a New Category</h3>
    </div-->
    <div id="main-wrapper">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <form action="{{ route('sub_catagory.update', ['id' => $subcategory->id]) }}" method="post">
             {{ csrf_field() }}

             <div class="form-group">
               <label for="name">Sub-Category Name</label>
               <input type="text" name="name" class="form-control" value="{{ $subcategory->name }}">
             </div>
             <div class="form-group">
              <label for="PrimaryCat">Select Primary Category</label>
                <select name="PrimaryCat_id" class="form-control" id="PrimaryCat">
                  <option selected value="{{ $subcategory->category->id }}">{{ $subcategory->category->name }}</option>
                  @foreach($category as $cat)
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
