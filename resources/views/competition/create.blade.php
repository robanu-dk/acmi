@extends('layout\main')

@section('isihome')
    <div class="container" style="width:80% ; margin: auto;">
        <div style="padding-top: 100px ; width:100%; margin:auto">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <table>
                    <tr>
                        <td>
                            <a href="/competition">
                                <span class="back-create" data-feather="arrow-left"></span>
                            </a>
                        </td>
                        <td style="padding-left: 150px">
                            <h4>{{ $subCompetition->competition->name }} Registration</h4>
                        </td>
                    </tr>
                </table>
            </div>
            <div class='col-lg-6 mb-5'>
                <form method="post" action='/competition/registration' enctype="multipart/form-data">
                    @csrf
                    @if($competition->tim)
                    <div class="mb-3">
                        <h6>Nama Ketua</h6>
                        <input type="text" class="form-control" id="nama_ketua" name="nama_ketua" value="{{ old('name',$user->name) }}" required>
                    </div>
                    <div class="mb-3">
                        <h6>Asal Universitas Ketua</h6>
                        <input type="text" class="form-control" id="univ_ketua" name="univ_ketua" required>
                    </div>
                    <div class="mb-3">
                        <h6>NIM Ketua</h6>
                        <input type="text" class="form-control" id="nim_ketua" name="nim_ketua" required>
                    </div>
                    <div class="mb-3">
                        <h6>No WhatsApp Ketua</h6>
                        <input type="text" class="form-control" id="wa" name="wa" required>
                    </div>
                    <div class="mb-3">
                        <h6>Alamat Ketua</h6>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="mb-3">
                        <h6>Nama Anggota 1<span class="text-muted small">(boleh dikosongi)</span></h6>
                        <input type="text" class="form-control" id="nama_anggota1" name="nama_anggota1">
                    </div>
                    <div class="mb-3">
                        <h6>Asal Universitas Anggota 1<span class="text-muted small">(boleh dikosongi)</span></h6>
                        <input type="text" class="form-control" id="univ_anggota1" name="univ_anggota1">
                    </div>
                    <div class="mb-3">
                        <h6>NIM Anggota 1<span class="text-muted small">(boleh dikosongi)</span></h6>
                        <input type="text" class="form-control" id="nim_anggota1" name="nim_anggota1">
                    </div>
                    <div class="mb-3">
                        <h6>Nama Anggota 2<span class="text-muted small">(boleh dikosongi)</span></h6>
                        <input type="text" class="form-control" id="nama_anggota2" name="nama_anggota2">
                    </div>
                    <div class="mb-3">
                        <h6>Asal Universitas Anggota 2<span class="text-muted small">(boleh dikosongi)</span></h6>
                        <input type="text" class="form-control" id="univ_anggota2" name="univ_anggota2">
                    </div>
                    <div class="mb-3">
                        <h6>NIM Anggota 2<span class="text-muted small">(boleh dikosongi)</span></h6>
                        <input type="text" class="form-control" id="nim_anggota2" name="nim_anggota2">
                    </div>
                    @else
                    <div class="mb-3">
                        <h6>Nama</h6>
                        <input type="text" class="form-control" id="nama_ketua" name="nama_ketua" value="{{ old('name',$user->name) }}" required>
                    </div>
                    <div class="mb-3">
                        <h6>Asal Universitas</h6>
                        <input type="text" class="form-control" id="univ_ketua" name="univ_ketua" required>
                    </div>
                    <div class="mb-3">
                        <h6>NIM</h6>
                        <input type="text" class="form-control" id="nim_ketua" name="nim_ketua" required>
                    </div>
                    <div class="mb-3">
                        <h6>No WhatsApp</h6>
                        <input type="text" class="form-control" id="wa" name="wa" required>
                    </div>
                    <div class="mb-3">
                        <h6>Alamat</h6>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    @endif
                    <div class="mb-3">
                        <h6>Bukti Pembayaran</h6>
                        <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" required>
                        <div class="text-muted small">Note: biaya pendaftaran sebesar Rp{{ ($subCompetition->gelombang=="1")?'30.000':'45.000' }}</div>
                    </div>
                    <div class="mb-3">
                        <h6>FIle Scan KTM atau Surat Keterangan Aktif Mahasiswa</h6>
                        <input type="file" class="form-control" id="ktm" name="ktm" required>
                    </div>
                    <div class="mb-3">
                        <h6>Bukti Follow Akun Instagram @acmi.ukmkiunair <a class="badge bg-secondary" href="https://www.instagram.com/acmi.ukmkiunair/" target="_blank">klik disini!</a></h6>
                        <input type="file" class="form-control" id="follow_acmi" name="follow_acmi" required>
                    </div>
                    <div class="mb-3">
                        <h6>Bukti Follow Akun Instagram @ukmkiunair <a class="badge bg-secondary" href="https://www.instagram.com/ukmkiunair/" target="_blank">klik disini!</a></h6>
                        <input type="file" class="form-control" id="follow_ukmki" name="follow_ukmki" required>
                    </div>
                    <div class="mb-3">
                        <h6>Bukti Follow Akun Instagram @kastratukmki <a class="badge bg-secondary" href="https://www.instagram.com/kastratukmki/" target="_blank">klik disini!</a></h6>
                        <input type="file" class="form-control" id="follow_kastrat" name="follow_kastrat" required>
                    </div>
                    <div class="mb-3">
                        <h6>Bukti Upload Twibbon di Akun Instagram Pribadi</h6>
                        <input type="file" class="form-control" id="twibbon" name="twibbon" required>
                    </div>
                    <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" id="sub_competition_id" name="sub_competition_id" value="{{ $subCompetition->id }}">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#submitData">Regist Now</button>

                    <!-- Modal -->
                    <div class="modal fade" id="submitData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="submitDataLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: rgb(166, 10, 239)">
                            <h5 class="modal-title" id="submitDataLabel">Alert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Is the information entered correct?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
