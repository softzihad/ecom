@extends('layouts.app2')

@section('content')
    @include('admin.includes.errors')
    <div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Create a New Product</h3>
    </div>
    <div id="main-wrapper">
      <div class="row">
        <div class="col-lg-10 col-md-6">
          @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
          @endif
          <div class="panel panel-white">
            <div class="panel-body">
 
              <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }} 

               <div class="form-group">
                   <label for="name"><b>Name</b></label>
                   <input type="text" name="name" class="form-control" value="{{ old('name') }}">
               </div>
               <div class="form-group">
                   <label for="price"><b>Price</b></label>
                   <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>
               </div>
               <div class="form-group">
                   <label for="image"><b>Feature Image</b></label>
                   <input type="file" name="image" class="form-control" value="{{ old('image') }}">
               </div>
                <div class="form-group">
                 <label for="category"><b>Select Primary Category</b></label>
                 <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach()
                 </select>
               </div>
               <div class="form-group">
                 <label for="category"><b>Select Sub-Category</b></label>
                 <select name="subcategory_id" id="subcategory" class="form-control">
                    @foreach($subcategories as $subcategory)
                      <option value="{{ $subcategory->id }}" style="height: 100px; width: 200px;">{{ $subcategory->name }}</option>
                    @endforeach()
                 </select>
               </div>
               <div class="form-group">
                   <label for="tags"><b>Select Tags</b></label>
                   @foreach($tags as $tag)
                   <div class="checkbox">
                     <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->tag }}</label>
                   </div>
                   @endforeach
               </div>
                <div class="form-group">
                   <label for="description"><b>Description</b></label>
                   <textarea name="description" id="content" cols="5" rows="10" class="form-control"></textarea>
               </div>
               <div class="form-group">
                   <div class="text-left">
                       <button class="btn btn-success" type="submit">Store Product</button>
                   </div>
               </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6"> </div>
      </div><!-- Row -->
    </div><!-- Main Wrapper -->
    
    <div class="page-footer">
        <p>Made with <i class="fa fa-heart"></i> by Zihad</p>
    </div>
  </div><!-- /Page Inner -->
@stop

<!-- Work for Wysiwyg -->
@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@stop

@section('scripts')
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
  <script>
    $(document).ready(function() {
        $('#content').summernote();
    });
  </script>
@stop