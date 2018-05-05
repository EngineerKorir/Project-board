@extends('layouts.partials._dashboard')

@section('dashboard-title')
My followed
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/profile/view" title="My profile">Profile</a></li>
<li class="breadcrumb-item active">My followed</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col">
		<main>
			<section id="profile-myFollowers">

				<div class="card">
					<div class="card-header"><i class="fa fa-clipboard mr-2"></i>My followed</div>
					<div class="card-block text-center p-1">

						<div class="subscribers-box">
							<img src="http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg" alt="Lana" title="Lana" class="img-fluid small-img">
							<strong><a href="#">Lana Achieng</a></strong><br>
							Computer Science<br>
							<form class="" action="/profile/my-followed" method="post">
								<input type="submit" name="submit" value="Unfollow" class="btn btn-primary btn-sm mt-2">
							</form>
						</div>

						<div class="subscribers-box">
							<img src="http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg" alt="Lana" title="Lana" class="img-fluid small-img">
							<strong><a href="#">Lana Achieng</a></strong><br>
							Computer Science<br>
							<form class="" action="/profile/my-followed" method="post">
								<input type="submit" name="submit" value="Unfollow" class="btn btn-primary btn-sm mt-2">
							</form>
						</div>

						<div class="subscribers-box">
							<img src="http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg" alt="Lana" title="Lana" class="img-fluid small-img">
							<strong><a href="#">Lana Achieng</a></strong><br>
							Computer Science<br>
							<form class="" action="/profile/my-followed" method="post">
								<input type="submit" name="submit" value="Unfollow" class="btn btn-primary btn-sm mt-2">
							</form>
						</div>

						<div class="subscribers-box">
							<img src="http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg" alt="Lana" title="Lana" class="img-fluid small-img">
							<strong><a href="#">Lana Achieng</a></strong><br>
							Computer Science<br>
							<form class="" action="/profile/my-followed" method="post">
								<input type="submit" name="submit" value="Unfollow" class="btn btn-primary btn-sm mt-2">
							</form>
						</div>

						<div class="subscribers-box">
							<img src="http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg" alt="Lana" title="Lana" class="img-fluid small-img">
							<strong><a href="#">Lana Achieng</a></strong><br>
							Computer Science<br>
							<form class="" action="/profile/my-followed" method="post">
								<input type="submit" name="submit" value="Unfollow" class="btn btn-primary btn-sm mt-2">
							</form>
						</div>

					</div>
				</div> <!-- /.card -->
			</section>
		</main>
	</div> <!-- /.col -->
</div> <!-- /.row -->
@endsection
