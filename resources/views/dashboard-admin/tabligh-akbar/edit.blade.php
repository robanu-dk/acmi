@extends('dashboard-admin.layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table>
            <tr>
                <td>
                    <a href="/dashboard/tabligh-akbar">
                        <span class="back-create" data-feather="arrow-left"></span>
                    </a>
                </td>
                <td style="padding-left: 150px">
                    <h4>Update Tabligh Akbar</h4>
                </td>
            </tr>
        </table>

    </div>
    <div class='col-lg-6'>
        <form method="post" action='/dashboard/tabligh-akbar/{{ $ta->id }}/edit' enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label"><h6>Judul</h6></label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $ta->judul }}" required>
            </div>
            <div class="mb-3">
                <label for="pemateri" class="form-label"><h6>Pemateri</h6></label>
                <input type="text" class="form-control" id="pemateri" name="pemateri" value="{{ $ta->pemateri }}" required>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label"><h6>Poster</h6></label>
                <input type="hidden" name="oldFoto" value="{{ $ta->foto }}">
                @if($ta->foto)
                    <img src="{{ asset('storage/'.$ta->foto) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control" type="file" id="foto" name="foto" onchange="previewImage()">
            </div>
            <div class="mb-3">
                <h6>Open Registration</h6>
                <input class="date form-control" type="date" name="open" value="{{ $ta->open }}" required>
            </div>
            <div class="mb-3">
                <h6>Close Registration</h6>
                <input class="date form-control" type="date" name="close"  value="{{ $ta->close }}" required>
            </div>
            <div class="mb-3">
                <h6>Event Held</h6>
                <input class="date form-control" type="date" name="pelaksanaan"  value="{{ $ta->pelaksanaan }}" required>
            </div>
            <div class="mb-3">
                <h6>Time</h6>
                <input class="form-control" type="time" name="waktu" value="{{ $ta->waktu }}" required>
            </div>
            <div class="mb-3">
                <h6>Group Link</h6>
                <input class="form-control" type="string" name="link_grup" value="{{ $ta->link_grup }}" required>
            </div>
            <div class="mb-3">
                <h6>Description</h6>
                <textarea class="form-control" type="text" name="deskripsi" value="{{ $ta->deskripsi }}">{{ $ta->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>

        </form>
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
