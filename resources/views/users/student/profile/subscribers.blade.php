@extends('layouts.partials._dashboard')

@section('dashboard-title')
My subscribers
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{!! route('getStudentDashboard') !!}" title="Student home">Student home</a></li>
<li class="breadcrumb-item active">My subscribers</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col">
		<main>
			<section id="profile-myChannels">

				<div class="card">
					<div class="card-header bb-0">My subscribers</div>
					<div class="card-block text-center p-1">

						@if ($subscribers->isEmpty())

						<p class="text-center pt-5 pb-5">You do not have any subscribers yet.</p>

						@else
							@foreach ($subscribers as $channel)
							<div class="subscribers-box m-2 mb-5 pt-3">
								@if ($channel->photo)
								<img src="{{ URL::to('images/avatars/medium/' . $channel->photo) }}" alt="Avatar" class="img-fluid small-img center-block">

								@else

								<img src="{{ URL::to('images/avatars/default/medium/avatar.png') }}" class="img-fluid small-img center-block">

								@endif

								@if ($channel->role_id === 2)

								<a href="#" class="d-block text-overflow">{{ $channel->department->name }} - {{ $channel->username }}</a>
								<span class="badge badge-pill badge-info mt-2 mb-2">Department</span>

								@else

								<a class="d-block text-overflow" href="#">{{ $channel->username }}</a>

								@if ($channel->role_id === 1)
								<span class="badge badge-pill badge-info mt-2 mb-2">Student</span>

								@elseif ($channel->role_id === 3)
								<span class="badge badge-pill badge-info mt-2 mb-2">Organization</span>

								@elseif ($channel->role_id === 4)
								<span class="badge badge-pill badge-info mt-2 mb-2">Lecturer</span>

								@else
								<span class="badge badge-pill badge-info mt-2 mb-2">Class rep</span>
								@endif

								@endif

								<div>{{ $totalSubscribers[$channel->id] }} subscribers</div>

								<form class="" action="{{ route('postBlock', ['id' => $channel->id ]) }}" method="POST" id="postBlock-{{ $channel->id }}">
									{{ csrf_field() }}

									@if ($isBlocked[$channel->id])
									<input type="submit" name="submit" value="Unblock" class="btn btn-danger btn-sm mt-2 mb-2">
									@else
									<input type="submit" name="submit" value="Block" class="btn btn-primary btn-sm mt-2 mb-2">
									@endif
								</form>
							</div>
							@endforeach
						@endif

					</div>
				</div><!-- /.card -->
			</section>
		</main>
	</div> <!-- /.col -->
</div> <!-- /.row -->
@endsection
