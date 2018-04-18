@extends('layouts.template-pages')
@section('title') - Travel Booking @endsection
@section('header') Travel Booking @endsection

@section('content')
@if (Auth::user()->user_type == 'Travel Agency')
<div class="row">
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">Travel Booking</h4>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <table class="table">
                                <tr>
                                    <td class="text-info">Status</td>
                                    <td>{{$booking->book_status}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Customer Name</td>
                                    <td>{{$booking->book_fname}} {{$booking->book_lname}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Deal ID</td>
                                    <td><a href="/deals/{{$booking->deal_id}}"> {{$booking->deal_id}} </a></td>
                                </tr>
                                <tr>
                                    <td class="text-info">Travel Date</td>
                                    <td>{{$booking->book_start}} to {{$booking->book_end}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">PAX</td>
                                    <td>{{$booking->book_pax}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Total Price</td>
                                    <td>{{$booking->book_price}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Email Address</td>
                                    <td>{{$booking->book_email}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Contact Number</td>
                                    <td>{{$booking->book_contact}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <a href="/bookings/{{$booking->id}}/edit" class="btn btn-success pull-left">Edit</a>
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>
    </div>      
</div>
@endif
@endsection