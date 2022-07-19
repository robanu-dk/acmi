@extends('dashboard-admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table>
            <tr>
                <td>
                    <a href="/dashboard/competition">
                        <span class="back-create" data-feather="arrow-left"></span>
                    </a>
                </td>
                <td style="padding-left: 150px">
                    <h4>Create New Competition</h4>
                </td>
            </tr>
        </table>

    </div>
    <div class='col-lg-6 mb-4'>
        <form method="post" action='/dashboard/competition'>
            @csrf
            <div class="mb-3">
                <h6>Jenis Peserta<span class="text-muted small">(wajib dipilih salah satu)</span></h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tim" value="1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Tim
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tim" value="0">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Individu
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <h6>Name</h6>
                <input class="form-control" type="string" value="{{ old('name') }}" name="name" required>
            </div>
            <div class="mb-3">
                <h6>Year</h6>
                <input class="form-control @error('year') is-invalid @enderror" type="string" value="{{ old('year') }}" name="year" required>
                @error('year')
                    <div class="invalid-feedback">
                        {{ str_replace('year',"Year",$message) }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <h6>Group Link</h6>
                <input class="form-control" type="string" value="{{ old('group_link') }}" name="group_link" required>
            </div>
            <div class="mb-3">
                <h6>Subtema 1<span class="text-muted small">(boleh dikosongi)</span></h6>
                <input class="form-control" type="text" value="{{ old('subtema1') }}" name="subtema1">
            </div>
            <div class="mb-3">
                <h6>Subtema 2<span class="text-muted small">(boleh dikosongi)</span></h6>
                <input class="form-control" type="text" value="{{ old('subtema2') }}" name="subtema2">
            </div>
            <div class="mb-3">
                <h6>Subtema 3<span class="text-muted small">(boleh dikosongi)</span></h6>
                <input class="form-control" type="text" value="{{ old('subtema3') }}" name="subtema3">
            </div>
            <div class="mb-3">
                <h6>Subtema 4<span class="text-muted small">(boleh dikosongi)</span></h6>
                <input class="form-control" type="text" value="{{ old('subtema4') }}" name="subtema4">
            </div>
            <div class="mb-3">
                <h6>Subtema 5<span class="text-muted small">(boleh dikosongi)</span></h6>
                <input class="form-control" type="text" value="{{ old('subtema5') }}" name="subtema5">
            </div>
            <div class="mb-3">
                <h6>Description</h6>
                <textarea class="form-control" name="description" id="description" required>{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Create Competition</button>

        </form>
    </div>
@endsection
