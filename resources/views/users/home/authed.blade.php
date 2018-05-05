@extends('layouts.partials._dashboard')
@section('dashboard-title')
All activity
@endsection
@section('dashboard-header')
@endsection


@section('dashboard-content')
<div class="row">
	<div class="col-md-9">
		<main>
			<section id="notice-view">

				<div class="row">
				  <div class="col pb-3">

						@if (in_array($user->role_id, ['1','5'])) {{-- student or class rep --}}

				    <div class="dropdown">
				      <button class="btn btn-secondary btn-sm borderless-btn dropdown-toggle" type="button" id="selector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				        <strong>Categories</strong>
				      </button>
				      <div class="dropdown-menu" aria-labelledby="selector">
				        <a class="dropdown-item {{ isset($subscribedChannels) ? 'active' : '' }}" href="{{ route('getHome') }}">Subscribed Channels</a>
				        <a class="dropdown-item {{ isset($myDepartment) ? 'active' : '' }}" href="{{ route('getHomeDepartment') }}">Department</a>
				      </div>
				    </div>

						@endif

				  </div>
				</div>

				@if ($notices->isEmpty())

        <p class="text-center pt-5 pb-5">There are no annoucements yet.</p>

        @else

        @foreach ($notices as $notice)

        <div class="card mb-5">
					<div class="card-header pt-3 bb-0">
						<h6>
							<a href="{{ route('getShowNotice', ['id' => $notice->id, 'slug' => $notice->slug]) }}" title="{{ $notice->title }}">{{ $notice->title }}</a>
						</h6>
					</div>
					<div class="card-block">
						@include('layouts.partials.footers._author')
						{!! $notice->body !!}
					</div>
					<div class="card-footer bg-white pt-0 pb-0 bt-0">
						@include('layouts.partials.footers._share-home')
					</div>
				</div>

        @endforeach
				@endif

        <div class="text-center">
          {!! $notices->links() !!}
        </div>

			</section>
		</main>

	</div> <!-- /.col-md-9 -->
	<div class="col-md-3">
		<aside>
			<section id="notice-view-sidebar">
				<div class="notice-sidebar">


				</div><!-- /.notice-sidebar -->
			</section>
		</aside>
	</div> <!-- /.col-md-3 -->
</div> <!-- /.row -->
@endsection
