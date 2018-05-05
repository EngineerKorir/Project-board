@extends('layouts.partials._dashboard')

@section('dashboard-title')
Comments
@endsection

@section('dashboard-header')
@endsection


@section('breadcrumb')
<li class="breadcrumb-item"><a href="{!! route('getOrganizationDashboard') !!}" title="Organization home">Organization home</a></li>
<li class="breadcrumb-item active">Comments</li>
@endsection

@section('dashboard-content')
<main>
  <section id="notices-comments">
    <div class="row">
      <div class="card">
        <div class="card-header"><i class="fa fa-comment-o mr-2"></i>Comments</div>
        <div class="card-block p-0">
          <table class="table table-hover">
            <tbody>
              <tr>
                <td width="2%" class="hidden-xs-down">
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" name="select[]" value="one" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                  </label>
                </td>
                <td>
                  <div class="d-flex">
                    <div class="info mr-2">
                      <img src="http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg" alt="Lana" title="Lana" class="img-fluid">
                    </div>
                    <div class="author">
                      <div class="name"><h3><a href="#">Lana</a></h3></div>
                      <div class="date"><span class="msg-date font-size-xs">3 days ago</span></div>
                    </div>
                  </div>
                  <div class="comment">
                    <p>This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might.</p>
                  </div>
                  <div class="edit-delete font-size-xs mt-2">
                    <span><i class="fa fa-edit"></i> <a href="#" data-title="Edit" data-toggle="modal" data-target="#edit">Edit</a></span>
                    <span><i class="fa fa-trash-o ml-2"></i> <a href="#" data-title="Delete" data-toggle="modal" data-target="#edit">Delete</a></span>
                  </div>
                </td>
                <td class="pt-5">
                  <div class="read-more mt-2 font-size-xs">
                    <a href="#" class="btn btn-primary btn-sm" title="View all comments"><i class="fa fa-arrow-right"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td width="2%" class="hidden-xs-down">
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" name="select[]" value="one" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                  </label>
                </td>
                <td>
                  <div class="d-flex">
                    <div class="info mr-2">
                      <img src="http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg" alt="Lana" title="Lana" class="img-fluid">
                    </div>
                    <div class="author">
                      <div class="name"><h3><a href="#">Ken</a></h3></div>
                      <div class="date"><span class="msg-date font-size-xs">6 days ago</span></div>
                    </div>
                  </div>
                  <div class="comment">
                    <p>This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might.</p>
                  </div>
                  <div class="edit-delete font-size-xs mt-2">
                    <span><i class="fa fa-edit"></i> <a href="#" data-title="Edit" data-toggle="modal" data-target="#edit">Edit</a></span>
                    <span><i class="fa fa-trash-o ml-2"></i> <a href="#" data-title="Delete" data-toggle="modal" data-target="#edit">Delete</a></span>
                  </div>
                </td>
                <td class="pt-5">
                  <div class="read-more mt-2 font-size-xs">
                    <a href="#" class="btn btn-primary btn-sm" title="View all comments"><i class="fa fa-arrow-right"></i></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table> <!-- /.table table-bordered table hover -->
        </div>
      </div>
    </div><!--/.row-->
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
