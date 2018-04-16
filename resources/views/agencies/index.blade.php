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
            color: white;
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
                    <table>
                        <th>Agency Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Email Address</th>
                            <th>Account Status</th>
                            <th>Business Permit Number</th>
                            <th>Rating</th>
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