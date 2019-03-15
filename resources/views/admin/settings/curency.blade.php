@extends('layouts.app2')

@section('content')
    @include('admin.includes.errors')
    <div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Update USD to BDT</h3>
    </div>
    <div id="main-wrapper">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
          @endif
          <div class="panel panel-white">
            <div class="panel-body">
 
              <form action="{{ route('curency.update') }}" method="post">
                {{ csrf_field() }} 

               <div class="form-group">
                   <label for="name"><b>BDT</b></label>
                   <input type="number" name="tk" class="form-control" value="{{ $curency->taka }}">
               </div>
               <div class="form-group">
                   <label for="name"><b></b></label>
                   <input type="hidden" name="id" class="form-control" value="{{ $curency->id }}">
                   
               </div>
               
               <div class="form-group">
                   <div class="text-left">
                       <button class="btn btn-success" type="submit">Update BDT</button>
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