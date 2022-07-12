@extends('dashboard-admin.layouts.main')

@section('container')

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
 
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profile</h1>
    </div>

    <div class='col-lg-6'>
        <form method="get" action='/dashboard/profile/{{ $user->id }}/edit'>
            @csrf
            <div class="mb-3">
                <h6>Email</h6>
                <p style="text-align: justify">{{ $user->email }}</p>
            </div>
            <div class="mb-3">
                <h6>Name</h6>
                <p style="text-align: justify">{{ $user->name }}</p>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection