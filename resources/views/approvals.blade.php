@extends('dashboard')
@section('content')

    <h1>Approval List</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <div class="card border-light mt-5">
        <div class="card-header bg-primary text-white">Data Approvals</div>
        <div class="card-body ">
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered text-center">
                <tr>
                    <th>id</th>
                    <th>status</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($approvals as $approval)
                <tr>
                    <td>{{ $approval->id}}</td>
                    <td>{{ $approval->status}}</td>
                    <td>
                        @if($approval->status == 'pending')
                            <form method="post" action="{{ route('approvals.approve', $approval->id) }}">
                                @method('PUT')
                                @csrf
                                <button type="submit">Approve</button>
                            </form>
                            
                            <form method="post" action="{{ route('approvals.reject', $approval->id) }}">
                                @method('PUT')
                                @csrf
                                <button type="submit">Reject</button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        </div>
    </div>

    {{-- <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($approvals as $approval)
                <tr>
                    <td>{{ $approval->id }}</td>
                    <td>{{ $approval->status }}</td>
                    <td>
                        @if($approval->status == 'pending')
                            <form method="post" action="{{ route('approvals.approve', $approval->id) }}">
                                @method('PUT')
                                @csrf
                                <button type="submit">Approve</button>
                            </form>
                            
                            <form method="post" action="{{ route('approvals.reject', $approval->id) }}">
                                @method('PUT')
                                @csrf
                                <button type="submit">Reject</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@endsection
