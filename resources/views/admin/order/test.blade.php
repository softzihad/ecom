@extends('layouts.app2')

@section('content')

  <div class="page-inner">
    <div class="page-title">
      <h3 class="breadcrumb-header">All Productc</h3>
    </div>

    <div id="main-wrapper">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="panel panel-white">
              <div class="panel-heading clearfix">
                  <h4 class="panel-title"></h4>
              </div>
              <div class="panel-body">
                  <form action="/action_page.php">
                    <div class="form-group">
                      <label for="usr">Input-1</label>
                      <input type="text" class="form-control" id="data1" name="username" onkeyup="testFunction()">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Input-2:</label>
                      <input type="text" class="form-control" id="data2" name="password">
                    </div>

                    <p id="ontext"></p>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div>
        </div>

        <div class=""></div>
      </div><!-- Row -->
    </div><!-- Main Wrapper -->

    <div class="page-footer">
    <p>Made with <i class="fa fa-heart"></i> by Zihad</p>
    </div>
</div><!-- /Page Inner -->




<script type="text/javascript">
  
function testFunction() {
  var fix = 5;
  var get = document.getElementById('data1').value;

  var sum = parseInt(get) + parseInt(fix);

  if (get != '') {
    document.getElementById('data2').value = sum;
    document.getElementById('ontext').innerHTML = sum;
  }
  if (get == '') {
    document.getElementById('data2').value = '';
  }

}

</script>
@endsection
