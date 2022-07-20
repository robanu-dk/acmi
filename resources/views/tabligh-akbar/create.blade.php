@extends('layout\main')

@section('isihome')
    <div class="container" style="width:80% ; margin: auto;">
        <div style="padding-top: 100px ; width:100%; margin:auto">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <table>
                    <tr>
                        <td>
                            <a href="/tabligh-akbar">
                                <span class="back-create" data-feather="arrow-left"></span>
                            </a>
                        </td>
                        <td style="padding-left: 150px">
                            <h4>Tabligh Akbar Registration</h4>
                        </td>
                    </tr>
                </table>
            </div>
            <div class='col-lg-6 mb-3'>
                <form method="post" action='/tabligh-akbar/registration' enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <h6 class="@error('email') is-invalid @enderror">Email</h6>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ str_replace('email','Email',$message) }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <h6>Nama</h6>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $user->name }}" required>
                    </div>
                    <div class="mb-3">
                        <h6>Asal Instansi</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="instansi" id="instansi1" value="Universitas Airlangga" @if(old('instansi')=='Universitas Airlangga') checked @endif required>
                            <label class="form-check-label" for="instansi1">Universitas Airlangga</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="instansi" id="instansi2" value="lain" @if(old('instansi')=='lain') checked @endif required>
                            <label class="form-check-label @error('instansi_lain') is-invalid @enderror" for="instansi2">
                              Lainnya:
                            </label>
                            <input type="text" class="form-control" id="instansi_lain" name="instansi_lain">
                            @error('instansi_lain')
                                <div class="invalid-feedback">
                                    {{ str_replace('instansi lain','Asal Instansi',$message) }}
                                </div>
                            @enderror
                        </div>

                    </div>
                    <div class="mb-3">
                        <label class="h6 @error('prodi') is-invalid @enderror">Prodi <sup><i class="bi bi-star-fill text-danger" style="font-size: 60%"></i></sup></label>
                        <input type="text" class="form-control" id="prodi" name="prodi" value="{{ old('prodi') }}">
                        @error('prodi')
                            <div class="invalid-feedback">
                                {{ str_replace('prodi','Prodi',$message) }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <h6 class="@error('fakultas') is-invalid @enderror">Fakultas <sup><i class="bi bi-star-fill text-danger" style="font-size: 60%"></i></sup></h6>
                        <input type="text" class="form-control" id="fakultas" name="fakultas" value="{{ old('fakultas') }}">
                        @error('fakultas')
                            <div class="invalid-feedback">
                                {{ str_replace('fakultas','Fakultas',$message) }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <h6 class="@error('nim') is-invalid @enderror">NIM <sup><i class="bi bi-star-fill text-danger" style="font-size: 60%"></i></sup></h6>
                        <input type="text" class="form-control" id="nim" name="nim" value="{{ old('nim') }}">
                        @error('nim')
                            <div class="invalid-feedback">
                                {{ str_replace('nim','NIM',$message) }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <h6 class="@error('angkatan') is-invalid @enderror">Angkatan <sup><i class="bi bi-star-fill text-danger" style="font-size: 60%"></i></sup></h6>
                        <input type="text" class="form-control" id="angkatan" name="angkatan" value="{{ old('angkatan') }}">
                        @error('angkatan')
                            <div class="invalid-feedback">
                                {{ str_replace('angkatan','Angkatan',$message) }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <h6>Pertanyaan Untuk Pemateri</h6>
                        <textarea id="pertanyaan" class="form-control" name="pertanyaan" rows="5"></textarea>
                    </div>
                    <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" id="tabligh_akbar_id" name="tabligh_akbar_id" value="{{ $ta->id }}">
                    <div class="text-muted small mt-3 mb-3">
                        <b>Note: Textbox bertanda <sup><i class="bi bi-star-fill text-danger" style="font-size: 60%"></i></sup>, wajib diisi oleh pendaftar dari Universitas Airlangga. Selain dari Universitas Airlangga, silahkan dikosongi.</b>
                    </div>
                    <button type="submit" class="btn btn-primary">Regist Now</button>
                </form>
            </div>
        </div>
    </div>

@endsection
