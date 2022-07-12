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
                <td style="padding-left: 350px">
                    <h4>Details Competition</h4>
                </td>
            </tr>
        </table>

    </div>
    <article class="m-2">
        <h4 style="color: #6C1FB6">{{ $competition->name }}</h4>
        <br>
        <h6>Jumlah Peserta : 20</h6>
        <br>
        <h6>Description :</h6>
        <p style="text-align: justify">{{ $competition->description }}</p>
    </article>
@endsection