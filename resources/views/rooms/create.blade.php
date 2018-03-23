@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">New Room</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
        <a href="{{ route('rooms.index') }}" class="btn btn-sm btn-outline-secondary">Rooms</a>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
    </div>
</div>
<div class="table-responsive col-md-12">
    <form method="POST" action="{{ route('rooms.store') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Room Number</label>
            <input type="text" name="number" class="form-control" id="number" placeholder="Room number" required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Location</label>
            <input type="text" name="location" class="form-control" id="location" placeholder="Room location" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputState">Room Type</label>
            <select name="type_id" id="type_id" class="form-control" required>
                <option selected>Choose...</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
       
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Number of persons</label>
            <select name="persons" id="persons" class="form-control" required>
                <option selected>Choose...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            </div>
            <div class="form-group col-md-6">
            <label for="inputState">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option selected>Choose...</option>
                <option value="Free">Free</option>
                <option value="Reserved">Reserved</option>
                <option value="Occupied">Occupied</option>
                <option value="Maintenance">Maintenance</option>
            </select>
            </div>
        </div>
        
        <button type="submit" class="btn btn-dark">Validate</button>
    </form>
</div>


@endsection

@section('custom_js')


@endsection