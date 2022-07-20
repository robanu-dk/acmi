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
                @if ($competition->tim)
                <th scope="col">Nama Ketua</th>
                <th scope="col">NIM Ketua</th>
                <th scope="col">Universitas Ketua</th>
                @else
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Universitas</th>
                @endif
                <th scope="col">Nomor WhatsAppp</th>
                <th scope="col">Tanggal Submit</th>
                <th scope="col">Submission</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($participants as $p)
            @if($p->subCompetition->Competition->id == $competition->id)
                <tr>
                    <td>{{ $p->nama_ketua }}</td>
                    <td>{{ $p->nim_ketua }}</td>
                    <td>{{ $p->univ_ketua }}</td>
                    <td>{{ $p->User->wa }}</td>
                    <td>{{ $p->created_at }}</td>
                    <td><a class="btn btn-primary" href="{{ $p->submission }}" target="_blank">View Submission</a></td>
                </tr>
            @endif
            @endforeach
        </tbody>
    </table>
@endsection
