@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-8">
			<main>
				<section id="register">
					<div class="login-header-box">
						<h5>Sign up as Department</h5>
					</div> <!-- /.login-header-box -->
					<div class="login-content p-4 pt-md-5">

						<form class="" action="{!! route('postRegister', ['role' => 'department']) !!}" method="POST" data-parsley-validate="">

							{{ csrf_field() }}

							<div class="form-group {{ $errors->has('department_id') ? 'has-warning' : '' }}">
								<label for="department_id" class="text-muted font-size-xs">Name</label>

								<select class="custom-select form-control" name="department_id" required="">
									<option value="" disabled="" selected="">Department name*</option>
									<option value="1" {{ old('department_id') == 1 ? 'selected' : ''}}>Computer Science</option>
									<option value="2" {{ old('department_id') == 2 ? 'selected' : ''}}>Computer Technology</option>
									<option value="3" {{ old('department_id') == 3 ? 'selected' : ''}}>Information Technology</option>
								</select>

								@if ($errors->has('department_id'))
										<small class="form-text text-danger">
											{{ $errors->first('department_id') }}
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

									<input type="tel" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone*" required="">

									@if ($errors->has('phone'))
									<small class="form-text text-danger">
										{{ $errors->first('phone') }}
									</small>
									@endif

								<small class="form-text text-muted">Your phone number is kept private and is only used to receive notifications.</small>
							</div>

							<div class="form-group {{ $errors->has('bio') ? 'has-warning' : '' }}">
								<label for="bio" class="text-muted font-size-xs">About</label>

								<textarea name="bio" rows="8" placeholder="Description about your department" class="form-control">{{ old('bio') }}</textarea>

								@if ($errors->has('bio'))
								<small class="form-text text-danger">
									{{ $errors->first('bio') }}
								</small>
								@endif
							</div>

							<div class="form-group {{ $errors->has('password') ? 'has-warning' : '' }}">
								<label for="password" class="text-muted font-size-xs">Password</label>

								<input type="password" name="password"  class="form-control" placeholder="Password*" value="{{ old('password') }}" required="">
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
