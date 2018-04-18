@extends('layouts.template-pages')
@section('title') - Travel Deal @endsection
@section('header') Travel Deal @endsection

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
                <h4 class="title">Travel Deal</h4>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <table class="table">
                                <tr>
                                    <td class="text-info">Location</td>
                                    <td>{{$deal->deal_location}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Price</td>
                                    <td>{{$deal->deal_price}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Selling Date</td>
                                    <td>{{$deal->deal_sellstartdate}} to {{$deal->deal_sellenddate}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Travel Date</td>
                                    <td>{{$deal->deal_startdate}} to {{$deal->deal_enddate}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Deal Inclusions</td>
                                    <td>{{$deal->deal_inclusions}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Deal Exclusions</td>
                                    <td>{{$deal->deal_exclusions}}</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Deal Exclusions</td>
                                    <td>{{$deal->deal_exclusions}}</td>
                                </tr>
                                <tr>
                                    <td>Rating</td>
                                    <td>
                                        @if ($deal->deal_rating == 0)
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                        @endif

                                        @if ($deal->deal_rating == 1)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                        @endif
                                        
                                        @if ($deal->deal_rating == 2)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                        @endif

                                        @if ($deal->deal_rating == 3)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                        @endif

                                        @if ($deal->deal_rating == 4)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star unchecked"></span>
                                        @endif

                                        @if ($deal->deal_rating == 5)
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
                
                <div class="text-center">
                    <a href="/deals/{{$deal->id}}/edit" class="btn btn-success pull-left">Edit</a>
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>
    </div>      
</div>
@endif
@endsection