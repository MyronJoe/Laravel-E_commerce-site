<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h2 style="font-size: 30px; font-family:'Trebuchet MS';"><span>Myron</span><span style="background: purple; color:white; padding:0 .2em; border-radius:4px; ">Stores</span></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="testimonial.html">Testimonial</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/product')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog_list.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('view_order') }}">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin_view') }}">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('view_cart') }}">
                            <span class="fa fa-shopping-cart"></span>
                            @if(Auth::id() != null)
                            <span class="badge badge-danger">0</span>
                            @endif
                        </a>
                    </li>
                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>

                    @if (Route::has('login'))

                    @auth
                    <li class="">
                        <x-app-layout>

                        </x-app-layout>
                    </li>
                    @else

                    <li class="nav-item">
                        <a class="btn btn-outline-primary mr-2 btn-sm" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-outline-warning btn-sm" href="{{ route('register') }}">Register</a>
                    </li>
                    @endauth

                    @endif
                </ul>
            </div>
        </nav>
    </div>
    @include('admin.successmsg')
</header>