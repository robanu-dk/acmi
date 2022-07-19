<style>
    .title {
        font-weight: 500;
        font-size: 30px;
    }
</style>

@extends('dashboard-admin.layouts.main')

@section('container')

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Competition</h1>
    </div>

    <a href="/dashboard/competition/create" class="btn btn-primary mb-3">Create New Competition</a>

    <div class="table-responsive border-bottom">
        <table class="table table-striped table-sm text-center">
            <div class="title">Competition</div>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Year</th>
                    <th scope="col">Group Link</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($competitions as $competition)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $competition->name }}</td>
                        <td>{{ $competition->year }}</td>
                        <td>{{ $competition->group_link }}</td>
                        <td>{{ Str::limit($competition->description, 100, '...') }}</td>
                        <td>{{ ($competition->visibility)?'active':'hidden' }}</td>
                        <td>
                            <a href="/dashboard/competition/{{ $competition->id }}" class="badge bg-info">
                                <span data-feather='eye'></span>
                            </a>
                            <a href="/dashboard/competition/{{ $competition->id }}/edit" class="badge bg-warning">
                                <span data-feather='edit'></span>
                            </a>
                            <form action="/dashboard/competition/{{ $competition->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('put')
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure want to hide?')"><span data-feather='x-circle' ></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="/dashboard/sub_competition/create" class="btn btn-primary mb-3 mt-4">Create New Wave</a>

    <div class="table-responsive">
        <table class="table table-striped table-sm text-center">
            <div class="title">Wave</div>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gelombang</th>
                    <th scope="col">Open Registration</th>
                    <th scope="col">Close Registration</th>
                    <th scope="col">Open Submission</th>
                    <th scope="col">Close Submission</th>
                    <th scope="col">Status</th>
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
                        <td>{{ $subCompetition->open_submission }}</td>
                        <td>{{ $subCompetition->close_submission }}</td>
                        <td>{{ ($subCompetition->visibility)?'active':'hidden' }}</td>
                        <td>
                            <a href="/dashboard/sub_competition/{{ $subCompetition->id }}" class="badge bg-info">
                                <span data-feather='eye'></span>
                            </a>
                            <a href="/dashboard/sub_competition/{{ $subCompetition->id }}/edit" class="badge bg-warning">
                                <span data-feather='edit'></span>
                            </a>
                            <form action="/dashboard/sub_competition/{{ $subCompetition->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('put')
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure want to hide?')"><span data-feather='x-circle' ></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

