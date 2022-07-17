@extends('layout\main')

@section('isihome')
    <div class="container" style="width:80% ; margin: auto;">
        <div style="padding-top: 100px ; width:100%; margin:auto">
            <h1 class="border-bottom"
                style="text-align: center; font-family: 'Inter', sans-serif;font-weight: 600; font-size:40px; color: #313131 ; padding-bottom:10px;">
                Join the Event!</h1>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>

            <div class="row" style="width:100%; margin:auto">
                @foreach ($competitions as $competition)
                    @if($competition->visibility)
                        <div class="col-md-4">
                            <div class="card" style="width: 100%; margin-top: 50px">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $competition->name }}</h5>
                                    <p class="card-text">{{ Str::limit($competition->description, 60, '...') }}</p>
                                    <a href="/competition/registration/{{ $competition->id }}" class="btn btn-primary mb-3" style="background: #6C1FB6 !important; color: white">Register now</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
