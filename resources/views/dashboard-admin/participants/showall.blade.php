@extends('dashboard-admin.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 mt-2 border-bottom">
        <table>
            <tr>
                <td>
                    <a href="/dashboard/participants">
                        <span class="back-create" data-feather="arrow-left"></span>
                    </a>
                </td>
                <td style="padding-left: 150px">
                    <h4 class="h3">Participants {{ $competition->name }}</h4>
                </td>
            </tr>
        </table>
    </div>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Universitas</th>
                <th scope="col">KTM</th>
                <th scope="col">Bukti Bayar</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($participants as $p)
            @if($p->subCompetition->Competition->id == $competition->id)
                <tr>
                    <td>{{ $p->User->name }}</td>
                    <td>{{ $p->univ }}</td>
                    <td><a href="{{ $p->ktm }}">open</a></td>
                    <td><a href="{{ $p->bukti_bayar }}">open</a></td>
                    <td>
                        <a href="#">Verify</a>
                    </td>
                </tr>
            @endif
            @endforeach
        </tbody>
    </table>
@endsection
