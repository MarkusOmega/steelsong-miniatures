<header>
    <nav class='container-fluid shadow-sm m-0'> 
        <div class="header-left">
            <a href="/" class="logo">
                <img src="{{url('/images/steelsong-logo.png')}}" alt="Steelsong miniatures logo">
            </a>
            <ul class="menu">
                <li class="menu-item">
                    <a class="menu-link" href="{{ route('product.frontendIndex') }}">Shop</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="">Lore</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="">News</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="">about us</a>
                </li>
            </ul>
        </div>
        <div class="header-right">
            <ul class="menu">
                <li class="menu-item">
                    <a class="menu-link" href="">Cart 0</a>
                </li>
                @if(Auth::user())
                    <li class="nav-item dropdown menu-item">
                        <a class="nav-link dropdown-toggle menu-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ AUTH::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <!-- <li><a class="dropdown-item" href="">Account</a></li> -->
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                 @else
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="">Register</a>
                    </li>                
                @endif
            </ul>
        </div>
    </nav>
</header>