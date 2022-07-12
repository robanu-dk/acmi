@extends('dashboard-admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome! {{ auth()->user()->name }}</h1>
</div>
{{-- <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5>Lomba Esai <span class="badge badge-success">On progress</span></h5>
        <p class="card-text">50 Participants</p>
        <a href="/dashboard-admin/competition/1" class="card-link">Details</a>
        <a href="#" class="card-link">See all participants</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lomba Infografis <span class="badge badge-success">On progress</span></h5>
        <p class="card-text">20 Participants</p>
        <a href="/dashboard-admin/competition/2" class="card-link">Details</a>
        <a href="#" class="card-link">See all participants</a>
      </div>
    </div>
  </div>
</div> --}}

{{-- <div class="row" style="margin-top: 30px">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Lomba Video <span class="badge badge-success">On progress</span> </h5>
          <p class="card-text">13 Participants</p>
          <a href="/dashboard-admin/competition/3" class="card-link">Details</a>
          <a href="#" class="card-link">See all participants</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tabligh Akbar</h5>
          <p class="card-text">0 Participants</p>
          <a href="/dashboard-admin/tabligh-akbar/1" class="card-link">Details</a>
          <a href="#" class="card-link">See all participants</a>
        </div>
      </div>
    </div>
  </div> --}}
@endsection