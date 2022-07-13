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
                <td style="padding-left: 150px">
                    <h4>Update QnA</h4>
                </td>
            </tr>
        </table>

    </div>
    <div class='col-lg-6'>
        <form method="post" action='/dashboard/qna/{{ $qna->id }}'>
            @method('put')
            @csrf
            <div class="mb-3">
                <h6>Question :</h6>
                <p style="text-align: justify">{{ $qna->question }}</p>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label"><h6>Answer</h6></label>
                <textarea id="answer" class="form-control" name="answer" rows="5">{{ $qna->answer }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
@endsection
