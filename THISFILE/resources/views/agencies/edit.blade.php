@extends('layouts.template-pages')
@section('title') - Edit Profile @endsection
@section('header') Edit Profile @endsection

@section('content')
@if (Auth::user()->user_type == 'Travel Agency')
<div class="row">
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">Edit Profile</h4>
            </div>
            <div class="content">
                {!! Form::open(['action' => ['AgencyController@update', $agency->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('agency_name', 'Company Name')}}
                                {{Form::text('agency_name', $agency->agency_name, ['class' => 'form-control border-input', 'placeholder' => 'Company Name'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('agency_address', 'Address')}}
                                {{Form::text('agency_address', $agency->agency_address, ['class' => 'form-control border-input', 'placeholder' => 'Address'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('agency_contact', 'Contact Number')}}
                                {{Form::text('agency_contact', $agency->agency_contact, ['class' => 'form-control border-input', 'placeholder' => 'Contact Number'])}}                         
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('agency_email', 'Email Address')}}
                                {{Form::text('agency_email', $agency->agency_email, ['class' => 'form-control border-input', 'placeholder' => 'Email Address'])}}                           
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('agency_permit', 'Business Permit Number')}}
                                {{Form::text('agency_permit', $agency->agency_permit, ['class' => 'form-control border-input', 'placeholder' => 'Business Permit Number'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('agency_info', 'Additional Details')}}
                                {{Form::text('agency_info', $agency->agency_info, ['class' => 'form-control border-input', 'placeholder' => 'Additional Details'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('agency_url', 'Website URL')}}
                                {{Form::text('agency_url', $agency->agency_url, ['class' => 'form-control border-input', 'placeholder' => 'Website URL'])}}
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

                    <div class="text-center">
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class' => 'btn btn-success pull-left'])}}
                        <a href="/agencies/{{$agency->id}}" class="btn btn-info pull-right">Cancel</a>
                    </div>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
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
                <h4 class="title">Edit Profile</h4>
            </div>
            <div class="content">
                {!! Form::open(['action' => ['AgencyController@update', $agency->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('agency_status', 'Status')}}
                                {{Form::text('agency_status', $agency->agency_status, ['class' => 'form-control border-input', 'placeholder' => 'Status'])}}
                            </div>
                        </div>
                    </div>    

                    <div class="text-center">
                        {{Form::hidden('agency_name', $agency->agency_name)}}
                        {{Form::hidden('agency_address', $agency->agency_address)}}
                        {{Form::hidden('agency_contact', $agency->agency_contact)}}
                        {{Form::hidden('agency_email', $agency->agency_email)}}
                        {{Form::hidden('agency_permit', $agency->agency_permit)}}
                        {{Form::hidden('agency_info', $agency->agency_info)}}
                        {{Form::hidden('agency_url', $agency->agency_url)}}

                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class' => 'btn btn-success pull-left'])}}
                        <a href="/agencies/{{$agency->id}}" class="btn btn-info pull-right">Cancel</a>
                    </div>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>      
</div>
@endif
@endsection
