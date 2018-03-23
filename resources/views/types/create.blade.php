@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">New Room Type</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
        <a href="{{ route('types.index') }}" class="btn btn-sm btn-outline-secondary">Room types</a>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
    </div>
</div>
<div class="table-responsive col-md-12">
    <form method="POST" action="{{ route('types.store') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="type">Type</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Room type" required>
            </div>
            
        </div>
        
        <button type="submit" class="btn btn-dark">Save</button>
    </form>
</div>


@endsection

@section('custom_js')


@endsection