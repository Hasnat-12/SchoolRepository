@extends('layout')

@section('content')


<div class="card">
    <div class="card-header">
        <h2>Edit Page</h2>
    </div>

    <div class="card-body">
        <form action="{{ url('batches/' . $batches->id) }}" method="post">
            @csrf
            @method('PATCH')

            <input type="hidden" name="id" id="id" value="{{ $batches->id }}">

            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $batches->name }}"><br>

            <label>Course</label>
            <input type="text" class="form-control" name="course_id" value="{{ $batches->course->name }}"><br>

            <label>Date</label>
            <input type="text" class="form-control" name="start_date" value="{{ $batches->start_date }}"><br>
            <input type="submit" class="btn btn-success" value="update"><br>
        </form>
    </div>
</div>


@endsection