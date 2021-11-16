@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>ID</th>
            <th>Medicine Name</th>
            <th>Medicine Details</th>
            <th>Menufacture Date</th>
            <th>Expiry Date</th>
            <th>Medicine Category</th>
            <th>Medicine Quantity</th>
        </tr>
        @foreach($meds as $med)
            <tr>
                <td>{{$med->id}}</td>
                <td>{{$med->med_name}}</td>
                <td>{{$med->med_details}}</td>
                <td>{{$med->men_date}}</td>
                <td>{{$med->exp_date}}</td>
                <td>{{$med->med_cat}}</td>
                <td>{{$med->quantity}}</td>
            </tr>
        @endforeach
    </table>
@endsection