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
                        <h6>No WhatsApp</h6>
                        <input type="text" class="form-control" id="wa" name="wa" required>
                    </div>
                    <div class="mb-3">
                        <h6>Alamat</h6>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="mb-3">
                        <h6>Asal Universitas</h6>
                        <input type="text" class="form-control" id="univ" name="univ" required>
                    </div>
                    <div class="mb-3">
                        <h6>NIM</h6>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="mb-3">
                        <h6>Link Drive Persyaratan</h6>
                        <input type="text" class="form-control" id="syarat" name="syarat" required>
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
