@extends('layouts.partials._dashboard')
@section('header-scripts')

@endsection
@section('dashboard-title')
New notice
@endsection
@section('dashboard-header')
@endsection


@section('breadcrumb')
<li class="breadcrumb-item"><a href="{!! route('getLecturerDashboard') !!}" title="Lecturer home">Lecturer home</a></li>
<li class="breadcrumb-item active">New notice</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col-md-9">
		<main>
			<section id="notices-new">
						<form class="" action="{!! route('postLecturerNewNotice') !!}" method="POST" data-parsley-validate="">

							{{ csrf_field() }}

							<div class="form-group {{ $errors->has('title') ? 'has-warning' : '' }}">
								<label for="title" class="text-muted font-size-xs">Title</label>

								<input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Title*" required="">

								@if ($errors->has('title'))
                <small class="form-text text-danger">
                  {{ $errors->first('title') }}
                </small>
                @endif
							</div>

							<div class="form-group {{ $errors->has('body') ? 'has-warning' : '' }}">
								<label for="body" class="text-muted font-size-xs">Body</label>

								<textarea name="body" id="body-wyg" rows="14" class="form-control" placeholder="Body*" required="">{{ old('body') }}</textarea>

								@if ($errors->has('body'))
                <small class="form-text text-danger">
                  {{ $errors->first('body') }}
                </small>
                @endif
							</div>

							<div class="row">
								<div class="col mt-1">
									<label for="deadline" class="text-muted font-size-xs">Deadline (Optional, default 14 days)</label>

									<input type="text" name="deadline" value="{{ old('deadline') }}" class="datepicker-here form-control" data-position="top left" data-language='en' data-timepicker="true" placeholder="Deadline">

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
						<div class="card-header">Category</div>
						<div class="card-block pr-1">
							<div class="scroll-div">
								<div class="custom-controls-stacked">
									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="select[]" value="one" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">CCS 314</span>
									</label>
									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="select[]" value="one" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">CCT 312</span>
									</label>
									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="select[]" value="one" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">CCS 209</span>
									</label>
									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="select[]" value="one" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">CCS 104</span>
									</label>
									<label class="custom-control custom-checkbox ml-2">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Projects</span>
									</label>
									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="select[]" value="one" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">CCT 414</span>
									</label>
								</div> <!-- /.custom-controls-stacked -->
							</div> <!-- /.scroll-div -->
						</div>
					</div>

					<div class="card mt-3">
						<div class="card-header">Target</div>
						<div class="card-block pr-1">
							<div class="scroll-div">
								<div class="custom-controls-stacked">
									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="select[]" value="one" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">First years</span>
									</label>
									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="select[]" value="one" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Second years</span>
									</label>
									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="select[]" value="one" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Third years</span>
									</label>
									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="select[]" value="one" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Fourth years</span>
									</label>
									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="select[]" value="one" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Fifth years</span>
									</label>
									<label class="custom-control custom-checkbox ml-2">
										<input type="checkbox" name="select[]" value="one" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Sixth years</span>
									</label>
								</div> <!-- /.custom-controls-stacked -->
							</div> <!-- /.scroll-div -->
						</div>
					</div>

					<button type="submit" name="submit" class="btn btn-primary btn-sm mt-5" value="1" title="Publish">Publish</button>

					<button type="submit" name="submit" class="btn btn-outline-info btn-sm mt-5 ml-2 mr-2" value="2" title="Draft">Draft</button>

					<button type="submit" name="submit" class="btn btn-outline-info btn-sm mt-5" title="Trash">Trash</button>

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
