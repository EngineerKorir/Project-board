@extends('layouts.partials._dashboard')
@section('dashboard-title')
Lana profile
@endsection
@section('dashboard-header')
@endsection
@section('dashboard-content')
<div class="row">
	<div class="col-md-8">
		<main>
			<section id="profile-view">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Posts</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" data-toggle="tab" href="#friends" role="tab">Friends</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" data-toggle="tab" href="#channels" role="tab">Channels</a>
				  </li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
				  <div class="tab-pane fade show active" id="posts" role="tabpanel">Posts</div>
				  <div class="tab-pane fade" id="friends" role="tabpanel">Friends</div>
				  <div class="tab-pane fade" id="channels" role="tabpanel">Channels</div>
				</div>
			</section>
		</main>
	</div> <!-- /.col -->
	<div class="col-md-4">
		<aside>
			<section id="profile-view-aside">
					<div class="profile-v-image">
						{{ Html::image('http://amonpointtv.com/wp-content/uploads/2016/09/AMonpointTV-2792.jpg', 'Lana', ['class' => 'img-fluid']) }}
					</div>
				<p><strong>Lana</strong></p>
				<p>Third Year</p>
				<p>Computer Science</p>
				<p>Followed since 19 May 2017</p>
			</section>
		</aside>
	</div> <!-- /.col -->
</div> <!-- /.row -->
@endsection
