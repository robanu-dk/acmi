<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/list-groups/">



    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/list-groups.css" rel="stylesheet">

@extends('layout\main')


@section('isihome')
<div style="padding-top: 100px; width:80%; margin: auto;" >
  @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 400px; margin:auto; margin-bottom: 30px">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
  <h1 class="border-bottom" style="text-align: center; font-family: 'Inter', sans-serif;font-weight: 600; font-size:25px; padding-bottom:10px;">QnA</h1>
  <div style="width:1000px ; margin:2rem auto;">
    <form action="/qna" method="post" role="form" class="php-email-form">
      @csrf
      <div class="form-group mt-3">
        <textarea class="form-control" name="question" rows="5" placeholder="question" required></textarea>
      </div>
      <div class="text-center"><button type="submit" class="btn" style="background: #6C1FB6 !important; color: white; margin-top:35px;">Send Question</button></div>
    </form>
  </div>
  <h1 class="border-bottom" style="text-align: center; font-family: 'Inter', sans-serif;font-weight: 600; font-size:25px; padding-bottom:10px;">FAQ</h1>
  <div style="width: 1000px; margin: 4rem auto">
    @foreach($qnas as $qna)
    <div class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
      <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
          <h6 class="mb-0">Question: {{ $qna->question }}</h6>
          <p class="mb-0 opacity-75">Answer:<br>{{ $qna->answer }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
