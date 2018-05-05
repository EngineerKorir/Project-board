@extends('layouts.master')

@section('content')

<main>
  <section id="login">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-7">

          {{-- Alert messages --}}
          @include('layouts.partials._alerts')
          
          <div class="login-header-box">
            <h5>Sign in to Masenoboards</h5>
          </div>
          <div class="login-content p-4 pt-md-5">

            <form class="" action="{!! route('postLogin') !!}" method="POST" data-parsley-validate="">

              {{ csrf_field() }}

              <div class="form-group {{ $errors->has('email') ? 'has-warning' : '' }}">
                <label for="email" class="text-muted font-size-xs">Email</label>

                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email address*" required="">

                <div class="form-control-feedback"></div>

                @if ($errors->has('email'))
                <small class="form-text text-danger">
                  {{ $errors->first('email') }}
                </small>
                @endif

              </div>

              <div class="form-group {{ $errors->has('password') ? 'has-warning' : '' }}">
                <label for="password" class="text-muted font-size-xs">Password</label>

                <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Password*" required="">

                @if ($errors->has('password'))
                <small class="form-text text-danger">
                  {{ $errors->first('password') }}
                </small>
                @endif

              </div>

              <input type="submit" name="submit" value="Sign in" class="btn btn-primary btn-block">
            </form>

            <div class="text-center mt-4 pb-1" style="border-bottom: 0.0625rem solid #dbdbdb">
              <a href="{!! route('getRegister') !!}" class="font-size-xs">New account</a>
            </div>

            <div class="text-center pt-1">
              <a href="{!! route('password.request') !!}" class="font-size-xs">Forgot password</a>
            </div>

          </div>	<!-- /.login-content -->
        </div> <!-- /.col-md-7 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </section>
</main>

@endsection

@section('scripts')

<script src="{!! URL::to('js/parsley.min.js') !!}"></script>
@endsection

@section('footer')
@include('layouts.partials._simple_footer')
@endsection
