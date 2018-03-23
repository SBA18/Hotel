@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">New Reservation</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
        <a href="{{ route('reservations.index') }}" class="btn btn-sm btn-outline-secondary">Reservations</a>
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
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Room Type</label>
                <select id="state" name="state" class="form-control">
                    <option selected>Choose...</option>
                    @foreach($types as $type)
                    <option value="{{$type->id}}">{{ $type->name}}</option>
                    @endforeach
                </select>            
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Number of Guests</label>
                <select id="state" name="state" class="form-control">
                    <option selected>Choose...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>            
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="arrival">Arrival date and Time</label>
                <input type="text" class="form-control" data-format="dd/MM/yyyy" name="arrival" id="datetimepicker1" placeholder="MM/DD/YY">
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Departure date</label>
                <input type="text" class="form-control" name="phone" id="datetimepicker2" placeholder="phone">
            </div>
        </div>
        <button type="submit" class="btn btn-dark">Save</button>
    </form>
</div>


@endsection

@section('custom_js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"></script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>

@endsection