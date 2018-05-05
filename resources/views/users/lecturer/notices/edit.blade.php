@extends('layouts.partials._dashboard')
@section('header-scripts')

@endsection
@section('dashboard-title')
Edit notice
@endsection
@section('dashboard-header')
@endsection


@section('breadcrumb')
<li class="breadcrumb-item"><a href="{!! route('getLecturerDashboard') !!}" title="Lecturer home">Lecturer home</a></li>
<li class="breadcrumb-item active">Edit notice</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col-md-9">
		<main>
			<section id="notices-new">
						<form class="" action="{!! route('postLecturerEditNotice', ['id' => $notice->id]) !!}" method="POST" data-parsley-validate="">

							{{ csrf_field() }}

							<div class="form-group {{ $errors->has('title') ? 'has-warning' : '' }}">
								<label for="title" class="text-muted font-size-xs">Title</label>

								<input type="text" name="title" value="{{ $notice->title }}" class="form-control" placeholder="Title*" required="">

								@if ($errors->has('title'))
                <small class="form-text text-danger">
                  {{ $errors->first('title') }}
                </small>
                @endif
							</div>

							<div class="form-group {{ $errors->has('body') ? 'has-warning' : '' }}">
								<label for="body" class="text-muted font-size-xs">Body</label>

								<textarea name="body" id="body-wyg" rows="14" class="form-control" required="">{{ $notice->body }}</textarea>

								@if ($errors->has('body'))
                <small class="form-text text-danger">
                  {{ $errors->first('body') }}
                </small>
                @endif
							</div>

							<div class="row">
								<div class="col mt-1">
									<label for="deadline" class="text-muted font-size-xs">Deadline (Optional, default 14 days)</label>

									<input type="text" name="deadline" value="{{ date_format($date, 'Y-m-d H:i:s') }}" class="datepicker-here form-control" data-position="top left" data-language='en' data-timepicker="true" placeholder="Deadline">

									@if ($errors->has('deadline'))
	                <small class="form-text text-danger">
	                  {{ $errors->first('deadline') }}
	                </small>
	                @endif
								</div>
							</div>



				</section>
			</main>
		</div> <!-- /.col-md-9 -->

		<div class="col-md-3">
			<aside>
				<section id="notices-new-aside">
					<div class="card">
						<div class="card-header bb-0">Notice category</div>
						<div class="card-block pr-1">

							@if ($categories->isEmpty())

			        <p class="text-center pt-5 pb-5">You have not created any categories.</p>

			        @else

							<div class="scroll-div">
								<div class="custom-controls-stacked">

									@foreach ($categories as $category)

									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="category_id[]" value="{{ $category->id }}" class="custom-control-input"
										{{ in_array($category->id, $catIds) ? 'checked' : '' }}
										>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">{{ $category->title }}</span>
									</label>

									@endforeach

								</div> <!-- /.custom-controls-stacked -->
							</div> <!-- /.scroll-div -->

							@endif

						</div>
					</div>

					<div class="card mt-3">
						<div class="card-header bb-0">Student year</div>
						<div class="card-block pr-1">
							<div class="scroll-div">

								<div class="custom-controls-stacked">

									@foreach ($years as $year)

									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="target_id[year][]" value="{{ $year->id }}" class="custom-control-input"
										{{ in_array($year->id, $yearIds) ? 'checked' : '' }}
										>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">{{ $year->name }}</span>
									</label>

									@endforeach

								</div> <!-- /.custom-controls-stacked -->
							</div> <!-- /.scroll-div -->
						</div>
					</div>

					<div class="card mt-3">
						<div class="card-header bb-0">Student department</div>
						<div class="card-block pr-1">
							<div class="scroll-div">
								<div class="custom-controls-stacked">

									@foreach ($departments as $department)

									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="target_id[department][]" value="{{ $department->id }}" class="custom-control-input"
										{{ in_array($department->id, $deptIds) ? 'checked' : '' }}
										>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">{{ $department->name }}</span>
									</label>

									@endforeach

								</div> <!-- /.custom-controls-stacked -->
							</div> <!-- /.scroll-div -->
						</div>
					</div>

					<label class="custom-control custom-checkbox ml-2 mt-3 font-size-xs">
						<input type="checkbox" name="strict" value="strict" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Strict. Notice visible by selected users only</span>
					</label>

					<button type="submit" name="submit" class="btn btn-primary btn-sm mt-5" value="1" title="Edit">Edit</button>

					<button type="submit" name="submit" class="btn btn-outline-info btn-sm mt-5 ml-2 mr-2" value="2" title="Draft">Draft</button>

					<button type="button" name="trash" class="btn btn-outline-info btn-sm mt-5" title="Trash">Trash</button>

				</form>
			</section>
		</aside>
	</div> <!-- /.col-md-3 -->
</div> <!-- .row -->
@endsection

@section('scripts')
<script src="{!! URL::to('js/trumbowyg.min.js') !!}"></script>
<script src="{!! URL::to('js/datepicker.min.js') !!}"></script>
<!-- Include English language -->
<script src="{!! URL::to('js/i18n/datepicker.en.js') !!}"></script>
<script src="{!! URL::to('js/parsley.min.js') !!}"></script>

<script>

// Initialize Trumbowyg

$('textarea').trumbowyg({
    btns: [
        ['formatting'],
        'btnGrp-semantic',
        ['link'],
        ['insertImage'],
        'btnGrp-justify',
        'btnGrp-lists',
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen']
    ]
});
</script>
@endsection
