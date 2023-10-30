@extends('layout')

@section('content')


<div class="card">
    <div class="card-header">
        <h2>Edit Page</h2>
    </div>

    <div class="card-body">
        <form action="{{ url('payments/' . $payments->id) }}" method="post">
            @csrf
            @method('PATCH')

            <input type="hidden" name="id" id="id" value="{{ $payments->id }}">

            <label>Enrollment No</label>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                @foreach($payments as $id => $enroll_no)
                <option value="{{ $id }}">{{ $enroll_no }}</option>
                @endforeach
            </select>

            <label>Paid Date</label>
            <input type="date" class="form-control" name="paid_date" value="{{ $payments->paid_date }}"><br>

            <label>Amount</label>
            <input type="text" class="form-control" name="amount" value="{{ $payments->amount }}"><br>
            <input type="submit" class="btn btn-success" value="update"><br>
        </form>
    </div>
</div>


@endsection