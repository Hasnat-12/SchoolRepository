@extends('layout')

@section('content')


<div class="card">
    <div class="card-header">
        <h2>Edit Page</h2>
    </div>

    <div class="card-body">
        <form action="{{ url('enrollments/' . $enrollments->id) }}" method="post">
            @csrf
            @method('PATCH')

            <label>Enroll No</label>
            <input type="text" class="form-control" name="enroll_no" id="enroll_no" value="{{ $enrollments->enroll_no }}">

            <label>Batch</label>
            <input type="text" class="form-control" name="batch_id" id="batch_id" value="{{ $enrollments->batch_id }}">

            <label>Student</label>
            <input type="text" class="form-control" name="student_id" id="student_id" value="{{ $enrollments->student_id }}">

            <label>Join Date</label>
            <input type="date" class="form-control" name="join_date" id="join_date" value="{{ $enrollments->join_date }}">

            <label>Fee</label>
            <input type="text" class="form-control" name="fee" id="fee" value="{{ $enrollments->fee }}"><br>

            <input type="submit" class="btn btn-success" value="update">
        </form>
    </div>
</div>


@endsection