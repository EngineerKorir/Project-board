@extends('layouts.partials._dashboard')

@section('dashboard-title')
	Settings
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{!! route('getLecturerDashboard') !!}" title="Lecturer home">Lecturer home</a></li>
	<li class="breadcrumb-item active">Settings</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col">
		<main>
			<section id="profile-edit">
				<div class="card">
					<div class="card-header bb-0">Settings</div>
					<div class="card-block">


						{{-- Alert messages --}}
						@include('layouts.partials._alerts')

						<div class="photo">
							@if ($user->photo)
							<img src="{{ URL::to('images/avatars/large/' . $user->photo) }}" alt="{{ $user->username }}" title="{{ $user->username }}" class="img-fluid img-thumbnail">

							@else

							<img src="{{ URL::to('images/avatars/default/large/avatar.png') }}" alt="{{ $user->username }}" title="{{ $user->username }}" class="img-fluid img-thumbnail">

							@endif
						</div> <!-- /.photo -->

						<form class="" action="{{ route('postLecturerEdit') }}" method="POST" data-parsley-validate="" enctype="multipart/form-data">

							{!! csrf_field() !!}

							<div class="form-group {{ $errors->has('photo') ? 'has-warning' : '' }}">
								<label for="photo" class="text-muted font-size-xs">Profile photo</label>

								<input type="file" name="photo" value="{!! $user->photo !!}" class="form-control" title="Profile photo">

								@if ($errors->has('photo'))
										<small class="form-text text-danger">
											{{ $errors->first('photo') }}
										</small>
								@endif
							</div>

							<div class="form-group {{ $errors->has('username') ? 'has-warning' : '' }}">
								<label for="username" class="text-muted font-size-xs">Username</label>

								<input type="text" name="username" value="{!! $user->username !!}" class="form-control" disabled="" title="">

								@if ($errors->has('username'))
										<small class="form-text text-danger">
											{{ $errors->first('username') }}
										</small>
								@endif
							</div>

							<div class="form-group {{ $errors->has('salutation_id') ? 'has-warning' : '' }}">
								<label for="salutation_id" class="text-muted font-size-xs">Salutation</label>
								<select class="custom-select form-control" name="salutation_id">
									<option value="" disabled selected>Salutation</option>

									@foreach($data['salutation'] as $salutation)

									<option value="{{ $salutation->id }}" {{ $user->salutation_id === $salutation->id ? 'selected' : ''}} >{{ $salutation->name }}</option>

									@endforeach

								</select>

								@if ($errors->has('salutation_id'))
										<small class="form-text text-danger">
											{{ $errors->first('salutation_id') }}
										</small>
								@endif
							</div>

							<div class="form-group {{ $errors->has('gender') ? 'has-warning' : '' }}">
								<label for="gender" class="text-muted font-size-xs">Gender</label>

								<select class="custom-select form-control" name="gender">
									<option value="" disabled="" selected="">Gender</option>
									<option value="1" {{ $user->gender == 1 ? 'selected' : ''}} disabled>Male</option>
									<option value="2" {{ $user->gender == 2 ? 'selected' : ''}} disabled>Female</option>
								</select>

								@if ($errors->has('gender'))
										<small class="form-text text-danger">
											{{ $errors->first('gender') }}
										</small>
								@endif
							</div>

							<div class="form-group {{ $errors->has('faculty_id') ? 'has-warning' : '' }}">
								<label for="faculty_id" class="text-muted font-size-xs">Faculty</label>
								<select class="custom-select form-control" name="faculty_id">
									<option value="" disabled selected>Faculty</option>

									@foreach($data['faculty'] as $faculty)

									<option value="{{ $faculty->id }}" {{ $user->faculty_id === $faculty->id ? 'selected="selected"' : ''}} >{{ $faculty->name }}</option>

									@endforeach

								</select>

								@if ($errors->has('faculty_id'))
										<small class="form-text text-danger">
											{{ $errors->first('faculty_id') }}
										</small>
								@endif
							</div>

							<div class="form-group {{ $errors->has('email') ? 'has-warning' : '' }}">
								<label for="email" class="text-muted font-size-xs">Email</label>

								<input type="email" name="email" value="{!! $user->email !!}" class="form-control" placeholder="Email address*" required="">

								@if ($errors->has('email'))
										<small class="form-text text-danger">
											{{ $errors->first('email') }}
										</small>
								@endif

								<small class="form-text text-muted">Your email address is kept private and is only used to receive notifications.</small>
							</div>

							<div class="form-group {{ $errors->has('phone') ? 'has-warning' : '' }}">
								<label for="phone" class="text-muted font-size-xs">Phone</label>

								<input type="tel" name="phone" value="{!! $user->phone !!}" class="form-control" placeholder="Phone" required="">

								@if ($errors->has('phone'))
										<small class="form-text text-danger">
											{{ $errors->first('phone') }}
										</small>
								@endif

								<small class="form-text text-muted">Your phone number is kept private and is only used to receive notifications.</small>
							</div>

							<div class="form-group {{ $errors->has('bio') ? 'has-warning' : '' }}">
								<label for="bio" class="text-muted font-size-xs">Bio</label>
								<textarea name="bio" rows="8" class="form-control">{{ $user->bio }}</textarea>

								@if ($errors->has('bio'))
										<small class="form-text text-danger">
											{{ $errors->first('bio') }}
										</small>
								@endif
							</div>

							<div class="form-group {{ $errors->has('password') ? 'has-warning' : '' }}">
								<label for="password" class="text-muted font-size-xs">Password</label>

								<input type="password" name="password" value="" class="form-control" placeholder="Password">

								@if ($errors->has('password'))
										<small class="form-text text-danger">
											{{ $errors->first('password') }}
										</small>
								@endif

								<small class="form-text text-muted">To change your password enter new password otherwise leave blank.</small>
							</div>

							<input type="submit" name="submit" value="Update settings" class="btn btn-primary btn-sm">
						</form>
					</div>
				</div> <!-- /.card -->
			</section>
		</main>
	</div> <!-- /.col -->
</div> <!-- /.row -->
@endsection
