@extends('layouts.partials._dashboard')

@section('dashboard-title')
	Settings
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{!! route('getClassRepDashboard') !!}" title="Class rep home">Class rep home</a></li>
	<li class="breadcrumb-item active">Settings</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col">
		<main>
			<section id="profile-edit">
				<div class="card">
					<div class="card-header"><i class="fa fa-clipboard mr-2"></i>Settings</div>
					<div class="card-block">
						<div class="photo">
							<img src="http://amonpointtv.com/wp-content/uploads/2016/09/AMonpointTV-2792.jpg" alt="{{ $user->name }}" title="{{ $user->name }}" class="img-fluid img-thumbnail">
							<div class="span-container">
								<span><a href="#" title="Change photo"><i class="fa fa-camera font-size-lg"></i></a></span>
							</div>
						</div> <!-- /.photo -->
						<form class="" action="profile/edit" method="post">

							{!! csrf_field() !!}

							<div class="form-group">
								<label for="username" class="text-muted font-size-xs">Username</label>
								<input type="text" name="username" value="{{ $user->username }}" class="form-control" placeholder="Username" disabled="disabled">
							</div>

							<div class="form-group">
								<label for="gender" class="text-muted font-size-xs">Gender</label>
								<select class="custom-select form-control" name="gender">
									<option value="" disabled="disabled" selected="selected">Gender</option>
									<option value="1" {{ $user->gender === 1 ? 'selected="selected"' : ''}} disabled="disabled">Male</option>
									<option value="2" {{ $user->gender === 2 ? 'selected="selected"' : ''}} disabled="disabled">Female</option>
								</select>
							</div>

							<div class="form-group">
								<label for="department_id" class="text-muted font-size-xs">Department</label>
								<select class="custom-select form-control" name="department_id">
									<option value="" disabled="disabled" selected="selected">Department</option>

									@foreach($data['department'] as $department)

									<option value="{{ $department->id }}" {{ $user->department_id === $department->id ? 'selected="selected"' : ''}} >{{ $department->name }}</option>

									@endforeach

								</select>
							</div>

							<div class="form-group">
								<label for="year" class="text-muted font-size-xs">Academic year</label>
								<select class="custom-select form-control" name="year">
									<option value="" disabled="disabled" selected="selected">Academic year</option>
									<option value="1" {{ $user->year === 1 ? 'selected="selected"' : ''}}>Year 1</option>
									<option value="2" {{ $user->year === 2 ? 'selected="selected"' : ''}}>Year 2</option>
									<option value="3" {{ $user->year === 3 ? 'selected="selected"' : ''}}>Year 3</option>
									<option value="4" {{ $user->year === 4 ? 'selected="selected"' : ''}}>Year 4</option>
									<option value="5" {{ $user->year === 5 ? 'selected="selected"' : ''}}>Year 5</option>
									<option value="6" {{ $user->year === 6 ? 'selected="selected"' : ''}}>Year 6</option>
								</select>
							</div>

							<div class="form-group">
								<label for="email" class="text-muted font-size-xs">Email</label>
								<input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email address" disabled="disabled">
								<small class="form-text text-muted">Your email address is kept private and is only used to receive notifications.</small>
							</div>

							<div class="form-group">
								<label for="phone" class="text-muted font-size-xs">Phone number</label>
								<input type="tel" name="phone" value="{{ $user->phone }}" class="form-control" placeholder="Phone number" disabled="disabled">l
								<small class="form-text text-muted">Your phone number is kept private and is only used to receive notifications.</small>
							</div>

							<div class="form-group">
								<label for="bio" class="text-muted font-size-xs">Bio</label>
								<textarea name="bio" rows="8" class="form-control">{{ $user->bio }}</textarea>
							</div>

							<div class="form-group">
								<label for="password" class="text-muted font-size-xs">Password</label>
								<input type="password" name="password" value="" class="form-control" placeholder="Password">
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
