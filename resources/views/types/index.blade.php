@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">List of Room type</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
        <a href="{{ route('types.create') }}" class="btn btn-sm btn-outline-secondary">New room type</a>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
    </div>
</div>

<div class="table-responsive">
    <table id="roomstype" class="table table-striped dataTable display">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">By</th>
            <th scope="col">At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
            <tr>
                <th scope="row">{{ $type->id }}</th>
                <td>{{ $type->name }}</td>
                <td>{{ $type->user->name }}</td>
                <td>{{ $type->created_at->toDayDateTimeString() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

@section('custom_js')

<script>
    $(document).ready( function () {
        $('#roomstype').DataTable({
            select: true,
        });
    } );
</script>

@endsection