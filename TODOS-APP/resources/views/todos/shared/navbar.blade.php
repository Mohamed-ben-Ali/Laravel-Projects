<nav class="navbar navbar-expand-lg navbar-dark shadow-sm " style="background: #2A2A2C; color: #e9ece5;
 font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
    <a class="navbar-brand" href="#"><h1 style="color: #004bff;" id="lgoo"><span style="color: white">TO</span >DOS</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-5" id="navbarNav">
        <ul class="navbar-nav text-center">
            <li class="nav-item">
                <a class="nav-link" href="/todos"><h4>Todo Home </h4></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/new-todo"><h4>Create Todo</h4></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                       role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{--                        <a class="dropdown-item" href="/Profile"><h4>Profile</h4></a>--}}
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/Logout"><h6>LogOut</h6></a>
                    </div>
                </li>
            @else
                <li class="nav-item ">
                    <a class="nav-link" href="/Login">Login</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/Register">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
<!-- end navbar!-->
