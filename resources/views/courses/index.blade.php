@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>Courses Application</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('/courses/create') }}" class="btn btn-success btn-sm" title="Add New Course">
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
                        <th>Syllabus</th>
                        <th>Duration</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->syllabus }}</td>
                        <td>{{ $item->duration() }}</td>
                        <td>
                            <a href="{{ url('/courses/' . $item->id) }}" style="text-decoration:none">
                                <button class="btn btn-info btn-sm" title="View Course">View</button>
                            </a>
                            <a href="{{ url('/courses/' . $item->id . '/edit') }}" style="text-decoration:none">
                                <button class="btn btn-primary btn-sm" title="Edit Course">Edit</button>
                            </a>

                            <form action="{{ url('/courses' . '/' . $item->id) }}" method="POST" accept-charset="UTF-8"
                                style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Course"
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