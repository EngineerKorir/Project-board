@extends('layouts.partials._dashboard')
@section('dashboard-title')
My wallet
@endsection
@section('dashboard-header')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/profile/view" title="My profile">Profile</a></li>
<li class="breadcrumb-item active">Wallet</li>
@endsection
@section('dashboard-content')
<div class="row">
  <div class="col">
    <main>
      <section id="profile-wallet">
        <div class="row">
          <div class="col-sm-4">
            <div class="wallet-box">
              <p>Main balance</p>
              <h4>KSh 345.00</h4>
              <button type="button" name="button" class="btn btn-success btn-sm">Add funds</button>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="wallet-box">
              <p>SMS notifications</p>
              <h4>KSh 1.50</h4>
              <p>Per SMS</p>
              <button type="button" name="button" class="btn btn-success btn-sm">Subscribe</button>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="wallet-box">
              <p>Private messaging</p>
              <h4>KSh 100</h4>
              <p>Monthly</p>
              <button type="button" name="button" class="btn btn-success btn-sm">Subscribe</button>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div> <!-- /.col -->
</div> <!-- /.row -->
@endsection
