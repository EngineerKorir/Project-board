@extends('layouts.partials._dashboard')

@section('dashboard-title')
All notices
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{!! route('getDepartmentDashboard') !!}" title="Department home">Department home</a></li>
<li class="breadcrumb-item active">All notices</li>
@endsection

@section('dashboard-content')
<main>
  <section id="notices-all">
    <div class="card">
      <div class="card-header"><i class="fa fa-clipboard mr-2"></i>All notices</div>
      <div class="card-block p-0">
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="hidden-xs-down"></th>
              <th>Details</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td width="2%" class="hidden-xs-down">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" name="select[]" value="one" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                </label>
              </td>
              <td class="pt-3">
                <h3><a href="#">Test Notice One. This should be a pretty long title. With extra long words.</a></h3>
                <div class="posted mt-2 mb-1 font-size-xs msg-date"><span class="date mr-2">26 Nov 2016</span> <span class="views mr-2">Views: 345</span>
                  <span class="comments">Comments: 3</span></div>
                  <div class="edit-delete font-size-xs mt-2">
                    <i class="fa fa-edit"></i> <a href="#" data-title="Edit" data-toggle="modal" data-target="#edit">Edit</a>
                    <i class="fa fa-trash-o ml-2"></i> <a href="#" data-title="Delete" data-toggle="modal" data-target="#edit">Delete</a>
                  </div>
                </td>
                <td><span class="status"><button type="button" name="button" class="btn btn-secondary btn-sm" title="Active">A</button></span></td>
              </tr>
              <tr>
                <td width="2%" class="hidden-xs-down">
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" name="select[]" value="one" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                  </label>
                </td>
                <td class="pt-3">
                  <h3><a href="#">Test Notice One. This should be a pretty long title. With extra long words.</a></h3>
                  <div class="posted mt-2 mb-1 font-size-xs msg-date"><span class="date mr-2">26 Nov 2016</span> <span class="views mr-2">Views: 345</span>
                    <span class="comments">Comments: 3</span></div>
                    <div class="edit-delete font-size-xs mt-2">
                      <i class="fa fa-edit"></i> <a href="#" data-title="Edit" data-toggle="modal" data-target="#edit">Edit</a>
                      <i class="fa fa-trash-o ml-2"></i> <a href="#" data-title="Delete" data-toggle="modal" data-target="#edit">Delete</a>
                    </div>
                  </td>
                  <td><span class="status"><button type="button" name="button" class="btn btn-warning btn-sm" title="Expired">E</button></span></td>
                </tr>
              </tbody>
            </table> <!-- /.table table-bordered table hover -->
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
