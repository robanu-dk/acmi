@extends('dashboard-admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 mt-2 border-bottom">
    <table>
        <tr>
            <td>
                <a href="/dashboard/participants">
                    <span class="back-create" data-feather="arrow-left"></span>
                </a>
            </td>
            <td style="padding-left: 150px">
                <h4 class="h3">Participants Tabligh Akbar</h4>
            </td>
        </tr>
    </table>
</div>
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">Nama</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($participantTas as $p)
        @if($p->tablighAkbar->id == $tablighAkbar->id)
            <tr>
                <td>{{ $p->User->name }}</td>
            </tr>
        @endif
        @endforeach
    </tbody>
</table>
@endsection
