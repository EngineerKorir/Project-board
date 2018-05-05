@extends('layouts.partials._dashboard')

@section('dashboard-title')
Messages
@endsection

@section('dashboard-header')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{!! route('getClassRepDashboard') !!}" title="Class rep home">Class rep home</a></li>
<li class="breadcrumb-item active">Messages</li>
@endsection

@section('dashboard-content')
<main>
  <section id="notices-messages" class="row">
    <div class="col">
      <div class="card">
        <div class="card-header"><i class="fa fa-envelope-o mr-2"></i>Messages</div>
        <div class="card-block p-0">
          <table class="table table-hover">
            <tbody>
              <tr>
                <td width="2%" class="hidden-xs-down"> <!-- checkbox -->
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" name="select[]" value="one" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                  </label>
                </td>
                <td> <!-- message -->
                  <div class="d-flex">
                    <div class="info mr-2">
                      <img src="http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg" alt="Lana" title="Lana" class="img-fluid">
                    </div>
                    <div class="author">
                      <div class="name"><h3><a href="#">Lana</a></h3><i class="fa fa-envelope-o ml-2"></i></div>
                      <div class="date"><span class="msg-date font-size-xs">3 days ago</span></div>
                    </div>
                  </div>
                  <div class="message">
                    <p>This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might...</p>
                  </div>
                </td>
                <td class="pt-5">
                  <div class="read-more mt-2 font-size-xs">
                    <a href="#" class="btn btn-primary btn-sm" title="View message"><i class="fa fa-arrow-right"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td width="2%" class="hidden-xs-down"> <!-- checkbox -->
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" name="select[]" value="one" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                  </label>
                </td>
                <td> <!-- message -->
                  <div class="d-flex">
                    <div class="info mr-2">
                      <img src="http://oka-cdn.okayplayer.com/wp-content/uploads/NYFW-Model-to-Watch-Mari-Agory.jpg" alt="Lana" title="Lana" class="img-fluid">
                    </div>
                    <div class="author">
                      <div class="name"><h3><a href="#">Mary</a></h3></div>
                      <div class="date"><span class="msg-date font-size-xs">8 days ago</span></div>
                    </div>
                  </div>
                  <div class="message">
                    <p>This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might...</p>
                  </div>
                </td>
                <td class="pt-5">
                  <div class="read-more mt-2 font-size-xs">
                    <a href="#" class="btn btn-primary btn-sm" title="View message"><i class="fa fa-arrow-right"></i></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table> <!-- /.table table-bordered table hover -->
        </div>
      </div> <!-- /.card -->


    <div class="hidden-xs-down pl-3 mt-5">
      <span class="font-size-sm">With selected items</span>
      <select class="custom-select form-control-sm ml-2" name="actions">
        <option value="0">Draft</option>
        <option value="1">Delete</option>
      </select>
      <input type="submit" name="submit" value="Apply" class="btn btn-primary btn-sm ml-2">
    </div>
    </div><!--/.col-->
  </section>
</main>
@endsection
