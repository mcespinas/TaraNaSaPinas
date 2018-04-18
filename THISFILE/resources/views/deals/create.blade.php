@extends('layouts.template-pages')
@section('title') - Create Profile @endsection
@section('header') Create Profile @endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">Create Profile</h4>
            </div>
            <div class="content">
                {!! Form::open(['action' => 'DealsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                {{Form::label('deal_location', 'Location')}}
                                {{Form::text('deal_location', '', ['class' => 'form-control border-input', 'placeholder' => 'Location'])}}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{Form::label('deal_price', 'Price')}}
                                {{Form::text('deal_price', '', ['class' => 'form-control border-input', 'placeholder' => 'Price'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('deal_sellstartdate', 'Selling Start Date')}}
                                {{Form::date('deal_sellstartdate', '', ['class' => 'form-control border-input', 'placeholder' => 'Selling Start Date'])}}                           
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('deal_sellenddate', 'Selling End Date')}}
                                {{Form::date('deal_sellenddate', '', ['class' => 'form-control border-input', 'placeholder' => 'Selling End Date'])}}                         
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('deal_startdate', 'Travel Start Date')}}
                                {{Form::date('deal_startdate', '', ['class' => 'form-control border-input', 'placeholder' => 'Travel Start Date'])}}                           
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('deal_enddate', 'Travel End Date')}}
                                {{Form::date('deal_enddate', '', ['class' => 'form-control border-input', 'placeholder' => 'Travel End Date'])}}                         
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('deal_inclusions', 'Deal Inclusions')}}
                                {{Form::text('deal_inclusions', '', ['class' => 'form-control border-input', 'placeholder' => 'Deal Inclusions'])}}                        
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('deal_exclusions', 'Deal Exclusions')}}
                                {{Form::text('deal_exclusions', '', ['class' => 'form-control border-input', 'placeholder' => 'Deal Exclusions'])}}                       
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deal Image1 (max upload size: 2MB) </label> 
                                {{Form::file('deal_img1')}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deal Image2 (max upload size: 2MB) </label> 
                                {{Form::file('deal_img2')}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deal Image3 (max upload size: 2MB) </label> 
                                {{Form::file('deal_img3')}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deal Image4 (max upload size: 2MB) </label> 
                                {{Form::file('deal_img4')}}
                            </div>
                        </div>
                    </div>

                    {{Form::hidden('deal_rating', 0)}} 

                    <div class="text-center">
                        {{Form::submit('Submit', ['class' => 'btn btn-success pull-left'])}}
                        <a href="/home" class="btn btn-info pull-right">Cancel</a>
                    </div>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>      
</div>
@endsection