<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-dark bg-gradient" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{route('/')}}">GRUD Posts</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">Sample Post</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('contact')}}">Contact</a></li>

                @if(Auth::user())
                <li class="nav-item "><a class="nav-link px-lg-2 py-2 m-3 btn bg-primary" href="{{route('create')}}"><i class="fa fa-plus" aria-hidden="true"></i> New Post</a></li>
                <li class="nav-item ">
                    <div class="dropdown">
                        <button class=" btn-secondary nav-link px-lg-2 py-2 m-3 btn "  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user"></i> My Account
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{route('users.account')}}">My Profile</a></li>
                        @if(Auth::user()->isAdmin())
                        <li><a class="dropdown-item" href="{{route('managePosts')}}">Manage All Posts</a></li>
                        @else
                            <li><a class="dropdown-item" href="{{route('my-posts')}}">My Posts</a></li>
                        @endif   
                            <li><a class="dropdown-item" href="{{ route('users.logout') }}"><i class="fa fa-lock"></i> Logout</a></li>
                           
                        </ul>
                    </div>
                </li>
                @else
                <li class="nav-item "><a class="nav-link px-lg-2 py-2 m-3 btn btn-secondary" href="{{route('users.login')}}"><i class="fa fa-lock"></i> Login</a></li>
                <li class="nav-item "><a class="nav-link px-lg-2 py-2 m-3 btn btn-secondary" href="{{route('users.register')}}"><i class="fa fa-registered"></i> Register</a></li>
                @endif
                
            </ul>
        </div>
    </div>
</nav>