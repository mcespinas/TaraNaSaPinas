@extends('layouts.template')

@section('content')
    <h1>Create a new message</h1>
    <form action="{{ route('messages.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-6">

            <!--Recipient Form Input -->
            <div class="form-group">
                    <label class="control-label"> Recipients: </label>
                @if($users->count() > 0)
                    <div class="checkbox">
                        @foreach($users as $user)
                            <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                                                    value="{{ $user->id }}" checked>{!!$user->name!!}</label>
                        @endforeach
                    </div>
                @endif
            </div>
            <!-- Subject Form Input -->
            <div class="form-group">
                <label class="control-label">Subject</label>
                <input type="text" class="form-control" name="subject" 
                       value="{{ old('subject') }}">
            </div>

            <!-- Message Form Input -->
            <div class="form-group">
                <label class="control-label">Message</label>
                <textarea name="message" class="form-control">{{ old('message') }}</textarea>
            </div>
    
            <!-- Submit Form Input -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@stop
