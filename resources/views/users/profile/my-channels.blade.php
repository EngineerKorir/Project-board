@extends('layouts.partials._dashboard')

@section('dashboard-title')
My channels
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/profile/view" title="My profile">Profile</a></li>
<li class="breadcrumb-item active">Channels</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col">
		<main>
			<section id="profile-myChannels">

				<div class="card">
					<div class="card-header"><i class="fa fa-clipboard mr-2"></i>My channels</div>
					<div class="card-block text-center p-1">

						<div class="subscribers-box">
							<img src="https://pbs.twimg.com/profile_images/1610379352/Maseno_University_Official_avatar.png" alt="Maseno University" class="img-fluid small-img center-block" title="Maseno University">
							<strong><a href="#">Computer Science</a></strong><br>
							345 subscribers<br>
							<form class="" action="profile/mychannels" method="post">
								<input type="submit" name="submit" value="Unsubscribe" class="btn btn-primary btn-sm mt-2">
							</form>
						</div>

						<div class="subscribers-box">
							<img src="https://pbs.twimg.com/profile_images/1610379352/Maseno_University_Official_avatar.png" alt="Maseno University" class="img-fluid small-img center-block" title="Maseno University">
							<strong><a href="#">Computer Science</a></strong><br>
							345 subscribers<br>
							<form class="" action="profile/mychannels" method="post">
								<input type="submit" name="submit" value="Unsubscribe" class="btn btn-primary btn-sm mt-2">
							</form>
						</div>

						<div class="subscribers-box">
							<img src="https://pbs.twimg.com/profile_images/1610379352/Maseno_University_Official_avatar.png" alt="Maseno University" class="img-fluid small-img center-block" title="Maseno University">
							<strong><a href="#">Computer Science</a></strong><br>
							345 subscribers<br>
							<form class="" action="profile/mychannels" method="post">
								<input type="submit" name="submit" value="Unsubscribe" class="btn btn-primary btn-sm mt-2">
							</form>
						</div>

						<div class="subscribers-box">
							<img src="https://pbs.twimg.com/profile_images/1610379352/Maseno_University_Official_avatar.png" alt="Maseno University" class="img-fluid small-img center-block" title="Maseno University">
							<strong><a href="#">Computer Science</a></strong><br>
							345 subscribers<br>
							<form class="" action="profile/mychannels" method="post">
								<input type="submit" name="submit" value="Unsubscribe" class="btn btn-primary btn-sm mt-2">
							</form>
						</div>

						<div class="subscribers-box">
							<img src="https://pbs.twimg.com/profile_images/1610379352/Maseno_University_Official_avatar.png" alt="Maseno University" class="img-fluid small-img center-block" title="Maseno University">
							<strong><a href="#">Computer Science</a></strong><br>
							345 subscribers<br>
							<form class="" action="profile/mychannels" method="post">
								<input type="submit" name="submit" value="Unsubscribe" class="btn btn-primary btn-sm mt-2">
							</form>
						</div>
					</div>
				</div><!-- /.card -->
			</section>
		</main>
	</div> <!-- /.col -->
</div> <!-- /.row -->
@endsection
