@extends('layouts.template-pages')
@section('title') - View Travel Deals @endsection
@section('header') View Travel Deals @endsection

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
                <h4 class="title">View Travel Deals</h4>
            </div>
            <div class="content">
                @if(count($deals) > 0)
                    <table class="table">
                        <thead class="text-info">
                            <th>Location</th>
                            <th>Price</th>
                            <th>Selling Date</th>
                            <th>Travel Date</th>
                            <th>Rating</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($deals as $deal)
                                <tr>
                                    <td>
                                        <a href="/deals/{{$deal->id}}">
                                            {{$deal->deal_location}}
                                        </a>    
                                    </td>
                                    <td>{{$deal->deal_price}}</td>
                                    <td>{{$deal->deal_sellstartdate}} to {{$deal->deal_sellenddate}}</td>
                                    <td>{{$deal->deal_startdate}} to {{$deal->deal_enddate}}</td>
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
                                    <td>
                                        <a href="/deals/{{$deal->id}}/edit" class="btn btn-info">
                                            <i class="ti-pencil"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {!!Form::open(['action' => ['DealsController@destroy', $deal->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            <button type="submit" class="btn btn-danger">
                                                <i class="ti-eraser"></i>
                                           </button>
                                        {!!Form::close()!!} 
                                    </td> 
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                @else
                    <p>No travel deals found.</p>
                @endif
            </div>    
        </div>
    </div>
</div>    
@endsection