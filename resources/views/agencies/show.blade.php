@extends('layouts.template')
@section('title') - Company Profile @endsection
@section('header') Company Profile @endsection
@section('subheader')  @endsection

@section('style')

@endsection

@section('script')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-2">    
            <img src='http://localhost/lsapp/public/storage/agency_logos/{!!$agency->agency_logo!!}'>
        </div>
    </div>
    
    <h1 class="category text-black">
        <a href="http://{!!$agency->agency_url!!}">
            {!!$agency->agency_name!!}
        </a>
    </h1>                          
    <h4> 
        Application Status: 
        <b> {!!$agency->agency_status!!} </b> 
    </h4><br />
    <h4>
        Address:
        <b> {!!$agency->agency_address!!} </b>
    </h4>
    <h4>
        Contact Number:
        <b> {!!$agency->agency_contact!!} </b>
    </h4>
    <h4>
        Email Address:
        <b> {!!$agency->agency_email!!} </b>
    </h4>
    <h4>
        Business Permit Number:
        <b> {!!$agency->agency_permit!!} </b>
    </h4>
                                            
    <br /><h4>
        About Us:<br />
        {!!$agency->agency_info!!}
    </h4><br />

    <h4>
        User Rating:
        @if (($agency->agency_rating >= 0.00) && ($agency->agency_rating <= 0.49))
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        @endif

        @if (($agency->agency_rating > 0.49) && ($agency->agency_rating <= 1.49))
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        @endif
                                                
        @if (($agency->agency_rating > 1.49) && ($agency->agency_rating <= 2.49))
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        @endif

        @if (($agency->agency_rating > 2.49) && ($agency->agency_rating <= 3.49))
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        @endif

        @if (($agency->agency_rating > 3.49) && ($agency->agency_rating <= 4.49))
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        @endif

        @if (($agency->agency_rating > 4.49) && ($agency->agency_rating <= 5.00))
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
        @endif
    </h4>        
    <table>
        <td width=100>
            <a href="/lsapp/public/agencies/{{$agency->id}}/edit" class="btn btn-info btn-block">Edit</a>
        </td>
        @if (Auth::user()->user_type == 'System Administrator')
            <td width=25>&nbsp;</td>    
            <td width=100>
                {!!Form::open(['action' => ['AgencyController@destroy', $agency->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])}}
                {!!Form::close()!!} 
            </td>
        @endif            
    </table> 
@endsection