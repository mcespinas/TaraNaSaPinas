@extends('layouts.template-pages')

@section('title') - View Agencies @endsection
@section('header') View Agencies @endsection

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
                <h4 class="title">View Agencies</h4>
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
                                        <a href="/agencies/{{$agency->id}}">
                                            {{$agency->agency_name}}
                                        </a>    
                                    </td>
                                    <td>{{$agency->agency_address}}</td>
                                    <td>{{$agency->agency_contact}}</td>
                                    <td>{{$agency->agency_email}}</td>
                                    <td>{{$agency->agency_status}}</td>
                                    <td>{{$agency->agency_permit}}</td>
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