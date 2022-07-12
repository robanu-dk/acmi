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
    <div class='col-lg-6'>
        <form method="post" action='/dashboard/tabligh-akbar' enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <h6>Judul Tabligh Akbar</h6>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="mb-3">
                <h6>Nama Pemateri</h6>
                <input type="text" class="form-control" id="pemateri" name="pemateri">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label"><h6>Foto Pemateri</h6></label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control" type="file" id="foto" name="foto" onchange="previewImage()">
              </div>
            <div class="mb-3">
                <h6>Open Registration</h6>
                <input class="date form-control" type="date" name="open">
            </div>
            <div class="mb-3">
                <h6>Close Registration</h6>
                <input class="date form-control" type="date" name="close">
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
