@extends('layouts.partials._dashboard')

@section('dashboard-title')
	Edit profile
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{!! route('getStudentDashboard') !!}" title="Student home">Student home</a></li>
	<li class="breadcrumb-item active">Edit profile</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col">
		<main>
			<section id="profile-edit">
				<div class="card">
					<div class="card-header bb-0">Edit profile</div>
					<div class="card-block">

						{{-- Alert messages --}}
						@include('layouts.partials._alerts')

						<div class="photo">
							@if ($user->photo)
							<img src="{{ URL::to('images/avatars/large/' . $user->photo) }}" alt="{{ $user->username }}" title="{{ $user->username }}" class="img-fluid img-thumbnail" width="500" height="500">

							@else

							<img src="{{ URL::to('images/avatars/default/large/avatar.png') }}" alt="{{ $user->username }}" title="{{ $user->username }}" class="img-fluid img-thumbnail">

							@endif
						</div> <!-- /.photo -->

						<form class="" action="{{ route('postStudentEdit') }}" method="POST" data-parsley-validate="" enctype="multipart/form-data">

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

							<div class="form-group {{ $errors->has('department_id') ? 'has-warning' : '' }}">
								<label for="department_id" class="text-muted font-size-xs">Department</label>

								<select class="custom-select form-control" name="department_id">
									<option value="" disabled="" selected="">Department</option>

									@foreach($data['departments'] as $department)

									<option value="{{ $department->id }}" {{ $user->department_id === $department->id ? 'selected' : ''}} >{{ $department->name }}</option>

									@endforeach

								</select>

								@if ($errors->has('department_id'))
										<small class="form-text text-danger">
											{{ $errors->first('department_id') }}
										</small>
								@endif

							</div>

							<div class="form-group {{ $errors->has('year') ? 'has-warning' : '' }}">
								<label for="year" class="text-muted font-size-xs">Academic year</label>

								<select class="custom-select form-control" name="year">
									<option value="" disabled="" selected="">Academic year</option>
									<option value="1" {{ $user->year == 1 ? 'selected' : ''}}>Year 1</option>
									<option value="2" {{ $user->year == 2 ? 'selected' : ''}}>Year 2</option>
									<option value="3" {{ $user->year == 3 ? 'selected' : ''}}>Year 3</option>
									<option value="4" {{ $user->year == 4 ? 'selected' : ''}}>Year 4</option>
									<option value="5" {{ $user->year == 5 ? 'selected' : ''}}>Year 5</option>
									<option value="6" {{ $user->year == 6 ? 'selected' : ''}}>Year 6</option>
								</select>

								@if ($errors->has('year'))
										<small class="form-text text-danger">
											{{ $errors->first('year') }}
										</small>
								@endif
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

							<div class="form-group {{ $errors->has('hostel_id') ? 'has-warning' : '' }}">
								<label for="hostel_id" class="text-muted font-size-xs">Residence</label>

								<select class="custom-select form-control" name="hostel_id">
									<option value="" disabled="" selected="">Residence</option>

									@foreach($data['hostels'] as $hostel)

									<option value="{{ $hostel->id }}" {{ $user->hostel_id === $hostel->id ? 'selected' : ''}} >{{ $hostel->name }}</option>

									@endforeach

								</select>

								@if ($errors->has('hostel_id'))
										<small class="form-text text-danger">
											{{ $errors->first('hostel_id') }}
										</small>
								@endif

								<small class="form-text text-muted">Your residence information is kept private and is only used to send you notices concerning your hostel.</small>
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

							<input type="submit" name="submit" value="Update profile" class="btn btn-primary btn-sm">
						</form>
					</div>
				</div> <!-- /.card -->
			</section>
		</main>
	</div> <!-- /.col -->
</div> <!-- /.row -->
@endsection
