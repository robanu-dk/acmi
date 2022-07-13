@extends('dashboard-admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 mt-2 border-bottom">
    <h1 class="h2">Participants</h1>
</div>
<table class="table table-striped table-sm" style="vertical-align: middle">
    <tbody>
        @foreach($competitions as $c)
            <tr>
                <td><h6>{{ $c->name }}</h6></td>
                <td>
                    @foreach($subCompetitions as $sc)
                    @if($sc->competition_id == $c->id)
                        <a href="/dashboard/participants/gelombang/{{ $sc->id }}" class="btn btn-primary mb-2 mt-2" style="font-size: 14px">Gelombang {{ $sc->gelombang }}</a>
                    @endif
                    @endforeach
                    <a href="/dashboard/participants/competition/{{ $c->id }}" class="btn btn-primary mb-2 mt-2" style="font-size: 14px">All</a>
                </td>
            </tr>
        @endforeach   
            <tr>
                <td><h6>Tabligh Akbar</h6></td>
                <td>
                    @foreach($tablighAkbars as $ta)
                    <a href="/dashboard/participants/tabligh-akbar/{{ $ta->id }}" class="btn btn-primary mb-2 mt-2" style="font-size: 14px">{{ Str::limit($ta->judul, 20) }}</a>
                    @endforeach
                </td>
            </tr>
    </tbody>
</table>
@endsection