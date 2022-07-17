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
                    <h4>Create New Wave</h4>
                </td>
            </tr>
        </table>

    </div>
    <div class='col-lg-6 mb-4'>
        <form method="post" action='/dashboard/sub_competition'>
            @csrf
            <div class="mb-3">
                <h6>Jenis Lomba</h6>
                @foreach ($competitions as $competition)
                    @if($competition->visibility)
                        <div class="form-check">
                            <label class="radio-inline" for="flexRadioDefault1">
                                <input class="form-check-input" type="radio" name="competition_id" value={{ $competition->id }}>
                                {{ $competition->name }}
                            </label>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="mb-3">
                <h6>Gelombang</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gelombang" value="1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gelombang" value="2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gelombang" value="3">
                    <label class="form-check-label" for="flexRadioDefault2">
                        3
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <h6>Open Registration</h6>
                <input class="date form-control" type="date" name="open_registration" required>
            </div>
            <div class="mb-3">
                <h6>Close Registration</h6>
                <input class="date form-control" type="date" name="close_registration" required>
            </div>
            <div class="mb-3">
                <h6>Open Submission</h6>
                <input class="date form-control" type="date" name="open_submission" required>
            </div>
            <div class="mb-3">
                <h6>Close Submission</h6>
                <input class="date form-control" type="date" name="close_submission" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Create Wave</button>

        </form>
    </div>
@endsection
