@extends('layouts.master')

@section('content')
<div class="header">
  <div id="burger-container" class="nav-trigger hidden-md-up">
    <div id="burger">
      <span>&nbsp;</span>
      <span>&nbsp;</span>
      <span>&nbsp;</span>
    </div><!-- /.burger -->
  </div> <!-- /.burger-container -->
  <div id="dash-head">
    <h3 class="pull-left">@yield('dashboard-title')</h3>
    @section('dashboard-header')
    <a class="btn btn-default btn-sm simple-btn" href="#"><i class="fa fa-edit glyph-r-margin"></i>New</a>
    @endsection
  </div> <!-- /.notice-head -->
</div>

@if($user)

@if ($user->role_id === 1) {{-- student --}}
    @include('layouts.partials._student-sidebar')

@elseif ($user->role_id === 2) {{-- department --}}
    @include('layouts.partials._department-sidebar')

@elseif ($user->role_id === 3) {{-- organization --}}
    @include('layouts.partials._organization-sidebar')

@elseif ($user->role_id === 4) {{-- lecturer --}}
    @include('layouts.partials._lecturer-sidebar')

@elseif ($user->role_id === 5) {{-- class_rep --}}
    @include('layouts.partials._class-rep-sidebar')

@else
    @include('layouts.partials._user-sidebar')
@endif

@endif

<div id="main-content">
  <div class="container-fluid">
    <div class="row">
      <!-- Breadcrumb -->
      <ol class="breadcrumb hidden-xs-down">
        
        @yield('breadcrumb')
      </ol>
      <!-- / Breadcrumb -->
    </div> <!-- /.row -->
    @yield('dashboard-content')
  </div> <!-- /.container -->
</div> <!-- /.main-content -->

@endsection <!-- @section('content') -->

@section('footer')
  @include('layouts.partials._simple_footer')
@endsection

@section('scripts')
<script>
$(document).ready(function() {
  $('.nav-trigger').click(function() {
    $('.side-nav').toggleClass('visible');
    $('.nav-trigger').toggleClass('open');
  });
});
</script>
@endsection
