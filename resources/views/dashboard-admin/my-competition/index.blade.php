@extends('dashboard-admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Competition</h1>
    </div>
    <div class="row" style="width:100%; margin:auto">
        @foreach ($participants as $p)
        @if($p->user_id == $user->id)
            <div class="col-md-4">
                <div class="card" style="width: 100%; margin-top: 20px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->subCompetition->competition->name }}</h5>
                        <p class="card-text">Gelombang {{ $p->subCompetition->gelombang }}</p>
                        <a href="#" class="btn" style="background: #6C1FB6 !important; color: white">Submit your work</a>
                    </div>
                </div>
            </div>
        @endif
        @endforeach
    </div>
@endsection