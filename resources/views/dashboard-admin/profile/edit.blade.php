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
        <form method="post" action='/dashboard/profile/{{ $user->id }}'>
            @method('put')
            @csrf
            <div class="mb-3">
                <h6>Email</h6>
                <p style="text-align: justify">{{ $user->email }}</p>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label"><h6>Name</h6></label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label"><h6>Address</h6></label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" required>
            </div>
            <div class="mb-3">
                <label for="wa" class="form-label"><h6>No WhatsApp</h6></label>
                <input type="text" class="form-control" id="wa" name="wa" value="{{ $user->wa }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>

        </form>
    </div>
@endsection