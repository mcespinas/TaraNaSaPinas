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
                {!! Form::open(['action' => 'AgencyController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('agency_name', 'Company Name')}}
                                {{Form::text('agency_name', '', ['class' => 'form-control border-input', 'placeholder' => 'Company Name'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('agency_address', 'Address')}}
                                {{Form::text('agency_address', '', ['class' => 'form-control border-input', 'placeholder' => 'Address'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('agency_contact', 'Contact Number')}}
                                {{Form::text('agency_contact', '', ['class' => 'form-control border-input', 'placeholder' => 'Contact Number'])}}                           
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('agency_email', 'Email Address')}}
                                {{Form::text('agency_email', '', ['class' => 'form-control border-input', 'placeholder' => 'Email Address'])}}                         
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('agency_permit', 'Business Permit Number')}}
                                {{Form::text('agency_permit', '', ['class' => 'form-control border-input', 'placeholder' => 'Business Permit Number'])}}                        
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('agency_info', 'Additional Details')}}
                                {{Form::textarea('agency_info', '', ['id' => 'article-ckeditor', 'class' => 'form-control border-input', 'placeholder' => 'Additional Details'])}}                       
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('agency_url', 'Website URL')}}
                                {{Form::text('agency_url', '', ['class' => 'form-control border-input', 'placeholder' => 'Website URL'])}}                   
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Company Logo (max upload size: 2MB) </label> 
                                {{Form::file('agency_logo')}}
                            </div>
                        </div>
                    </div>

                    {{Form::hidden('agency_status', 'Pending')}}
                    {{Form::hidden('agency_rating', 0)}} 

                    <div class="text-center">
                        {{Form::submit('Submit', ['class' => 'btn btn-success pull-left'])}}
                        <a href="/taranasapinas/public/agencies" class="btn btn-info pull-right">Cancel</a>
                    </div>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>      
</div>
@endsection