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
                <td style="padding-left: 350px">
                    <h4>Details Tabligh Akbar</h4>
                </td>
            </tr>
        </table>

    </div>
    <article class="m-2">
        <h6>{{ 'Judul    :' . $ta->judul }}</h6>
        <h6>{{ 'Open registration    :' . $ta->open }}</h6>
        <h6>{{ 'Close registration   :' . $ta->close }}</h6>
        <h6>{{ 'Pemateri :' . $ta->pemateri }}</h6>
        <img src="{{ asset('storage/'. $ta->foto) }}" width="200" height="200">
    </article>
@endsection
