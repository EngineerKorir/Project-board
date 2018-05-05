@if ($message = Session::get('success'))
<div class="row d-flex justify-content-center pt-2">
  <div class="col-xs-4">
<div class="alert alert-warning alert-dismissible fade show">
	<button type="button" class="close pl-2" data-dismiss="alert">×</button>
        <span class="text-success">{{ $message }}</span>
</div></div></div>
@endif

@if ($message = Session::get('error'))
<div class="row d-flex justify-content-center pt-2">
  <div class="col-xs-4">
<div class="alert alert-warning alert-dismissible fade show">
	<button type="button" class="close pl-2" data-dismiss="alert">×</button>
        <span class="text-danger">{{ $message }}</span>
</div></div></div>
@endif

@if ($message = Session::get('warning'))
<div class="row d-flex justify-content-center pt-2">
  <div class="col-xs-4">
<div class="alert alert-warning alert-dismissible fade show">
	<button type="button" class="close pl-2" data-dismiss="alert">×</button>
	<span class="text-warning">{{ $message }}</span>
</div></div></div>
@endif

@if ($message = Session::get('info'))
<div class="row d-flex justify-content-center pt-2">
  <div class="col-xs-4">
<div class="alert alert-warning alert-dismissible fade show">
	<button type="button" class="close pl-2" data-dismiss="alert">×</button>
	<span class="text-info">{{ $message }}</span>
</div></div></div>
@endif

@if ($errors->any())
<div class="row d-flex justify-content-center pt-2">
  <div class="col-xs-4">
    <div class="alert alert-warning alert-dismissible fade show">
    	<button type="button" class="close pl-2" data-dismiss="alert">×</button>
    	<span class="text-danger">Failed. Please check the form below for errors</span>
    </div>
  </div>
</div>
@endif
