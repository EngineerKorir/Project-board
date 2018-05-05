@extends('layouts.partials._dashboard')

@section('dashboard-title')
	Settings
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{!! route('getStudentDashboard') !!}" title="Student home">Student home</a></li>
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

					</div>
				</div> <!-- /.card -->
			</section>
		</main>
	</div> <!-- /.col -->
</div> <!-- /.row -->
@endsection
