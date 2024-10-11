<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin')}}">ADMIN AREA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">

                <a class="nav-link {{(\Route::current()->getName() == 'products.index') ? 'active' : '' }}" aria-current="page" href="{{ route('products.index') }}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{(\Route::current()->getName() == 'categories.index') ? 'active' : '' }}" href="{{ route('categories.index') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{(\Route::current()->getName() == 'Content.index') ? 'active' : '' }}" href="{{ route('Contents.index') }}">Content</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{(\Route::current()->getName() == 'settings.index') ? 'active' : '' }}" href="">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{(\Route::current()->getName() == 'users.index') ? 'active' : '' }}" href="">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{(\Route::current()->getName() == 'orders.index') ? 'active' : '' }}" href="">Orders</a>
            </li>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        </div>
    </div>
</nav>
