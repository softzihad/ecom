@extends('layouts.app2')

@section('content')

  <div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">User Profile</h3>
    </div>
    <div id="main-wrapper">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          @include('admin.includes.errors')
          @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
          @endif
          <div class="panel panel-white">
            <div class="panel-body">
               <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

               <div class="form-group">
                   <label for="site_name"><b>User Name</b></label>
                   <input type="text" name="name" value="{{ $user->name}}" class="form-control">
               </div>
               <div class="form-group">
                   <label for="address"><b>Email</b></label>
                   <input type="text" name="email" value="{{ $user->email}}" class="form-control">
               </div>
               <div class="form-group">
                   <label for="contact_number"><b>New Password</b></label>
                   <input type="password" name="password" class="form-control">
               </div>
               <div class="form-group">
                   <label for="featured"><b>Upload New Image</b></label>
                   <input type="file" name="image" class="form-control">
               </div>
               <div class="form-group">
                   <label for="contact_email"><b>Facebook Profile</b></label>
                   <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
               </div>
               <div class="form-group">
                   <label for="contact_email"><b>Youtube Profile</b></label>
                   <input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">
               </div>
               <div class="form-group">
                   <label for="content"><b>About You</b></label>
                   <textarea name="about" id="about" cols="5" rows="5"  class="form-control">{{ $user->profile->about }}</textarea>
               </div>
               <div class="form-group">
                   <div class="text-left">
                       <button class="btn btn-success" type="submit">Update Profile</button>
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
