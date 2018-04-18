@extends('layouts.template-pages')

@section('title') - View Bookings @endsection
@section('header')  @endsection
@section('background') 

@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">View Bookings</h4>
            </div>
            <div class="content">
                    @if(count($bookings) > 0)
                    <table class="table">
                        <thead class="text-info">
                            <th>Deal ID</th>
                            <th>Booking Status</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>PAX</th>
                            <th>Customer Name</th>
                            <th></th>   
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                                <tr>
                                    <td><a href="deals/{{$booking->deal_id}}"> {{$booking->deal_id}} </a></td>
                                    <td>{{$booking->book_status}}</td>
                                    <td>{{$booking->book_start}}</td>
                                    <td>{{$booking->book_end}}</td>
                                    <td>{{$booking->book_pax}}</td>
                                    <td>{{$booking->book_fname}} {{$booking->book_lname}}</td>
                                    <td>
                                        <a href="/bookings/{{$booking->id}}/edit" class="btn btn-info">
                                            <i class="ti-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                @else
                    <p>No travel bookings found.</p>
                @endif
            </div>
        </div>
    </div>
</div>    
@endsection