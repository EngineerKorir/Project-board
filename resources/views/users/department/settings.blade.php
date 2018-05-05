@extends('layouts.partials._dashboard')

@section('dashboard-title')
	Settings
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{!! route('getDepartmentDashboard') !!}" title="Department home">Department home</a></li>
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
							<img src="http://amonpointtv.com/wp-content/uploads/2016/09/AMonpointTV-2792.jpg" alt="{{ $user->department->name }}" title="{{ $user->department->name }}" class="img-fluid img-thumbnail">
							<div class="span-container">
								<span><a href="#" title="Change photo"><i class="fa fa-camera font-size-lg"></i></a></span>
							</div>
						</div> <!-- /.photo -->
						<form class="" action="profile/edit" method="post">

							{!! csrf_field() !!}

							<div class="form-group">
								<label for="email" class="text-muted font-size-xs">Email</label>
								<input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email address" disabled="disabled">
								<small class="form-text text-muted">Your email address is kept private and is only used to receive notifications.</small>
							</div>

							<div class="form-group">
								<label for="phone" class="text-muted font-size-xs">Phone</label>
								<input type="tel" name="phone" value="{{ $user->phone }}" class="form-control" placeholder="Email address" disabled="disabled">
								<small class="form-text text-muted">Your email address is kept private and is only used to receive notifications.</small>
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
