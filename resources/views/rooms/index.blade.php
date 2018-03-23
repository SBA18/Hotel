@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">List of rooms</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
        <a href="{{ route('rooms.create') }}" class="btn btn-sm btn-outline-secondary">New Room</a>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
    </div>
</div>

<div class="table-responsive dataTables_wrapper display">
    <table id="rooms" class="table table-striped dataTable">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Room number</th>
            <th scope="col">Type</th>
            <th scope="col">Number of persons</th>
            <th scope="col">Location</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <th scope="row">{{$room->number}}</th>
                <td>{{$room->type->name}}</td>
                <td>{{$room->persons}}</td>
                <td>{{$room->location}}</td>
                <td>{{$room->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

@section('custom_js')

<script>
    $(document).ready( function () {
        $('#rooms').DataTable({
            select: true,
        });
    } );
</script>

@endsection