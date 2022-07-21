@extends('layout\main')

@section('isihome')
    <div class="container" style="width:80% ; margin: auto;">
        <div style="padding-top: 100px ; width:100%; margin:auto">
            <h1 class="border-bottom"
                style="text-align: center; font-family: 'Inter', sans-serif;font-weight: 600; font-size:40px; color: #313131 ; padding-bottom:10px;">
                Join the Event!
            </h1>

            <div class="row" style="width:100%; margin:auto">
                @if ($competitions->count())
                    @foreach ($competitions as $competition)
                    @php
                        $registered = false;
                        $subCom = null;
                        foreach ($subCompetitions as $subCompetition) {
                            if($subCompetition->competition_id == $competition->id && $participants!=null) {
                                $subCom_id = $subCompetition->id;
                                foreach ($participants as $participant) {
                                    if($participant->sub_competition_id == $subCom_id) {
                                        $registered = true;
                                        break;
                                    }
                                }
                            }
                        }
                    @endphp

                    <div class="col-md-4">
                        <div class="card" style="width: 100%; margin-top: 50px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $competition->name }}</h5>
                                <p class="card-text">{{ Str::limit($competition->description, 60, '...') }}</p>
                                <a href="/competition/registration/{{ $competition->id }}" class="btn btn-primary mb-3 {{ ($registered)?'disabled':'' }}" style="background: #6C1FB6 !important; color: white">Register now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <div class="text-center mt-5">There is no event right now!!</div>
                @endif
            </div>
        </div>
    </div>
@endsection
