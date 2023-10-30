@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>Enrollments</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New Enrollment">
            <i class="fa fa plus" aria hidden="true"></i>Add New
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enroll No</th>
                        <th>Batch</th>
                        <th>Student</th>
                        <th>Join Date</th>
                        <th>Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enrollments as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->enroll_no }}</td>
                        <td>{{ $item->batch->name }}</td>
                        <td>{{ $item->student->name }}</td>
                        <td>{{ $item->join_date }}</td>
                        <td>{{ $item->fee }}</td>
                        <td>
                            <a href="{{ url('/enrollments/' . $item->id) }}" style="text-decoration:none">
                                <button class="btn btn-info btn-sm" title="View Enrollment">View</button>
                            </a>
                            <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" style="text-decoration:none">
                                <button class="btn btn-primary btn-sm" title="Edit Enrollment">Edit</button>
                            </a>

                            <form action="{{ url('/enrollments' . '/' . $item->id) }}" method="POST" accept-charset="UTF-8"
                                style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollment"
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