@extends('layouts.partials._dashboard')

@section('dashboard-title')
	Dashboard
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item active">Student home</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col">
		<main>
			<section id="profile-edit">
				<div class="card">
					<div class="card-header bb-0">Dashboard</div>
					<div class="card-block">

						<div class="row text-center">
							<div class="col-xs-6 col-sm-6 col-md-4">
								<a href="{!! route('getStudentSubscription') !!}">
									<i class="fa fa-clipboard text-info dashboard-icon"></i>
								</a>
								<h5 class="pt-3">Subscriptions</h5>
								<h3 class="text-muted pb-3">{{ $subscriptions }}</h3>
							</div>

							<div class="col-xs-6 col-sm-6 col-md-4">
								<a href="{!! route('getStudentSubscriber') !!}">
									<i class="fa fa-user text-warning dashboard-icon"></i>
								</a>
								<h5 class="pt-3">Subscribers</h5>
								<h3 class="text-muted pb-3">{{ $subscribers }}</h3>
							</div>

							<div class="col-xs-6 col-sm-6 col-md-4">
								<a href="{!! route('getLecturerNoticeCats') !!}">
									<i class="fa fa-folder-open text-success dashboard-icon"></i>
								</a>
								<h5 class="pt-3">Reminders</h5>
								<h3 class="text-muted pb-3">44</h3>
							</div>

							<div class="col-xs-6 col-sm-6 col-md-4">
								<a href="{!! route('getLecturerSubscriberComments') !!}">
									<i class="fa fa-comments text-danger dashboard-icon"></i>
								</a>
								<h5 class="pt-3">Saved notices</h5>
								<h3 class="text-muted pb-3">44</h3>
							</div>

							<div class="col-xs-6 col-sm-6 col-md-4">
								<a href="{!! route('getLecturerSubscriberComments') !!}">
									<i class="fa fa-comments text-danger dashboard-icon"></i>
								</a>
								<h5 class="pt-3">Conversations</h5>
								<h3 class="text-muted pb-3">{{ $comments->count()}}</h3>
							</div>

							<div class="col-xs-6 col-sm-6 col-md-4">
								<a href="{!! route('getStudentEdit') !!}">
										<i class="fa fa-wrench text-info dashboard-icon"></i>
								</a>
								<h5 class="pt-3 pb-3">Settings</h5>
							</div>
						</div>

					</div>
				</div> <!-- /.card -->
			</section>
		</main>
	</div> <!-- /.col -->
</div> <!-- /.row -->
@endsection
