@extends('dashboard-admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Question and Answer</h1>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($qnas as $qna)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Str::limit($qna->question, 60) }}</td>
                    <td>{{ Str::limit($qna->answer, 60) }}</td>
                    <td>
                        <a href="/dashboard/qna/{{ $qna->id }}" class="badge bg-info">
                            <span data-feather='eye'></span>
                        </a>
                        <a href="/dashboard/qna/{{ $qna->id }}/edit" class="badge bg-warning" style="text-decoration: none">
                            <span data-feather='edit'></span>
                            Edit answer
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection