@extends('layouts.partials._dashboard')
@section('header-scripts')

@endsection
@section('dashboard-title')
New notice
@endsection
@section('dashboard-header')
@endsection


@section('breadcrumb')
<li class="breadcrumb-item"><a href="{!! route('getClassRepDashboard') !!}" title="Class rep home">Class rep home</a></li>
<li class="breadcrumb-item active">New notice</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col-md-9">
		<main>
			<section id="notices-new">
				<div class="card">
					<div class="card-header"><i class="fa fa-plus mr-2"></i>New notice</div>
					<div class="card-block p-3">
						<form class="" action="/notices/new" method="post">
							{{ csrf_field() }}
							<div class="form-group">
								<input type="text" name="title" value="" class="form-control" placeholder="Title">
							</div>
							<div class="form-group">
								<label for="body">Body</label>
								<textarea name="body" id="body" rows="14" cols="80" class="form-control"></textarea>
							</div>
							<div class="row">
								<div class="col-sm-12 mt-1">
									<span class="mr-3">Deadline</span>
									<select class="custom-select form-control-sm" name="month">
										<option value="0">January</option>
										<option value="1">February</option>
									</select>

									<select class="custom-select form-control-sm" name="date">
										<option value="0">14</option>
										<option value="1">15</option>
									</select>

									<select class="custom-select form-control-sm" name="hour">
										<option value="0">8AM</option>
										<option value="1">9AM</option>
									</select>

									<select class="custom-select form-control-sm" name="minute">
										<option value="0">15</option>
										<option value="1">30</option>
									</select>
								</div>
							</div>
					</div>
				</div> <!-- /.card -->
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

					<input type="submit" name="submit" class="btn btn-primary btn-sm mt-5" value="Publish" title="Publish">
					<input type="submit" name="draft" value="Draft" class="btn btn-outline-info btn-sm mt-5" title="Draft">
					<input type="submit" name="trash" value="Trash" class="btn btn-outline-info btn-sm mt-5" title="Trash">
				</form>
			</section>
		</aside>
	</div> <!-- /.col-md-3 -->
</div> <!-- .row -->
@endsection
