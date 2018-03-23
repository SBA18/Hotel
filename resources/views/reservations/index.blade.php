@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">List of Reservations</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
        <a href="{{ route('reservations.create') }}" class="btn btn-sm btn-outline-secondary">New Reservation</a>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
    </div>
</div>

<div class="table-responsive dataTables_wrapper display">
    <table id="reservation" class="table table-striped dataTable">
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
            <tr>
                <th scope="row">1212121</th>
                <td>1212121</td>
                <td>1212121</td>
                <td>1212121</td>
                <td>1212121</td>
            </tr>
        </tbody>
    </table>
</div>


@endsection

@section('custom_js')

<script>
    $(document).ready( function () {
        $('#reservation').DataTable({
            select: true,
        });
    } );
</script>

@endsection