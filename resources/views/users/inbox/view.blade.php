@extends('layouts.partials._dashboard')
@section('dashboard-title')
Mary thread
@endsection
@section('dashboard-header')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/inbox" title="Inbox">Inbox</a></li>
<li class="breadcrumb-item active">View conversation</li>
@endsection
@section('dashboard-content')
<div class="row">
  <div class="col-md-8">
    <main>
      <section id="inbox-view-msg">
        <div class="card">
          <div class="card-header"><i class="fa fa-envelope-o mr-2"></i>My messages</div>
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
                        <div class="name"><h3><a href="#">Dennis</a></h3></div>
                        <div class="date"><span class="msg-date font-size-xs">8 days ago</span></div>
                      </div>
                    </div>
                    <div class="message">
                      <p>This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might. This is a test comment that should be ignored by all might...</p>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td width="2%" class="hidden-xs-down">
                  </td>
                  <td> <!-- message -->
                    <div class="form-group">
                      <textarea name="reply" rows="4" cols="100%" class="form-control"></textarea>
                      <input type="submit" name="submit" value="Send" class="btn btn-primary btn-sm mt-2">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table> <!-- /.table table hover -->
          </div>
        </div> <!-- /.card -->
      </section>
    </main>
  </div> <!-- /.col-md-7 -->
  <div class="col-md-4">
    <aside>
      <section id="inbox-view-msg-aside">
        <div class="inbox-v-image">
          <img src="http://amonpointtv.com/wp-content/uploads/2016/09/AMonpointTV-2792.jpg" alt="Lana" title="Lana" class="img-fluid">
        </div>
        <p><strong>Lana</strong></p>
        <p>Third Year</p>
        <p>Computer Science</p>
        <p>Followed since 19 May 2017</p>
      </section>
    </aside>
  </div> <!-- /.col-md-4 -->
</div> <!-- /.row  -->
@endsection
