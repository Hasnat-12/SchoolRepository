@extends('layout')

@section('content')


<div class="card">
    <div class="card-header">
        <h2>Edit Page</h2>
    </div>

    <div class="card-body">
        <form action="{{ url('students/' . $students->id) }}" method="post">
            @csrf
            @method('PATCH')

            <input type="hidden" name="id" id="id" value="{{ $students->id }}">

            <label>Student Name</label>
            <input type="text" class="form-control" name="name" value="{{ $students->name }}"><br>

            <label>Student Address</label>
            <input type="text" class="form-control" name="address" value="{{ $students->address }}"><br>

            <label>Mobile</label>
            <input type="number" class="form-control" name="mobile" value="{{ $students->mobile }}"><br>
            <input type="submit" class="btn btn-success" value="update"><br>
        </form>
    </div>
</div>


@endsection