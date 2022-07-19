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
            <div class='col-lg-6'>
                <form method="post" action='/competition/registration' enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <h6>Nama</h6>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                    </div>
                    <div class="mb-3">
                        <h6>Asal Universitas</h6>
                        <input type="text" class="form-control" id="univ" name="univ" required>
                    </div>
                    <div class="mb-3">
                        <label for="ktm" class="form-label"><h6>Kartu Tanda Mahasiswa</h6></label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input class="form-control" type="file" id="ktm" name="ktm" onchange="previewImage()" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_bayar" class="form-label"><h6>Bukti Pembayaran</h6></label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input class="form-control" type="file" id="bukti_bayar" name="bukti_bayar" onchange="previewImage()" required>
                    </div>
                    <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                    {{-- <input type="hidden" id="sub_competition_id" name="sub_competition_id" value="{{ $subCompetition->id }}"> --}}
                    <button type="submit" class="btn btn-primary">Regist Now</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function previewImage() {
            const foto = document.querySelector('#foto');
            const fotoPreview = document.querySelector('.img-preview');

            fotoPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(foto.files[0]);

            oFReader.onload = function(oFREvent) {
                fotoPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
