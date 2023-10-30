@extends('layout')

@section('content')

<div class="card mt-2">
    <div class="card-header">Batches</div>
    <div class="card-body">
        <form method="POST" action="{{ url('batches') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label>Batch Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="col-md-6">
                    <label>Course</label>
                    <select name="course_id" id="course_id" class="form-control">
                        @foreach($courses as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Date</label>
                    <input type="date" class="form-control" name="start_date" id="start_date">
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