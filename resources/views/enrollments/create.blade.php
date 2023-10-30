@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">Enrollment Page</div>
    <div class="card-body">
        <form method="POST" action="{{ url('enrollments') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label>Enroll No</label>
                    <input type="text" class="form-control" name="enroll_no" id="enroll_no">
                </div>
                <div class="col-md-6">
                    <label>Batch</label>
                    <select class="form-control" name="batch_id" id="batch_id">
                        @foreach($batches as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-md-12">
                    <label>Student</label>
                    <select class="form-control" name="student_id" id="student_id">
                        @foreach($students as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Join Date</label>
                    <input type="date" class="form-control" name="join_date" id="join_date">
                </div>
                <div class="col-md-12">
                    <label>Fee</label>
                    <input type="text" class="form-control" name="fee" id="fee">
                </div>
            </div>
            <button type="submit" class="block mt-3">Save</button>
        </form>
    </div>
</div>

@endsection

<style>
.block {
    display: block;
    width: 100%;
    border: none;
    background-color: #04AA6D;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}
</style>