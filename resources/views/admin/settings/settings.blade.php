@extends('layouts.app2')

@section('content')
    <div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Settings</h3>
    </div>
    <div id="main-wrapper">
      <div class="row">
        <div class="col-lg-8 col-md-6">
          @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
          @endif
          <div class="panel panel-white">
            <div class="panel-body">
              <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}

                 <div class="form-group">
                   <label for="logo"><b>Site Logo</b></label>
                   <input type="file" name="site_logo">
                 </div>
                 <div class="form-group">
                   <label for="favicon"><b>Site Favicon</b></label>
                   <input type="file" name="site_favicon">
                 </div>
                 <div class="form-group">
                     <label for="site_name"><b>Site Name</b></label>
                     <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="address"><b>Adress</b></label>
                     <input type="text" name="address" value="{{ $settings->address }}" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="contact_number"><b>Contact Number</b></label>
                     <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="contact_email"><b>Email</b></label>
                     <input type="text" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">
                 </div>
                 <div class="form-group">
                     <div class="text-left">
                         <button class="btn btn-success" type="submit">Update Site Settings</button>
                     </div>
                 </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6"> </div>
      </div><!-- Row -->
    </div><!-- Main Wrapper -->
    
    <div class="page-footer">
        <p>Made with <i class="fa fa-heart"></i> by Zihad</p>
    </div>
  </div><!-- /Page Inner --><!--{{ route('user.profile.update') }}-->

@endsection
