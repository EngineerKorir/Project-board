@extends('layouts.partials._dashboard')

@section('dashboard-title')
	Edit profile
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="/profile/view" title="My profile">Profile</a></li>
	<li class="breadcrumb-item active">Edit profile</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col">
		<main>
			<section id="profile-edit">
				<div class="card">
					<div class="card-header"><i class="fa fa-clipboard mr-2"></i>Edit profile</div>
					<div class="card-block">
						<div class="photo">
							<img src="http://amonpointtv.com/wp-content/uploads/2016/09/AMonpointTV-2792.jpg" alt="Lana" title="Lana" class="img-fluid img-thumbnail">
							<div class="span-container">
								<span><a href="#" title="Change photo"><i class="fa fa-camera font-size-lg"></i></a></span>
							</div>
						</div> <!-- /.photo -->
						<form class="" action="profile/edit" method="post">

							{!! csrf_field() !!}

							<div class="form-group">
								<input type="text" name="username" value="" class="form-control" placeholder="Lana" disabled="disabled" title="Disabled">
							</div>

							<div class="form-group">
								<select class="custom-select form-control" name="gender">
									<option value="" disabled="disabled" selected="selected">Gender</option>
									<option value="1" disabled="disabled">Male</option>
									<option value="2" disabled="disabled">Female</option>
								</select>
							</div>

							<div class="form-group">
								<input type="email" name="email" value="" class="form-control" placeholder="Email address" disabled="disabled">
								<small class="form-text text-muted">Your email address is kept private and is only used to receive notifications.</small>
							</div>

							<div class="form-group">
								<select class="custom-select form-control" name="department_id">
									<option value="" disabled="disabled" selected="selected">Department</option>
									<option value="1">Computer Science</option>
									<option value="2">Music</option>
									<option value="3">Arts</option>
								</select>
							</div>

							<div class="form-group">
								<select class="custom-select form-control" name="year">
									<option value="" disabled="disabled" selected="selected">Academic year</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>

							<div class="form-group">
								<input type="tel" name="phone" value="" class="form-control" placeholder="Phone">
								<small class="form-text text-muted">Your phone number is kept private and is only used to receive notifications.</small>
							</div>

							<div class="form-group">
								<select class="custom-select form-control" name="hostel_id">
									<option value="" disabled="disabled" selected="selected">Residence</option>
									<option value="1">Equator</option>
									<option value="2">Old Makerere</option>
									<option value="3">Tsunami</option>
								</select>
								<small class="form-text text-muted">Your residence information is kept private and is only used to send you notices concerning your hostel.</small>
							</div>

							<div class="form-group">
								<input type="password" name="password" value="" class="form-control" placeholder="Password">
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
