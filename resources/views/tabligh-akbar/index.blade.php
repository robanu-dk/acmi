@extends('layout\main')

@section('isihome')
<div class="container" style="width:80% ; margin: auto;">
  <div style="padding-top: 100px ; width:100%; margin:auto">
    <h1 class="border-bottom" style="text-align: center; font-family: 'Inter', sans-serif;font-weight: 600; font-size:40px; color: #313131 ; padding-bottom:10px;">Join the Event!</h1>

    <div class="row" style="width:100%; margin:auto">
      @foreach($tablighAkbars as $ta)
      @if($ta->terlihat == 1)
      <div class="col-md-4 mb-5" >
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/'. $ta->foto) }}" class="card-img-top" alt="" height="200" width="300">
            <div class="card-body">
              <h5 class="card-title">{{ $ta->judul }}</h5>
              <p class="card-text">{{ $ta->pemateri }}</p>
              <p class="card-text">{{ $ta->close }}</p>
              <a href="/tabligh-akbar/registration/{{ $ta->id }}" class="btn btn-primary mb-3" style="background: #6C1FB6 !important; color: white">Register now</a>
            </div>
        </div>
      </div>
      @endif
      @endforeach

    </div>

  </div>
</div>
@endsection
