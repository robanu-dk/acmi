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
                    <h4>Details Gelombang</h4>
                </td>
            </tr>
        </table>

    </div>
    <article class="m-2">
        <h4 style="color: #6C1FB6">{{ $subCompetition->competition->name.' Gelombang ' . $subCompetition->gelombang }}</h4>
        <br>
        <h6>Jumlah Peserta : 20</h6>
        <br>
        <h6>{{ 'Open registration  :' . $subCompetition->open_registration }}</h6>
        <h6>{{ 'Close registration :' . $subCompetition->close_registration }}</h6>
        <h6>{{ 'Open submission    :' . $subCompetition->open_submission }}</h6>
        <h6>{{ 'Close submission   :' . $subCompetition->close_submission }}</h6>
        <br>
        <h6>Description :</h6>
        <p style="text-align: justify">{{ $subCompetition->competition->description }}</p>
    </article>
@endsection