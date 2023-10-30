@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">Teachers Page</div>
    <div class="card-body">
        <form method="POST" action="{{ url('teachers') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-6">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Mobile</label>
                    <input type="number" class="form-control" name="mobile">
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