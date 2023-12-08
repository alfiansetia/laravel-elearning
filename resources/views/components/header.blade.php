<div class="shadow bg-body-tertiary bg-white sticky-top">

        <nav class="navbar navbar-expand-lg navbar-light">

            <div class="container">
                <a class="navbar-brand" href="#"><img src="logo.png" alt="Logo"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>

                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" style="color: #023C82" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item" href="/category/{{ $category->CategoryID }}">{{ $category->categoryName }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>

                    {{-- <form class="form-inline ml-auto mt-3 mb-3">
                        <div class="input-group">
                            <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-search" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>                 --}}
                
                    <ul class="navbar-nav d-flex">
                        @can('user')
                        {{-- @auth --}}
                            <li>
                                <a href="/cart" class="nav-link" aria-current="page">
                                    <p>My Library</p>
                                </a>
                            </li>
                        {{-- @endauth --}}
                        @endcan
        
                        <li class="nav-item dropdown">
                            {{-- User yang udah login --}}
                            @auth
                                <a class="nav-link dropdown-toggle pe-0 fw-bold" style="color: #023C82" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                            @endauth
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                @can('user')
                                    <li><a class="dropdown-item" href="/history">History</a></li>
                                @endcan
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="dropdown-item" type="submit" href="/logout">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
        
                        @guest
                            <li>
                                <a href="/login" class="nav-link fw-bold" aria-current="page">Login</a>
                            </li>
                            <li>
                                <a href="/register" class="nav-link pe-0 fw-bold" aria-current="page">Register</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


</div>
