@extends('layouts.template-pages')
@section('title') - View Feedbacks @endsection
@section('header')  @endsection

@section('style')
    <!-- Style for star rating -->
    <style>
        .checked {
            color: orangered;
        }
    </style>
@endsection

@section('background') 
    style="background-image: url('{{ asset('img/welcome_page_1600.jpg') }}'); 
    background-repeat: round; 
    background-attachment: fixed;"
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">View Feedbacks</h4>
            </div>
            <div class="content">
                    @if(count($feedbacks) > 0)
                    <table class="table">
                        <thead class="text-info">
                            <th>Date</th>
                            <th>Traveler's Name</th>
                            <th>Feedback</th>
                            <th>Rating<th/>
                        </thead>
                        <tbody>
                            @foreach($feedbacks as $feedback)
                                <tr>
                                    <td>{{$feedback->fb_date}}</td>
                                    <td>
                                        @foreach($users as $user)
                                            @if ($user->id == $feedback->user_id)
                                                {!!$user->name!!}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{$feedback->fb_text}}</td>
                                    <td>
                                        @if (($feedback->fb_rating >= 0.00) && ($feedback->fb_rating <= 0.49))
                                        @endif
                                
                                        @if ($feedback->fb_rating == 1)
                                            <i class="ti-star checked"></i>
                                        @endif
                                                                                
                                        @if ($feedback->fb_rating == 2)
                                            <i class="ti-star checked"></i>
                                            <i class="ti-star checked"></i>
                                        @endif
                                
                                        @if ($feedback->fb_rating == 3)
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        @endif
                                
                                        @if ($feedback->fb_rating == 4)
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        @endif
                                
                                        @if ($feedback->fb_rating == 5)
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                @else
                    <p>No feedbacks found.</p>
                @endif
            </div>
        </div>
    </div>
</div>    
@endsection