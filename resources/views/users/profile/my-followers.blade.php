@extends('layouts.partials._dashboard')
@section('dashboard-title')
My followers
@endsection
@section('dashboard-header')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/profile/view" title="My profile">Profile</a></li>
<li class="breadcrumb-item active">My followers</li>
@endsection
@section('dashboard-content')
<div class="row">
	<div class="col">
		<main>
			<section id="profile-myFollowers" class="text-center">
				<div class="subscribers-box">
					{{ Html::image('http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg', 'Lana', ['class' => 'img-fluid small-img']) }}
					<strong><a href="#">Lana Achieng</a></strong><br>
					Computer Science<br>
					{{ Form::open(['url' => 'foo/bar']) }}
					{{ Form::button('Block', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm mt-2']) }}
					{{ Form::close() }}
				</div>
				<div class="subscribers-box">
					{{ Html::image('http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg', 'Lana', ['class' => 'img-fluid small-img']) }}
					<strong><a href="#">Lana Achieng</a></strong><br>
					Computer Science<br>
					{{ Form::open(['url' => 'foo/bar']) }}
					{{ Form::button('Block', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm mt-2']) }}
					{{ Form::close() }}
				</div>
				<div class="subscribers-box">
					{{ Html::image('http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg', 'Lana', ['class' => 'img-fluid small-img']) }}
					<strong><a href="#">Lana Achieng</a></strong><br>
					Computer Science<br>
					{{ Form::open(['url' => 'foo/bar']) }}
					{{ Form::button('Block', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm mt-2']) }}
					{{ Form::close() }}
				</div>
				<div class="subscribers-box">
					{{ Html::image('http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg', 'Lana', ['class' => 'img-fluid small-img']) }}
					<strong><a href="#">Lana Achieng</a></strong><br>
					Computer Science<br>
					{{ Form::open(['url' => 'foo/bar']) }}
					{{ Form::button('Block', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm mt-2']) }}
					{{ Form::close() }}
				</div>
				<div class="subscribers-box">
					{{ Html::image('http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg', 'Lana', ['class' => 'img-fluid small-img']) }}
					<strong><a href="#">Lana Achieng</a></strong><br>
					Computer Science<br>
					{{ Form::open(['url' => 'foo/bar']) }}
					{{ Form::button('Block', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm mt-2']) }}
					{{ Form::close() }}
				</div>
			</section>
		</main>
	</div> <!-- /.col -->
</div> <!-- /.row -->
@endsection
