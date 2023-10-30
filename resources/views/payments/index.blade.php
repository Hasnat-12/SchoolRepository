@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>Payments</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Add New Payment">
            <i class="fa fa plus" aria hidden="true"></i>Add New
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enrollment No</th>
                        <th>Paid Date</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->enrollment->enroll_no }}</td>
                        <td>{{ $item->paid_date }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>
                            <a href="{{ url('/payments/' . $item->id) }}" style="text-decoration:none">
                                <button class="btn btn-info btn-sm" title="View Payment">View</button>
                            </a>
                            <a href="{{ url('/payments/' . $item->id . '/edit') }}" style="text-decoration:none">
                                <button class="btn btn-primary btn-sm" title="Edit Payment">Edit</button>
                            </a>

                            <form action="{{ url('/payments' . '/' . $item->id) }}" method="POST" accept-charset="UTF-8"
                                style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment"
                                    onclick="return confirm(&quol;Confirm delete?&quol;)">Delete</button>
                            </form>

                            <a href="{{ url('/report/report1/' . $item->id) }}" title="Print Payment Report">
                                <button class="btn btn-success btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-printer-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                        <path
                                            d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                    </svg> Print
                                </button>
                            </a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection