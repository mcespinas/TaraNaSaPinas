@extends('layouts.template-pages')

@if (Auth::user()->user_type == 'Travel Agency')
    @section('title') - Home @endsection
    @section('header')  @endsection

    @section('content')
    <div class="row">
        <div class="col-lg-8 col-sm-7">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-id-badge"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <a href="/taranasapinas/public/agencies/{{ Auth::user()->id }}">
                                    <p>View</p>    
                                    Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <div class="row">
        <div class="col-lg-4 col-sm-7">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-location-pin"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <a href='/taranasapinas/public/deals'>
                                    <p>View</p>    
                                    Deals
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-7">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-map-alt"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <a href='/taranasapinas/public/bookings'>
                                    <p>View</p>    
                                    Bookings
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-sm-7">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-comment-alt"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <a href='/taranasapinas/public/feedbacks'>
                                    <p>View</p>    
                                    Feedbacks
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <div class="col-lg-4 col-sm-7">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-comments"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <a href='/taranasapinas/public/inquiries'>
                                    <p>View</p>    
                                    Inquiries
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@endif

@if (Auth::user()->user_type == 'System Administrator')
    @section('title') - Home @endsection
    @section('header') Travel Agencies @endsection

    @section('style')
        <!-- Style for star rating -->
        <style>
            .checked {
                color: orange;
            }
            .unchecked {
                color: lightgray;
            }
        </style>
    @endsection

    @section('content')
    <div class="row">
        <div class="col-lg-12 col-md-7">
            <div class="card">
                <div class="header">
                    <h4 class="title">Travel Agencies</h4>
                </div>
                <div class="content">
                    @if(count($agencies) > 0)
                        <table class="table">
                            <thead class="text-info">
                                <th style="text-align: center;">Agency Name</th>
                                <th style="text-align: center;">Address</th>
                                <th style="text-align: center;">Contact Number</th>
                                <th style="text-align: center;">Email Address</th>
                                <th style="text-align: center;">Account Status</th>
                                <th style="text-align: center;">Business Permit Number</th>
                                <th style="text-align: center;">Rating</th>
                            </thead>
                            <tbody>
                                @foreach($agencies as $agency)
                                    <tr>
                                        <td>
                                            <a href="/taranasapinas/public/agencies/{{$agency->id}}">
                                                {{$agency->agency_name}}
                                            </a>    
                                        </td>
                                        <td>{{$agency->agency_address}}</td>
                                        <td>{{$agency->agency_contact}}</td>
                                        <td>{{$agency->agency_email}}</td>
                                        <td>{{$agency->agency_status}}</td>
                                        <td>{{$agency->agency_permit}}</td>
                                        <td>
                                            @if (($agency->agency_rating >= 0.00) && ($agency->agency_rating <= 0.49))
                                                <span class="fa fa-star unchecked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                            @endif

                                            @if (($agency->agency_rating > 0.49) && ($agency->agency_rating <= 1.49))
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                            @endif
                                                
                                            @if (($agency->agency_rating > 1.49) && ($agency->agency_rating <= 2.49))
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                            @endif

                                            @if (($agency->agency_rating > 2.49) && ($agency->agency_rating <= 3.49))
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                            @endif

                                            @if (($agency->agency_rating > 3.49) && ($agency->agency_rating <= 4.49))
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star unchecked"></span>
                                            @endif

                                            @if (($agency->agency_rating > 4.49) && ($agency->agency_rating <= 5.00))
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            @endif
                                        </td> 
                                    </tr>
                                @endforeach    
                            </tbody>
                        </table>
                    @else
                        <p>No travel agencies found.</p>
                    @endif
                </div>    
            </div>
        </div>
    </div>    
    @endsection
@endif