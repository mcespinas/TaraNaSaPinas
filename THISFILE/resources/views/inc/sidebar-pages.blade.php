<div class="sidebar" data-background-color="white" data-active-color="info">
    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->
    
    <div class="sidebar-wrapper">  
        <ul class="nav">
            @guest
                <li>
                    <a href="{{ route('login') }}">
                        <p>Sign In</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}">
                        <p>Sign Up</p>
                    </a>
                </li>
            @else
                <li>
                    <a>
                        <p>Hello, {{ Auth::user()->name }}.</p>
                        <p>You are logged in as <br />{{ Auth::user()->user_type }}.</p>
                    </a>
                </li>
                
                @if (Auth::user()->user_type == 'Travel Agency')
                    <li>
                        <a href="/home">
                            <i class="ti-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-id-badge"></i>
                            <p>Company Profile</p>
                        </a>
                        <ul class="dropdown-menu">
                                <li>
                                    <a href="/agencies/{{ Auth::user()->id }}">View Profile</a>
                                </li>
                                <li>
                                    <a href="/agencies/create">Create Profile</a>
                                </li>
                            <!--
                            <li>
                                <a href="/taranasapinas/public/agencies/{{ Auth::user()->id }}/edit">Update Profile</a>
                            </li>
                            -->
                        </ul>
                    </li>

                    <!-- Messaging System -->
                    <li class="dropdown">
                        <a href="/messages" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-comments"></i>
                            <p>Messages</p>
                        </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/messages">Inbox</a>
                                </li>
                                <li>
                                    <a href="/messages/create">Create a message</a>
                                </li>
                            </ul>
                        </li>                    


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-location-pin"></i>
                            <p>Deals</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/deals">View Deals</a>
                            </li>
                            <li>
                                <a href="/deals/create">Post Deals</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="/bookings">
                            <i class="ti-ticket"></i>
                            <p>Bookings</p>
                        </a>
                    </li>

                    <li>
                        <a href="/feedbacks">
                            <i class="ti-comment-alt"></i>
                            <p>Feedbacks</p>
                        </a>
                    </li>
                    
                    <li>
                        <a href="/inquiries">
                            <i class="ti-comments"></i>
                            <p>Inquiries</p>
                        </a>
                    </li>
                @endif
            @endguest
        </ul>
    </div>
</div>