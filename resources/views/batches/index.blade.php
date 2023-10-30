@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>Batches</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('/batches/create') }}" class="btn btn-success btn-sm" title="Add New Batch">
            <i class="fa fa plus" aria hidden="true"></i>Add New
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Start Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($batches as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->course->name }}</td>
                        <td>{{ $item->start_date }}</td>
                        <td>
                            <a href="{{ url('/batches/' . $item->id) }}" style="text-decoration:none">
                                <button class="btn btn-info btn-sm" title="View Batch">View</button>
                            </a>
                            <a href="{{ url('/batches/' . $item->id . '/edit') }}" style="text-decoration:none">
                                <button class="btn btn-primary btn-sm" title="Edit Batch">Edit</button>
                            </a>

                            <form action="{{ url('/batches' . '/' . $item->id) }}" method="POST" accept-charset="UTF-8"
                                style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Batch"
                                    onclick="return confirm(&quol;Confirm delete?&quol;)">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection