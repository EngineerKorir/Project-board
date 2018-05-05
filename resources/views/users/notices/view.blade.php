@extends('layouts.partials._dashboard')
@section('dashboard-title')
View notice
@endsection
@section('dashboard-header')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/profile/view" title="Profile">Profile</a></li>
<li class="breadcrumb-item active">View notice</li>
@endsection
@section('dashboard-content')
<div class="row">
	<div class="col-md-9">
		<main>
			<section id="notice-view">

				<div class="card">
					<div class="card-header pt-3 bb-0">
						<h6>{{ $notice->title }}</h6>
					</div>
					<div class="card-block">
						@include('layouts.partials.footers._author')
						{!! $notice->body !!}
					</div>
					<div class="card-footer pt-0 pb-0 bg-white bt-0">
						@include('layouts.partials.footers._share')
					</div>

					@if($attachment)
					<div class="card m-2">
					  <ul class="list-group list-group-flush">
							@foreach($attachment as $name)
							<li class="list-group-item font-size-xs">
								<i class="fa fa-paperclip mr-2"></i><a href="{{ URL::to('uploads/' . $name->name) }}">{{ $name->name }}</a>

								(

								@if( $name->size < 1024)
								{{ $name->size }} b

								@elseif($name->size >= 1024 &&  $name->size < 1048576 )
								{{ ceil($name->size/1024) }} kb

								@else

								{{ ceil($name->size/1048576) }} mb

								@endif
								)

							</li>
							@endforeach
					  </ul>
					</div>
					@endif
				</div>

			</section>
		</main>
		<div class="notice-comments">

			{{-- alert messages --}}
			@include('layouts.partials._alerts')

			@if ($totalComments > 0)

			<section id="notice-comments">

				<h3 class="h6"><i class="fa fa-comments-o glyph-r-margin"></i> {{ $totalComments }} Comments</h3>

				@foreach($comments as $comment)

				<article>
					<div class="notice-comments-item">
						<div class="card">
							<div class="card-block">
								<div class="card-header p-0 pb-1 pt-2 bb-0 mb-3 pl-1">
									<div class="notice-comments-avatar">

										@if ($comment->user->photo)
										<img src="{{ URL::to('images/avatars/small/' . $comment->user->photo) }}" alt="" title="" class="img-fluid" width="125">

										@else

										<img src="{{ URL::to('images/avatars/default/small/avatar.png') }}" alt="" title="" class="img-fluid">

										@endif
									</div>

									<div class="notice-comments-name">
										<h6><a href="#" class="{!! $comment->user->gender == 2 ? 'female' : ''!!}">{{ $comment->user->username }} </a><span class="notice-comments-dept glyph-r-margin">

											@if ($comment->user->department)

											{{ $comment->user->department->name }}

											@elseif ($comment->user->faculty)

											{{ $comment->user->faculty->name }}

											@endif

										</span> </h6>
									</div>
									<div class="notice-comments-datetime">
										<p>{{ $comment->created_at }}</p>
									</div>
								</div><!-- /.card-header -->
								<div class="notice-comments-body">
									{!! $comment->text !!}
								</div>
							</div>
							<div class="card-footer bg-white bt-0">
								<div class="notice-comments-footer">
									@include('layouts.partials.footers._share-comment')
								</div>
							</div>
						</div>




					</div> <!-- /.notice-comments-item -->
				</article>
				@endforeach

			</section>

			@else

			<p class="text-center pt-5 pb-5">Be the first to leave a comment.</p>

			@endif

			<div class="notice-comments-box">
				<form class="" action="{{ route('postNoticeComment', ['noticeId' => $notice->id]) }}" method="POST">
					<label for="text">Leave a comment</label>
					<textarea name="text" rows="3" class="form-control" placeholder="Your comment">{{ old('text') }}</textarea>
					<input type="submit" class="btn btn-primary btn-sm mt-2" name="submit" value="Post">
					{!! csrf_field() !!}
				</form>
			</div> <!-- /.notice-comments-box -->
		</div> <!-- /.notice-comments -->
	</div> <!-- /.col-md-9 -->
	<div class="col-md-3">
		<aside>
			<section id="notice-view-sidebar">
				<div class="notice-sidebar">
					<ul class="list-group">
						<li class="list-group-item justify-content-between">
							<div class="notice-sidebar-img">
								@if ($notice->user->photo)
								<img src="{{ URL::to('images/avatars/medium/' . $notice->user->photo) }}" alt="" title="" class="img-fluid" width="250">

								@else

								<img src="{{ URL::to('images/avatars/default/medium/avatar.png') }}" alt="" title="" class="img-fluid" width="250">

								@endif

							</div>
						</li>
						<li class="list-group-item justify-content-between">
							@if ($notice->user->role_id === 2) {{-- Department --}}

							{!! $notice->user->department->name .' '.$notice->user->username !!}

							@elseif ($notice->user->role_id === 4 && $notice->user->salutation_id !== 0) {{-- Lecturer --}}

							{!! $notice->user->salutation->name .'. '. $notice->user->username !!}

							@else {{-- Organization, Class rep ... --}}

							{!! $notice->user->username !!}

							@endif
						</li>
						<li class="list-group-item justify-content-between">
							Notices
							<span class="badge badge-default badge-pill">{{ $totalNotices }}</span>
						</li>
						<li class="list-group-item justify-content-between">
							Subscribers
							<span class="badge badge-default badge-pill">{{ $totalSubscribers }}</span>
						</li>
						<li class="list-group-item justify-content-between">
							<a class="btn btn-primary btn-sm mt-2 mb-2" href="#"><i class="fa fa-envelope-o glyph-r-margin"></i> Subscribe</a>
						</li>
					</ul>

				</div><!-- /.notice-sidebar -->
			</section>
		</aside>
	</div> <!-- /.col-md-3 -->
</div> <!-- /.row -->
@endsection
