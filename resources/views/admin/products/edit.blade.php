@extends('layouts.app2')

@section('content')

  <div class="page-inner">
    <div class="page-title">
      <h3 class="breadcrumb-header">Edit Product</h3>
    </div>

    <div id="main-wrapper">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <div class="panel panel-white">
              <div class="panel-heading clearfix">
                  <h4 class="panel-title"></h4>
              </div>
              <div class="panel-body">
                <form action="{{ route('product.update', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

               <div class="form-group">
                   <label for="name">Name</label>
                   <input type="text" name="name" value="{{ $product->name }}" class="form-control">
               </div>
               <div class="form-group">
                   <label for="price">Price</label>
                   <input type="number" name="price" value="{{ $product->price }}" class="form-control">
               </div>
               <div class="form-group">
                   <label for="image">Image</label>
                   <input type="file" name="image" class="form-control">
               </div>
               <div class="form-group">
                 <label for="category">Select a Category</label>
                 <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach()
                 </select>
               </div>
               <div class="form-group">
                 <label for="category">Select Sub-Category</label>
                 <select name="subcategory_id" id="subcategory" class="form-control">
                    @foreach($subcategories as $subcategory)
                      <option value="{{ $subcategory->id }}" style="height: 100px; width: 200px;">{{ $subcategory->name }}</option>
                    @endforeach()
                 </select>
               </div>
               <div class="form-group">
                   <label for="tags">Select Tags</label>
                   @foreach($tags as $tag)
                   <div class="checkbox">
                     <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                        
                        @foreach($product->tags as $t)
                          @if($tag->id == $t->id)
                            checked
                          @endif
                        @endforeach
                      >{{ $tag->tag }}

                     </label>
                   </div>
                   @endforeach
               </div>
                <div class="form-group">
                   <label for="description">Description</label>
                   <textarea name="description" id="content" cols="5" rows="10" class="form-control">{{ $product->description }}</textarea>
               </div>
               <div class="form-group">
                   <div class="text-left">
                       <button class="btn btn-success" type="submit">Update Product</button>
                   </div>
               </div>
           </form>
              </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4"></div>
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
