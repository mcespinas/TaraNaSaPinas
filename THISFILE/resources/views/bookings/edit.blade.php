@extends('layouts.template-pages')

@section('title') - Edit Travel Booking @endsection
@section('header') Edit Travel Booking @endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">Edit Travel Booking</h4>
            </div>
            <div class="content">
                {!! Form::open(['action' => ['BookingsController@update', $booking->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('book_status', 'Status')}}
                                {{Form::text('book_status', $booking->book_status, ['class' => 'form-control border-input', 'placeholder' => 'Status'])}}
                            </div>
                        </div>
                    </div>    

                    <div class="text-center">
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class' => 'btn btn-success pull-left'])}}
                        <a href="/bookings/{{$booking->id}}" class="btn btn-info pull-right">Cancel</a>
                    </div>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>      
</div>
@endsection