@extends('dashboard-admin.layouts.main')

@section('container')

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
 
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Competition</h1>
    </div> 

    <div class="table-responsive border-bottom">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($competitions as $competition)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $competition->name }}</td>
                        <td>{{ Str::limit($competition->description, 100, '...') }}</td>
                        <td>
                            <a href="/dashboard/competition/{{ $competition->id }}" class="badge bg-info">
                                <span data-feather='eye'></span>
                            </a>
                            <a href="/dashboard/competition/{{ $competition->id }}/edit" class="badge bg-warning">
                                <span data-feather='edit'></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="table-responsive">
        <a href="/dashboard/sub_competition/create/" class="btn btn-primary mb-3">Add Gelombang</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gelombang</th>
                    <th scope="col">Open</th>
                    <th scope="col">Close</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subCompetitions as $subCompetition)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subCompetition->competition->name }}</td>
                        <td>{{ $subCompetition->gelombang }}</td>
                        <td>{{ $subCompetition->open_registration }}</td>
                        <td>{{ $subCompetition->close_registration }}</td>
                        <td>
                            <a href="/dashboard/sub_competition/{{ $subCompetition->id }}" class="badge bg-info">
                                <span data-feather='eye'></span>
                            </a>
                            <a href="/dashboard/sub_competition/{{ $subCompetition->id }}/edit" class="badge bg-warning">
                                <span data-feather='edit'></span>
                            </a>
                            <form action="/dashboard/sub_competition/{{ $subCompetition->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure want to delete?')"><span data-feather='x-circle' ></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

