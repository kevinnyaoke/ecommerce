<header class="section-header">
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="brand-wrap">
                        <img class="logo" src="frontend/images/logo-dark.png">
                        <h2 class="logo-text">LOGO</h2>
                    </div>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form action="#" class="search-wrap">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- search-wrap .end// -->
                </div>
                <!-- col.// -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widgets-wrap d-flex justify-content-end">
                        <div class="widget-header">
                            <a href="{{route ('cart')}}" class="icontext">
                                <div class="icon-wrap icon-xs bg2 round text-secondary"><i
                                        class="fa fa-shopping-cart"></i></div>
                                <div class="text-wrap">
                                    <small>Basket</small>
                                    <span>3 items</span>
                                </div>
                            </a>
                        </div>
                        <!-- widget .// -->
                        <div class="widget-header dropdown">
                            <a href="#" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10">
                                <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-user"></i></div>
                                <div class="text-wrap">
                                    <small>Hello.</small>
                                    <span> <i class="fa fa-caret-down"></i></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <form class="px-4 py-3" role="form" method="POST" action="">
                                    @csrf
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" placeholder="email@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div> -->
                                <!-- <button type="submit" class="btn btn-primary">Sign in</button>
                                        <a class="btn btn-primary" href="">Admin login</a>
                                    </form> -->
                                <hr class="dropdown-divider">

                                <a class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="fa fa-sign-out fa-lg"></i>
                                    Logout</a>
                                <a class="dropdown-item" href="{{route('userreg')}}">Have account? Sign up</a>
                                <a class="dropdown-item" href="#">Forgot password?</a>
                            </div>
                            <!--  dropdown-menu .// -->
                        </div>
                        <!-- widget  dropdown.// -->
                    </div>
                    <!-- widgets-wrap.// -->
                </div>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- container.// -->
    </section>
    <!-- header-main .// -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="{{route ('home')}}"> <strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('cart')}}">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('catalog')}}">Catalog list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('checkout')}}">Checkout</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Baby &amp Toys</a>
                        </li> -->
                    <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Fitness sport</a>
                        </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown07">
                            <a class="dropdown-item" href="{{route('fashion')}}">Fashions</a>
                            <a class="dropdown-item" href="{{route('supermkt')}}">Supermarkets</a>
                            <!-- <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="{{route('electronics')}}">Electronics</a>
                            <a class="dropdown-item" href="{{route('babytoys')}}">Baby &amp Toys</a>
                            <a class="dropdown-item" href="{{route('fitness')}}">Fitness sports</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- collapse .// -->
        </div>
        <!-- container .// -->
    </nav>

</header>