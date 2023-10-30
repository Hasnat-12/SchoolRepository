@extends('layout')

@section('content')


<div class="card">
    <div class="card-header">
        <h2>Edit Page</h2>
    </div>

    <div class="card-body">
        <form action="{{ url('courses/' . $courses->id) }}" method="post">
            @csrf
            @method('PATCH')

            <input type="hidden" name="id" id="id" value="{{ $courses->id }}">

            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $courses->name }}"><br>

            <label>Syllabus</label>
            <input type="text" class="form-control" name="address" value="{{ $courses->syllabus }}"><br>

            <label>Duration</label>
            <input type="text" class="form-control" name="mobile" value="{{ $courses->duration }}"><br>
            <input type="submit" class="btn btn-success" value="update"><br>
        </form>
    </div>
</div>


@endsection