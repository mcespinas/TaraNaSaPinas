@extends('layouts.app')

@section('content')
    <h1>Edit Deal</h1>
    {!! Form::open(['action' => ['DealsController@update', $deal->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        
        <div class="form-group">
            {{Form::label('deal_name', 'Name')}}
            {{Form::text('deal_name', $deal->deal_name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('deal_location', 'Location')}}
            {{Form::text('deal_location', $deal->deal_location, ['class' => 'form-control', 'placeholder' => 'Location'])}}
        </div>    
        <div class="form-group">
            {{Form::label('deal_price', 'Price')}}
            {{Form::text('deal_price', $deal->deal_price, ['class' => 'form-control', 'placeholder' => 'Price'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('deal_sellstartdate', 'Selling Start Date')}}
            {{Form::date('deal_sellstartdate', $deal->deal_sellstartdate, ['class' => 'date form-control', 'id' => 'datepicker5', 'placeholder' => 'yyyy-mm-dd'])}}
        </div> 
        <div class="form-group">
            {{Form::label('deal_sellenddate', 'Selling End Date')}}
            {{Form::date('deal_sellenddate', $deal->deal_sellenddate, ['class' => 'date form-control', 'id' => 'datepicker6', 'placeholder' => 'yyyy-mm-dd'])}}
        </div> 
        <div class="form-group">
            {{Form::label('deal_travelstartdate', 'Travel Start Date')}}
            {{Form::date('deal_travelstartdate', $deal->deal_travelstartdate, ['class' => 'date form-control', 'id' => 'datepicker7', 'placeholder' => 'yyyy-mm-dd'])}}
        </div> 
        <div class="form-group">
            {{Form::label('deal_travelenddate', 'Travel End Date')}}
            {{Form::date('deal_travelenddate', $deal->deal_travelenddate, ['class' => 'date form-control', 'id' => 'datepicker8', 'placeholder' => 'yyyy-mm-dd'])}}
        </div> 
            
        <div class="form-group">
            {{Form::label('deal_highlights', 'Tour Highlights')}}
            {{Form::textarea('deal_highlights', $deal->deal_highlights, ['class' => 'form-control', 'placeholder' => 'Tour Highlights'])}}
        </div>    
        <div class="form-group">
            {{Form::label('deal_inclusions', 'Inclusions')}}
            {{Form::textarea('deal_inclusions', $deal->deal_inclusions, ['class' => 'form-control', 'placeholder' => 'Inclusions'])}}
        </div>
        <div class="form-group">
            {{Form::label('deal_exclusions', 'Exclusions')}}
            {{Form::textarea('deal_exclusions', $deal->deal_exclusions, ['class' => 'form-control', 'placeholder' => 'Exclusions'])}}
        </div>
        <div class="form-group">
            {{Form::label('deal_itinerary', 'Travel Itinerary')}}
            {{Form::textarea('deal_itinerary', $deal->deal_itinerary, ['class' => 'form-control', 'placeholder' => 'Travel Itinerary'])}}
        </div>        

        {{Form::hidden('_method', 'PUT')}} 
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        <a href="/lsapp/public/deals" class="btn btn-primary">Cancel</a>
    {!! Form::close() !!}
@endsection
