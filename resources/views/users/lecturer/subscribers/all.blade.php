@extends('layouts.partials._dashboard')

@section('dashboard-title')
Subscribers
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{!! route('getLecturerDashboard') !!}" title="Lecturer home">Lecturer home</a></li>
<li class="breadcrumb-item active">Subscribers</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col">
		<main>
			<section id="notices-subscribers">
				<div class="card">
					<div class="card-header bb-0">Subscribers</div>
					<div class="card-block p-0 pt-3 text-center">

						@if ($subscribers->isEmpty())

		        <p class="text-center pt-5 pb-5">You do not have any subscribers yet.</p>

		        @else

						@foreach ($subscribers as $subscriber)

						<div class="subscribers-box">
							@if ($subscriber->photo)
							<img src="{{ URL::to('images/avatars/medium/' . $subscriber->photo) }}" alt="Avatar" class="img-fluid center-block" width="250">

							@else

							<img src="{{ URL::to('images/avatars/default/medium/avatar.png') }}" class="img-fluid center-block">

							@endif

							<strong><a href="#" title="{{ $subscriber->username }}">{{ $subscriber->username }}</a></strong><br>
							{{ $subscriber->department->name }}
						</div>

						@endforeach

						@endif
					</div>
				</div> <!-- /.card -->
			</section>
		</main>
	</div> <!-- /.col -->
</div> <!-- /.row -->
<div class="row">
	<div class="col p-5 text-center">
		{!! $subscribers->links() !!}
	</div>
</div>
@endsection
