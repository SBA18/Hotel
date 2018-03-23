@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">New Customer</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
        <a href="{{ route('customers.index') }}" class="btn btn-sm btn-outline-secondary">Customers</a>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
    </div>
</div>
<div class="table-responsive col-md-12">
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="firstname">First name</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
            </div>
            <div class="form-group col-md-6">
            <label for="lastname">Last name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
            </div>
            <div class="form-group col-md-6">
            <label for="phone">Personal phone</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="phone">
            </div>
        </div>

        <div class="form-group">
            <label for="address_street">Address</label>
            <input type="text" class="form-control" name="address_street" id="address_street" placeholder="1234 Main St">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="City">
            </div>
            <div class="form-group col-md-4">
            <label for="state">State</label>
            <select id="state" name="state" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="zipcode">Zip</label>
            <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Zip Code">
            </div>
        </div>
        
        <button type="submit" class="btn btn-dark">Save</button>
    </form>
</div>


@endsection

@section('custom_js')


@endsection