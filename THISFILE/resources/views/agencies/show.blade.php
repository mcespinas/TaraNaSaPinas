@extends('layouts.template-pages')

@section('title') - Company Profile @endsection
@section('header') Company Profile @endsection

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
@if (Auth::user()->user_type == 'Travel Agency')
<div class="row">
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">Company Profile</h4>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <table class="table">
                                <tr>
                                    <td class="text-info">Status</td>
                                    <td>{{$agency->agency_status}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Company Name</td>
                                    <td>{{$agency->agency_name}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Address</td>
                                    <td>{{$agency->agency_address}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Contact Number</td>
                                    <td>{{$agency->agency_contact}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Email Address</td>
                                    <td>{{$agency->agency_email}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Business Permit Number</td>
                                    <td>{{$agency->agency_permit}}</td>
                                </tr>

                                @if (!is_null($agency->agency_info))
                                    <tr>
                                        <td class="text-info">Additional Details</td>
                                        <td>{{$agency->agency_info}}</td>
                                    </tr>
                                @endif
                                    
                                @if (!is_null($agency->agency_url))
                                    <tr>
                                        <td class="text-info">Website URL</td>
                                        <td>{{$agency->agency_url}}</td>
                                    </tr>
                                @endif
                                
                                <tr>
                                    <td class="text-info">Rating</td>
                                    <td>
                                        @if ($agency->agency_rating == 0)
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                        @endif

                                        @if ($agency->agency_rating == 1)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                        @endif
                                        
                                        @if ($agency->agency_rating == 2)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                        @endif

                                        @if ($agency->agency_rating == 3)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                        @endif

                                        @if ($agency->agency_rating == 4)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                        @endif

                                        @if ($agency->agency_rating == 5)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        @endif
                                    </td>
                                </tr> 
                            </table>
                        </div>
                    </div>
                </div>
                <!--
                <div class="text-center">
                    <a href="/taranasapinas/public/agencies/{{$agency->id}}/edit" class="btn btn-success pull-left">Edit</a>
                </div>
                -->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>      
</div>
@endif

@if (Auth::user()->user_type == 'System Administrator')
<div class="row">
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">Company Profile</h4>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <table class="table">
                                <tr>
                                    <td class="text-info">Status</td>
                                    <td>{{$agency->agency_status}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Company Name</td>
                                    <td>{{$agency->agency_name}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Address</td>
                                    <td>{{$agency->agency_address}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Contact Number</td>
                                    <td>{{$agency->agency_contact}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Email Address</td>
                                    <td>{{$agency->agency_email}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Business Permit Number</td>
                                    <td>{{$agency->agency_permit}}</td>
                                </tr>

                                @if (!is_null($agency->agency_info))
                                    <tr>
                                        <td class="text-info">Additional Details</td>
                                        <td>{{$agency->agency_info}}</td>
                                    </tr>
                                @endif
                                    
                                @if (!is_null($agency->agency_url))
                                    <tr>
                                        <td class="text-info">Website URL</td>
                                        <td>{{$agency->agency_url}}</td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <a href="/agencies/{{$agency->id}}/edit" class="btn btn-success pull-left">Edit</a>
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>
    </div>      
</div>
@endif
@endsection