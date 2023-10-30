@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">Courses Page</div>
    <div class="card-body">
        <form method="POST" action="{{ url('courses') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-6">
                    <label>Syllabus</label>
                    <input type="text" class="form-control" name="syllabus">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Duration</label>
                    <input type="text" class="form-control" name="duration">
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