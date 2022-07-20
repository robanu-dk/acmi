@extends('dashboard-admin.layouts.main')

@section('container')

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tabligh Akbar</h1>
    </div>
    <h5>Detail</h5>
    <div class="table-responsive">
        <a href="/dashboard/tabligh-akbar/create/" class="btn btn-primary mb-3">Add Tabligh Akbar</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Pemateri</th>
                    <th scope="col">Open Registration</th>
                    <th scope="col">Close Registration</th>
                    <th scope="col">Event Held</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ta as $ta)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ta->judul }}</td>
                        <td>{{ $ta->pemateri }}</td>
                        <td>{{ $ta->open }}</td>
                        <td>{{ $ta->close }}</td>
                        <td>{{ $ta->pelaksanaan }}</td>
                        <td>{{ $ta->waktu }}</td>
                        <td>{{ ($ta->terlihat == 1)? 'active' : 'hidden' }}</td>
                        <td>
                            <a href="/dashboard/tabligh-akbar/{{ $ta->id }}" class="badge bg-info">
                                <span data-feather='eye'></span>
                            </a>
                            <a href="/dashboard/tabligh-akbar/{{ $ta->id }}/edit" class="badge bg-warning">
                                <span data-feather='edit'></span>
                            </a>
                            <form action="/dashboard/tabligh-akbar/{{ $ta->id }}" method="POST" class="d-inline">
                                @method('put')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure want to hide?')"><span data-feather='x-circle' ></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
