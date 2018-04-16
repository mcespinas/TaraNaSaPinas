@extends('layouts.template')
@section('title') - View Bookings @endsection
@section('header') View Bookings @endsection
@section('subheader')  @endsection

@section('style')

@endsection

@section('script')

@endsection

@section('content')
    <div class="card-content table-responsive">
        @if(count($bookings) > 0)
            <table class="table">
                <thead class="text-info">
                    <th>Deal Name</th>
                    <th>Booking Status</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>PAX</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th></th>
                    <th></th>    
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td></td>
                            <td>{{$booking->book_status}}</td>
                            <td>{{$booking->book_start}}</td>
                            <td>{{$booking->book_end}}</td>
                            <td>{{$booking->book_pax}}</td>
                            <td>{{$booking->book_fname}}</td>
                            <td>{{$booking->book_lname}}</td>
                            <td>
                                <a href="/lsapp/public/bookings/{{$booking->id}}/edit" class="btn btn-info">
                                    <i class="material-icons">create</i>
                                </a>
                            </td>
                            <td>
                                {!!Form::open(['action' => ['BookingsController@destroy', $booking->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="material-icons">delete</i>
                                   </button>
                                {!!Form::close()!!} 
                            </td>
                        </tr>
                    @endforeach    
                </tbody>
            </table>
        @else
            <p>No bookings found.</p>
        @endif
    </div>
@endsection