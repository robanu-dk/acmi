@extends('dashboard-admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome! {{ auth()->user()->name }}</h1>
</div>
  {{-- <div class="container px-4">
    <a href="" style="text-decoration: none">
        <div class="card bg-info text-white">
            <div class="card-header">
                Participants
            </div>
            <div class="card-body">
              <h5 class="card-title">All participants</h5>
              <p class="card-text">There are {{ $participants->count() }} participants</p>
            </div>
        </div>
    </a>
    <div class="row gx-5 mt-3">
      <div class="col">
        <a href="" style="text-decoration: none">
            <div class="card bg-danger text-white">
                <div class="card-header">
                    Participants
                </div>
                <div class="card-body">
                  <h5 class="card-title">Unverified participants</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </a>
      </div>
      <div class="col">
        <a href="" style="text-decoration: none">
            <div class="card bg-success text-white">
                <div class="card-header">
                    Participant
                </div>
                <div class="card-body">
                  <h5 class="card-title">Verified participant</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </a>
      </div>
    </div>
  </div> --}}
@endsection
