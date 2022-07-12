@extends('dashboard-admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table>
            <tr>
                <td>
                    <a href="/dashboard/qna">
                        <span class="back-create" data-feather="arrow-left"></span>
                    </a>
                </td>
                <td style="padding-left: 350px">
                    <h4>Details QnA</h4>
                </td>
            </tr>
        </table>

    </div>
    <article class="m-2">
        <h6>Question :</h6>
        <p style="text-align: justify">{{ $qna->question }}</p>
        <br>
        <h6>Answer :</h6>
        <p style="text-align: justify">{{ $qna->answer }}</p>
    </article>
@endsection