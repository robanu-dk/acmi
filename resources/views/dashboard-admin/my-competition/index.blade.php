@extends('dashboard-admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Competition</h1>
    </div>
    <div class="row" style="width:100%; margin:auto">
        @foreach ($participants as $participant)
        <div class="col-md-4">
            <div class="card" style="width: 100%; margin-top: 20px">
                <div class="card-body">
                    <h5 class="card-title">{{ $participant->subCompetition->competition->name }}</h5>
                    <p class="card-text">Gelombang {{ $participant->subCompetition->gelombang }}</p>
                    <p>
                        {{-- Get WhatsApp Group Link --}}
                        @foreach ($subCompetitions as $key => $subcom)
                            @if ($subcom->id==$participant->sub_competition_id)
                                @php
                                    $subcom_req = $subcom
                                @endphp
                            @endif
                        @endforeach
                        @foreach ($competitions as $key => $com)
                            @if ($com->id==$subcom_req->competition_id)
                                @php
                                    $link = $com->group_link
                                @endphp
                            @endif
                        @endforeach

                        {{-- Show or Hide button submission --}}
                        @php
                            $open_submission = false;
                            foreach($subCompetitions as $subCom) {
                                if($subCom->id == $participant->sub_competition_id && date('Y-m-d') >= $subCom->open_submission && date('Y-m-d') <= $subCom->close_submission) {
                                    $open_submission = true;
                                    break;
                                }
                            }
                        @endphp

                        {{-- Show Button --}}
                        <a class="btn btn-success" href="{{ $link }}" target="_blank">
                          Join Whatsapp Group
                        </a>
                        @if(!$participant->submission && $open_submission && $participant->verified)
                        <button class="btn" style="background: #6C1FB6 !important; color: white" type="button" data-bs-toggle="collapse" data-bs-target="{{ '#submission'.$loop->iteration }}" aria-expanded="false" aria-controls="{{ 'submission'.$loop->iteration }}">
                            Submit Your Work
                        </button>
                        <div class="collapse" id="{{ 'submission'.$loop->iteration }}">
                            <div class="card card-body">
                                <form action="/dashboard/mycompetition/{{ $participant->id }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Submission" name="submission" required>
                                        <label for="floatingInput">Submission</label>
                                        <div class="text-muted small">note: Input the gdrive link and make sure it's publicly accessible</div>
                                    </div>
                                    <!-- Button trigger modal -->
                                <button type="button" class="btn" style="background: #6C1FB6 !important; color: white" data-bs-toggle="modal" data-bs-target="{{ '#alert'.$loop->iteration }}">Submit</button>

                                <!-- Modal -->
                                <div class="modal fade" id="{{ 'alert'.$loop->iteration }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="{{ 'alert'.$loop->iteration }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header text-white" style="background-color: #df1fdf;">
                                                <h5 class="modal-title" id="{{ 'alert'.$loop->iteration }}">Submission</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to submit? You can only submit once
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary" style="background: #6C1FB6 !important; color: white">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                  </p>
                    @if ($participant->submission)
                        <div>
                            Thank you for participating. The next announcement will be announced via the whatsapp group
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
