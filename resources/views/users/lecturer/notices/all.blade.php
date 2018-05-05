@extends('layouts.partials._dashboard')

@section('dashboard-title')
All notices <a href="{!! route('getLecturerNewNotice') !!}" class="btn btn-primary btn-sm mb-2 ml-5">New notice</a>
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{!! route('getLecturerDashboard') !!}" title="Lecturer home">Lecturer home</a></li>
<li class="breadcrumb-item active">All notices</li>
@endsection

@section('dashboard-content')
<main>
  <section id="notices-all">

    {{-- Alert messages --}}
    @include('layouts.partials._alerts')

    <div class="card">
      <div class="card-header bb-0">All notices</div>
      <div class="card-block p-0">

        @if ($notices->isEmpty())

        <p class="text-center pt-5 pb-5">You have not created any notices.</p>

        @else

        <table class="table table-hover">
          <thead>
            <tr>
              <th class="hidden-xs-down"></th>
              <th>Details</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

            @foreach($notices as $notice)

            <tr>
              <td width="2%" class="hidden-xs-down">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" name="select[]" value="{{ $notice->id }}" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                </label>
              </td>

              <td class="pt-3">
                <h3>
                  <a href="{{ route('getShowNotice', ['id' => $notice->id, 'slug' => $notice->slug]) }}" title="{{ $notice->title }}">{{ $notice->title }}</a>
                </h3>

                <div class="posted mt-2 mb-1 font-size-xs msg-date">
                  <span class="date mr-2">{{ $notice->created_at }}</span>
                  <span class="views mr-2">Views: {{ $notice->views }}</span>
                  <span class="comments mr-2">Comments: {{ $notice->comments->count() }}</span>
                  <div class="d-block mt-2"></div>
                  @if ($notice->categories)
                    @foreach ($notice->categories as $catName)
                    <span class="badge badge-pill badge-success mr-2">{{ $catName->title }}</span>
                    @endforeach
                  @endif

                  @if ($notice->targetDepartments)
                    @foreach ($notice->targetDepartments as $targetDept)
                    <span class="badge badge-pill badge-info mr-2">{{ $targetDept->name }}</span>
                    @endforeach
                  @endif

                  @if ($notice->targetYears)
                    @foreach ($notice->targetYears as $targetYear)
                    <span class="badge badge-pill badge-danger mr-2">{{ $targetYear->name }}</span>
                    @endforeach
                  @endif
                </div>

                <form id="deleteNotice-{{$notice->id}}" action="{!! route('deleteLecturerNotice', ['id' => $notice->id]) !!}" method="DELETE">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                </form>

                <div class="edit-delete font-size-xs mt-2">
                  <i class="fa fa-edit"></i>
                  <a href="{{ route('getLecturerEditNotice', ['id' => $notice->id]) }}">Edit</a>

                  <i class="fa fa-trash-o ml-2"></i> <a href="#" onclick="document.getElementById('deleteNotice-{{$notice->id}}').submit();">Delete</a>
                </div>
              </td>

              @if ($notice->status == 1)

              <td><span class="status"><button type="button" name="button" class="btn btn-info btn-sm" title="Active">A</button></span></td>

              @elseif ($notice->status == 2)

              <td><span class="status"><button type="button" name="button" class="btn btn-secondary btn-sm" title="Draft">D</button></span></td>

              @else

              <td><span class="status"><button type="button" name="button" class="btn btn-warning btn-sm" title="Expired">E</button></span></td>

              @endif
            </tr>
            @endforeach
          </tbody>
        </table> <!-- /.table table-bordered table hover -->
        @endif
      </div> <!-- /.card-block -->
    </div> <!-- /.card -->


    <div class="hidden-xs-down pl-3 mt-5">
      <span class="font-size-sm">With selected items</span>
      <select class="custom-select form-control-sm ml-2" name="actions">
        <option value="0">Draft</option>
        <option value="1">Delete</option>
      </select>
      <input type="submit" name="submit" value="Apply" class="btn btn-primary btn-sm ml-2">
    </div>
  </section>
</main>

<!-- Begin the modals -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Edit notice</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input class="form-control " type="text" placeholder="Notice title">
        </div>
        <div class="form-group">
          <textarea rows="4" class="form-control" placeholder="Notice body"></textarea>
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
        <h4 class="modal-title">Delete notice</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Notice?</p>
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
