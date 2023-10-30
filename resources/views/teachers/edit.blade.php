@extends('layout')

@section('content')


<div class="card">
    <div class="card-header">
        <h2>Edit Page</h2>
    </div>

    <div class="card-body">
        <form action="{{ url('teachers/' . $teachers->id) }}" method="post">
            @csrf
            @method('PATCH')

            <input type="hidden" name="id" id="id" value="{{ $teachers->id }}">

            <label>Teacher Name</label>
            <input type="text" class="form-control" name="name" value="{{ $teachers->name }}"><br>

            <label>Teacher Address</label>
            <input type="text" class="form-control" name="address" value="{{ $teachers->address }}"><br>

            <label>Mobile</label>
            <input type="number" class="form-control" name="mobile" value="{{ $teachers->mobile }}"><br>
            <input type="submit" class="btn btn-success" value="update"><br>
        </form>
    </div>
</div>


@endsection