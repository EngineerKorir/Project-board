@extends('layouts.master')
@section('content')
<div class="container">
  <section id="landing">
    <div class="row">
      <div class="col">
        <div class="login-header-box">
          <h5>Sign up on Masenoboards</h5>
        </div>
      </div> <!-- /.col -->
    </div> <!-- /.row -->
    <div class="row">
      <div class="col-sm-6 col-md-4 p-2">
        <section id="register-aside-student">
          <h5>Student</h5>
          <p>Get announcements delivered conviniently to your email or phone.</p>
          <a href="{!! route('getRegister', ['role' => 'student']) !!}" class="btn btn-secondary btn-block btn-sm mt-3">Sign up</a>
        </section>
      </div>
      <div class="col-sm-6 col-md-4 p-2">
        <section id="register-aside-department">
          <h5>Department</h5>
          <p>Publish notices that reach thousands of students in your department.</p>
          <a href="{!! route('getRegister', ['department']) !!}" class="btn btn-secondary btn-block btn-sm mt-3">Sign up</a>
        </section>
      </div>
      <div class="col-sm-6 col-md-4 p-2">
        <section id="register-aside-organization">
          <h5>Organization</h5>
          <p>Publish notices that reach thousands of members in your organization.</p>
          <a href="{!! route('getRegister', ['organization']) !!}" class="btn btn-secondary btn-block btn-sm mt-3">Sign up</a>
        </section>
      </div>
      <div class="col-sm-6 col-md-4 p-2">
        <section id="register-aside-lecturer">
          <h5>Lecturer</h5>
          <p>Publish notices that reach hundreds of students in your class.</p>
          <a href="{!! route('getRegister', ['lecturer']) !!}" class="btn btn-secondary btn-block btn-sm mt-3">Sign up</a>
        </section>
      </div>
      <div class="col-sm-6 col-md-4 p-2">
        <section id="register-aside-class-rep">
          <h5>Class rep</h5>
          <p>Publish notices that reach hundreds of students in your class.</p>
          <a href="{!! route('getRegister', ['class_rep']) !!}" class="btn btn-secondary btn-block btn-sm mt-3">Sign up</a>
        </section>
      </div>
    </div> <!-- /.row -->
    <div class="row">
      <div class="col">
        <div class="text-center mt-5">
          <a href="{!! route('getLogin') !!}" class="font-size-xs">Already registered</a>
        </div>
      </div>
    </div>
  </section> <!-- /#landing -->
</div> <!-- /.container -->
@endsection
@section('footer')
@include('layouts.partials._simple_footer')
@endsection
