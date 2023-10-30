@extends('layout')

@section('content')

<div class="card mt-2">
    <div class="card-header">Payments</div>
    <div class="card-body">
        <form method="POST" action="{{ url('payments') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label>Enrollment No</label>
                    <select name="enrollment_id" id="enrollment_id" class="form-control">
                        @foreach($enrollments  as $id => $enroll_no)
                        <option value="{{ $id }}">{{ $enroll_no }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Paid Date</label>
                    <input type="date" class="form-control" name="paid_date" id="paid_date">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Amount</label>
                    <input type="text" class="form-control" name="amount" id="amount">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <input type="submit" class="btn btn-success" value="save">
                </div>

            </div>
        </form>
    </div>
</div>

@endsection