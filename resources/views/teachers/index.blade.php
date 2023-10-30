@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>Teacher Application</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add New Teacher">
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
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>
                            <a href="{{ url('/teachers/' . $item->id) }}" style="text-decoration:none">
                                <button class="btn btn-info btn-sm" title="View Teacher">View</button>
                            </a>
                            <a href="{{ url('/teachers/' . $item->id . '/edit') }}" style="text-decoration:none">
                                <button class="btn btn-primary btn-sm" title="Edit Teacher">Edit</button>
                            </a>

                            <form action="{{ url('/teachers' . '/' . $item->id) }}" method="POST" accept-charset="UTF-8"
                                style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher"
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