@extends('layout\main')

@section('isihome')
<div class="container" style="width:80% ; margin: auto;">
  <div style="padding-top: 100px ; width:100%; margin:auto">
    <h1 class="border-bottom" style="text-align: center; font-family: 'Inter', sans-serif;font-weight: 600; font-size:40px; color: #313131 ; padding-bottom:10px;">Join the Event!</h1>

    <div class="row" style="width:100%; margin:auto">
      @foreach($tablighAkbars as $ta)
      @if($ta->terlihat == 1 && $ta->open <= date('Y-m-d') && $ta->close >= date('Y-m-d'))
      <div class="col-md-4 mb-5" >
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/'. $ta->foto) }}" class="card-img-top" alt="" height="200" width="300">
            <div class="card-body">
              <h5 class="card-title">{{ $ta->judul }}</h5>
              <p class="card-text">{{ $ta->pemateri }}</p>
              <p class="card-text">{{ $ta->close }}</p>
              @php
                  $regist = false;
                  if($participantTa != null)
                  {
                    foreach($participantTa as $pta)
                    {
                        if($pta->tabligh_akbar_id == $ta->id)
                        {
                            $regist = true;
                            break;
                        }
                    }
                  }
              @endphp
              <a href="/tabligh-akbar/registration/{{ $ta->id }}" class="btn btn-primary mb-3 {{ ($regist)?'disabled':'' }}" style="background: #6C1FB6 !important; color: white">Register now</a>
            </div>
        </div>
      </div>
      @else
      <div class="text-center mt-5">There is no event right now!!</div>
      @endif
      @endforeach

    </div>

  </div>
</div>
@endsection
