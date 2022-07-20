@extends('dashboard-admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 mt-2 border-bottom">
    <table>
        <tr>
            <td>
                <a href="/dashboard/participants">
                    <span class="back-create" data-feather="arrow-left"></span>
                </a>
            </td>
            <td style="padding-left: 150px">
                <h4 class="h3">Participants {{ $subCompetition->Competition->name }} Gelombang {{ $subCompetition->gelombang }}</h4>
            </td>
        </tr>
    </table>
</div>
<table class="table table-striped table-sm">
    <thead>
        <tr>
            @if($competition->tim)
            <th scope="col">Nama Ketua</th>
            <th scope="col">Universitas Ketua</th>
            <th scope="col">NIM Ketua</th>
            @else
            <th scope="col">Nama</th>
            <th scope="col">Universitas</th>
            <th scope="col">NIM</th>
            @endif
            <th scope="col">Bukti Bayar</th>
            <th class="text-center" scope="col">KTM</th>
            <th scope="col" class="text-center" colspan="3">Bukti Follow Akun Instagram</th>
            <th scope="col">Bukti Upload Twibbon</th>
            <th scope="col">Action</th>
            @if($competition->tim)
            <th scope="col">Lihat Anggota</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($participants as $p)
        @if($p->subCompetition->id == $subCompetition->id)
            <tr>
                <td>{{ $p->nama_ketua }}</td>
                <td>{{ $p->univ_ketua }}</td>
                <td>{{ $p->nim_ketua }}</td>

                <td>
                    @if(preg_match('/pdf/',$p->bukti_pembayaran))
                    <a class="btn btn-primary" href="{{ asset($p->bukti_pembayaran) }}" target="_blank">Bukti bayar</a>
                    @else
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{ '#bukti1'.$loop->iteration }}">Bukti bayar</button>

                    <!-- Modal -->
                    <div class="modal fade" id="{{ 'bukti1'.$loop->iteration }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="{{ 'bukti1'.$loop->iteration.'Label' }}" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="{{ 'bukti1'.$loop->iteration }}Label">Bukti Persyaratan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset($p->bukti_pembayaran) }}" alt="bukti_bayar" style="width: 100%">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endif
                </td>
                <td>
                    @if(preg_match('/pdf/',$p->ktm))
                    <a class="btn btn-primary" href="{{ asset($p->ktm) }}" target="_blank">KTM</a>
                    @else
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{ '#bukti6'.$loop->iteration }}">KTM</button>

                    <!-- Modal -->
                    <div class="modal fade" id="{{ 'bukti6'.$loop->iteration }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="{{ 'bukti6'.$loop->iteration.'Label' }}" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="{{ 'bukti6'.$loop->iteration }}Label">Bukti Persyaratan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset($p->ktm) }}" alt="bukti_bayar" style="width: 100%">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endif
                </td>
                <td>
                    @if(preg_match('/pdf/',$p->follow_acmi))
                    <a class="btn btn-primary" href="{{ asset($p->follow_acmi) }}" target="_blank">@acmi.ukmkiunair</a>
                    @else
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{ '#bukti2'.$loop->iteration }}">@acmi.ukmkiunair</button>

                    <!-- Modal -->
                    <div class="modal fade" id="{{ 'bukti2'.$loop->iteration }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="{{ 'bukti2'.$loop->iteration.'Label' }}" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="{{ 'bukti2'.$loop->iteration }}Label">Bukti Persyaratan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset($p->follow_acmi) }}" alt="follow_acmi" style="width: 100%">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endif
                </td>
                <td>
                    @if(preg_match('/pdf/',$p->follow_ukmki))
                    <a class="btn btn-primary" href="{{ asset($p->follow_ukmki) }}" target="_blank">@ukmkiunair</a>
                    @else
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{ '#bukti3'.$loop->iteration }}">@ukmkiunair</button>

                    <!-- Modal -->
                    <div class="modal fade" id="{{ 'bukti3'.$loop->iteration }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="{{ 'bukti3'.$loop->iteration.'Label' }}" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="{{ 'bukti3'.$loop->iteration }}Label">Bukti Persyaratan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset($p->follow_ukmki) }}" alt="follow_ukmki" style="width: 100%">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endif
                </td>
                <td>
                    @if(preg_match('/pdf/',$p->follow_kastrat))
                    <a class="btn btn-primary" href="{{ asset($p->follow_kastrat) }}" target="_blank">@kastratukmki</a>
                    @else
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{ '#bukti4'.$loop->iteration }}">@kastratukmki</button>

                    <!-- Modal -->
                    <div class="modal fade" id="{{ 'bukti4'.$loop->iteration }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="{{ 'bukti4'.$loop->iteration.'Label' }}" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="{{ 'bukti4'.$loop->iteration }}Label">Bukti Persyaratan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset($p->follow_kastrat) }}" alt="follow_kastrat" style="width: 100%">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endif
                </td>
                <td class="text-center">
                    @if(preg_match('/pdf/',$p->twibbon))
                    <a class="btn btn-primary" href="{{ asset($p->twibbon) }}" target="_blank">Twibbon</a>
                    @else
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{ '#bukti5'.$loop->iteration }}">Twibbon</button>

                    <!-- Modal -->
                    <div class="modal fade" id="{{ 'bukti5'.$loop->iteration }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="{{ 'bukti5'.$loop->iteration.'Label' }}" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="{{ 'bukti5'.$loop->iteration }}Label">Bukti Persyaratan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset($p->twibbon) }}" alt="twibbon" style="width: 100%">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endif
                </td>

                <td>
                    @if ($p->verified)
                        <b>Verified</b>
                    @else
                        <form action="/dashboard/participants/gelombang/{{ $subCompetition->id }}/verif/{{ $p->id }}" method="POST">
                            @csrf
                            @method('put')

                            <!-- Button trigger modal -->
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="{{ '#verif'.$p->id }}">Verify</button>

                            <!-- Modal -->
                            <div class="modal fade" id="{{ 'verif'.$p->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="{{ 'verif'.$p->id.'Label' }}" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="{{ 'verif'.$p->id }}Label">Alert!!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Have you checked the evidence and are sure to verify?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Verify</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                    @endif
                </td>
                @if($competition->tim)
                @php
                    $id = $loop->iteration;
                @endphp
                <!-- Button trigger modal -->
                <th scope="col"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{ '#anggota'.$id }}">
                    Lihat Anggota
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="{{ 'anggota'.$id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="{{ 'anggota'.$id.'Label' }}" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="{{ 'anggota'.$id }}Label">Anggota dari {{ $p->nama_ketua }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Anggota</th>
                                        <th scope="col">Universitas Asal</th>
                                        <th scope="col">NIM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $p->nama_anggota1 }}</td>
                                        <td>{{ $p->univ_anggota1 }}</td>
                                        <td>{{ $p->nim_anggota1 }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $p->nama_anggota2 }}</td>
                                        <td>{{ $p->univ_anggota2 }}</td>
                                        <td>{{ $p->nim_anggota2 }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                  </div>

                </th>
                @endif
            </tr>
        @endif
        @endforeach
    </tbody>
</table>

@endsection
