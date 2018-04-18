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
                            <th></th>
                            <th>Traveler's Name</th>
                            <th>Feedback</th>
                            <th>Rating<th/>
                        </thead>
                        <tbody>
                            @foreach($feedback_deals as $feedback_deals)
                                <tr>
                                    <td></td>
                                    <td>
                                        @foreach($users as $user)
                                            @if ($user->id == $feedback_deals->user_id)
                                                {!!$user->name!!}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{$feedback_deals->fdeal_message}}</td>
                                    <td>
                                        @if (($feedback_deals->fdeal_rating >= 0.00) && ($feedback_deals->fdeal_rating <= 0.49))
                                        @endif
                                
                                        @if ($feedback_deals->fdeal_rating == 1)
                                            <i class="ti-star checked"></i>
                                        @endif
                                                                                
                                        @if ($feedback_deals->fdeal_rating == 2)
                                            <i class="ti-star checked"></i>
                                            <i class="ti-star checked"></i>
                                        @endif
                                
                                        @if ($feedback_deals->fdeal_rating == 3)
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        @endif
                                
                                        @if ($feedback_deals->fdeal_rating == 4)
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        @endif
                                
                                        @if ($feedback_deals->fdeal_rating== 5)
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