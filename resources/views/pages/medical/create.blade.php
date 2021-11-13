@extends('layouts.app')
@section('content')
    <form action="{{route('medical.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Medicine Name:</span>
            <input type="text" name="med_name" value="{{old('med_name')}}" class="form-control">
            @error('med_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Medicine Details:</span>
            <input type="text" name="med_details" value="{{old('med_details')}}" class="form-control">
            @error('med_details')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Medicine manufacturing Date:</span>
            <input type="date" name="men_date" value="{{old('men_date')}}" class="form-control">
            @error('men_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Expiry Date:</span>
            <input type="date" name="exp_date" value="{{old('exp_date')}}" class="form-control">
            @error('exp_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Medicine Category:</span>
            <input type="text" name="med_cat" value="{{old('med_cat')}}" class="form-control">
            @error('med_cat')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Quantity:</span>
            <input type="text" name="quantity" value="{{old('quantity')}}" class="form-control">
            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Add" >
    </form>
@endsection