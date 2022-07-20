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
                    <h4>Add New Tabligh Akbar</h4>
                </td>
            </tr>
        </table>
    </div>
    <div class='col-lg-6 mb-5'>
        <form method="post" action='/dashboard/tabligh-akbar' enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <h6>Judul Tabligh Akbar</h6>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                <h6>Nama Pemateri</h6>
                <input type="text" class="form-control" id="pemateri" name="pemateri" required>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label"><h6>Poster</h6></label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control" type="file" id="foto" name="foto" onchange="previewImage()">
              </div>
            <div class="mb-3">
                <h6>Open Registration</h6>
                <input class="date form-control" type="date" name="open" required>
            </div>
            <div class="mb-3">
                <h6>Close Registration</h6>
                <input class="date form-control" type="date" name="close" required>
            </div>
            <div class="mb-3">
                <h6>Event Held</h6>
                <input class="date form-control" type="date" name="pelaksanaan" required>
            </div>
            <div class="mb-3">
                <h6>Time</h6>
                <input class="form-control" type="time" name="waktu" required>
            </div>
            <div class="mb-3">
                <h6>Group Link</h6>
                <input class="form-control" type="string" name="link_grup" required>
            </div>
            <div class="mb-3">
                <h6>Description</h6>
                <textarea class="form-control" type="text" name="deskripsi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Tabligh Akbar</button>

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
