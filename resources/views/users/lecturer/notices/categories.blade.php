@extends('layouts.partials._dashboard')

@section('dashboard-title')
Notice categories
@endsection

@section('dashboard-header')
@endsection


@section('breadcrumb')
<li class="breadcrumb-item"><a href="{!! route('getLecturerDashboard') !!}" title="Lecturer home">Lecturer home</a></li>
<li class="breadcrumb-item active">Notice categories</li>
@endsection

@section('dashboard-content')
<div class="row">
	<div class="col-md-9">
		<main>
			<section id="notices-cats">
				<div class="row">
					<div class="col">
						<div class="card">
							<div class="card-header bb-0">Categories</div>
							<div class="card-block p-0">

								@if ($categories->isEmpty())

				        <p class="text-center pt-5 pb-5">You have not created any categories.</p>

				        @else

								<table class="table table-hover">
									<thead>
										<tr>
											<th></th>
											<th>Title</th>
											<th></th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>

										@foreach ($categories as $category)

										<tr>
											<td width="2%">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" name="select[]" value="{{ $category->id }}" class="custom-control-input">
													<span class="custom-control-indicator"></span>
												</label>
											</td>
											<td><a href="#">{{ $category->title }}</a></td>
											<td><span class="badge badge-default" title="{{ $category->notices->count() }} notices">{{ $category->notices->count() }}</span></td>
											<td>
												<div class="edit-delete font-size-xs mt-2">
													<i class="fa fa-edit"></i> <a href="#" data-title="Edit" data-toggle="modal" data-target="#edit">Edit</a>
													<i class="fa fa-trash-o ml-2"></i> <a href="#" data-title="Delete" data-toggle="modal" data-target="#edit">Delete</a>
												</div>
											</td>
										</tr>

										@endforeach

									</tbody>
								</table> <!-- /.table table-bordered table hover -->

								@endif

							</div>
						</div> <!-- /.card -->
					</div> <!-- /.col -->
				</div> <!-- /row -->
				<div class="pl-3 mt-3">
					<span class="font-size-sm">With selected items</span>
					<select class="custom-select form-control-sm ml-2" name="actions">
						<option value="0">Draft</option>
						<option value="1">Delete</option>
					</select>
					<input type="submit" name="submit" value="Apply" class="btn btn-primary btn-sm ml-2">
				</div>
			</section>
		</main>
	</div> <!--/.col-md-9-->

	<div class="col-md-3">
		<aside>
			<section id="notices-cats-aside">
				<div class="card">
					<div class="card-header bb-0">New category</div>
					<div class="card-block">
						<div class="form-group">
							<form class="" action="{!! route('postLecturerNoticeCats') !!}" method="POST" data-parsley-validate="">

								{{ csrf_field() }}

								<input type="text" name="category" value="{{ old('category') }}" class="form-control" placeholder="New category">

								<input type="submit" name="submit" value="Add" class="btn btn-primary btn-sm mt-3">

							</form>
						</div>
					</div>
				</div>
			</section>
		</aside>
	</div><!--/.col-md-3-->
</div> <!--/.row-->


<!-- Begin the modals -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit category</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<input class="form-control " type="text" placeholder="Category title">
				</div>
				<div class="form-group">
					<textarea rows="4" class="form-control" placeholder="Category description"></textarea>
				</div>
			</div>
			<div class="modal-footer ">
				<button type="button" class="btn btn-primary btn-block">Update</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Delete category</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure you want to delete this Category?</p>
			</div>
			<div class="modal-footer ">
				<button type="button" class="btn btn-warning btn-sm">Yes</button>
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- End the modals -->
@endsection
