@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-8">
			<main>
				<section id="register">
					<div class="login-header-box">
						<h5>Sign up as Class rep</h5>
					</div> <!-- /.login-header-box -->
					<div class="login-content p-4 pt-md-5">

						<form class="" action="{!! route('postRegister', ['role' => 'class_rep']) !!}" method="POST" data-parsley-validate="">

							{{ csrf_field() }}

							<div class="form-group {{ $errors->has('username') ? 'has-warning' : '' }}">
								<label for="username" class="text-muted font-size-xs">Name</label>

								<input type="text" name="username" placeholder="Name*" class="form-control" value="{{ old('username') }}" required="" minlength="4" maxlength="20">

								@if ($errors->has('username'))
										<small class="form-text text-danger">
											{{ $errors->first('username') }}
										</small>
								@endif
							</div>

							<div class="form-group {{ $errors->has('gender') ? 'has-warning' : '' }}">
								<label for="gender" class="text-muted font-size-xs">Gender</label>

                <select class="custom-select form-control" name="gender" required="">
									<option value="" disabled="" selected="">Gender*</option>
                  <option value="1" {{ old('gender') == 1 ? 'selected' : ''}}>Male</option>
                  <option value="2" {{ old('gender') == 2 ? 'selected' : ''}}>Female</option>
                </select>

								@if ($errors->has('gender'))
										<small class="form-text text-danger">
											{{ $errors->first('gender') }}
										</small>
								@endif
              </div>

							<div class="form-group {{ $errors->has('department_id') ? 'has-warning' : '' }}">
								<label for="department_id" class="text-muted font-size-xs">Department</label>

                <select class="custom-select form-control" name="department_id" required="">
									<option value="" disabled="" selected="">Department*</option>
                  <option value="1">Computer Science</option>
                  <option value="2">IT</option>
                  <option value="3">Computer Technology</option>
                  <option value="4">ICT</option>
                  <option value="5">ECD</option>
                </select>

								@if ($errors->has('department_id'))
										<small class="form-text text-danger">
											{{ $errors->first('department_id') }}
										</small>
								@endif
              </div>

							<div class="form-group {{ $errors->has('year') ? 'has-warning' : '' }}">
								<label for="year" class="text-muted font-size-xs">Academic year</label>

                <select class="custom-select form-control" name="year" required="">
									<option value="" disabled="" selected="">Academic year*</option>
                  <option value="1" {{ old('year') == 1 ? 'selected' : ''}}>Year one</option>
                  <option value="2" {{ old('year') == 2 ? 'selected' : ''}}>Year two</option>
                  <option value="3" {{ old('year') == 3 ? 'selected' : ''}}>Year three</option>
                  <option value="4" {{ old('year') == 4 ? 'selected' : ''}}>Year four</option>
                  <option value="5" {{ old('year') == 5 ? 'selected' : ''}}>Year five</option>
									<option value="5" {{ old('year') == 6 ? 'selected' : ''}}>Year six</option>
                </select>

								@if ($errors->has('year'))
										<small class="form-text text-danger">
											{{ $errors->first('year') }}
										</small>
								@endif
              </div>

							<div class="form-group {{ $errors->has('email') ? 'has-warning' : '' }}">
								<label for="email" class="text-muted font-size-xs">Email</label>

								<input type="email" name="email" placeholder="Email address*" class="form-control" value="{{ old('email') }}" required="">

								@if ($errors->has('email'))
										<small class="form-text text-danger">
											{{ $errors->first('email') }}
										</small>
								@endif

								<small class="form-text text-muted">Your email address is kept private and is only used to receive notifications.</small>
							</div>

              <div class="form-group {{ $errors->has('phone') ? 'has-warning' : '' }}">
								<label for="phone" class="text-muted font-size-xs">Phone</label>

								<input type="tel" name="phone" placeholder="Phone*" class="form-control" value="{{ old('phone') }}" required="">

								@if ($errors->has('phone'))
										<small class="form-text text-danger">
											{{ $errors->first('phone') }}
										</small>
								@endif

								<small class="form-text text-muted">Your phone number is kept private and is only used to receive notifications.</small>
							</div>

							<div class="form-group {{ $errors->has('password') ? 'has-warning' : '' }}">
								<label for="password" class="text-muted font-size-xs">Password</label>

								<input type="password" name="password"  class="form-control" placeholder="Password*" value="{{ old('password') }}" required="">

								@if ($errors->has('password'))
										<small class="form-text text-danger">
											{{ $errors->first('password') }}
										</small>
								@endif
							</div>

							<div class="terms">By signing up you agree to our <a href="/terms">Terms</a></div>
							<input type="submit" name="submit" value="Sign up" class="btn btn-primary btn-block">

						</form>

						<div class="text-center mt-3">
							<a href="{!! route('getLogin') !!}" class="font-size-xs">Already registered</a>
						</div>

					</div>	<!-- /.login-content -->
				</section> <!-- /.register -->
			</main>
		</div> <!-- /.col-md-8 -->
	</div> <!-- /.row -->
</div> <!-- /.container -->
@endsection

@section('scripts')

<script src="{!! URL::to('js/parsley.min.js') !!}"></script>

@endsection

@section('footer')
@include('layouts.partials._simple_footer')
@endsection
