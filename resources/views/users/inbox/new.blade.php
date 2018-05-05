@extends('layouts.partials._dashboard')
@section('dashboard-title')
New message
@endsection
@section('dashboard-header')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/inbox" title="Inbox">Inbox</a></li>
<li class="breadcrumb-item active">New message</li>
@endsection
@section('dashboard-content')
<div class="row">
  <div class="col">
    <main>
      <section id="inbox-new-msg">
        <div class="card">
          <div class="card-header"><i class="fa fa-plus mr-2"></i>New message</div>
          <div class="card-block">
            <form class="" action="/inbox/new" method="post">
              <div class="form-group">
                <input type="text" name="title" value="" class="form-control" placeholder="To">
              </div>
              <div class="form-group">
                <label for="body">Message</label>
                <textarea name="body" rows="4" cols="80" placeholder="Message" class="form-control"></textarea>
              </div>
              <input type="submit" name="submit" value="Send" class="btn btn-primary btn-sm">
              <input type="submit" name="submit" value="Draft" class="btn btn-outline-info btn-sm">
              <input type="submit" name="submit" value="Trash" class="btn btn-outline-info btn-sm">
            </form>
          </div>
        </div>
      </section>
    </main>
  </div> <!-- /.col -->
</div> <!-- /.row  -->
@endsection
