<header class="p-3 bg-dark text-white header" style="position: fixed; z-index:999; width:100%; top:0;">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>
            @guest
            <div class="text-end">
                <a href="/login" class="btn btn-outline-light me-2">Login</a>
                <a href="/register" class="btn btn-warning">Sign-up</a>
            </div>
            @endguest
            @auth
            <div class="text-end">
                <form action="/logout" method="post">
                    @csrf
                    @method('post')
                    <button type="submit" class="btn btn-warning">Logout</button>
                </form>
            </div>
            <div class="dropdown mx-1">
                <button
                    class="btn dropdown-toggle d-flex align-items-center hidden-arrow"
                    type="button"
                    id="navbarDropdownMenuAvatar"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img
                        src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                        class="rounded-circle"
                        height="25"
                        alt="User Avatar"
                        loading="lazy" />
                </button>
                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuAvatar">
                    <li><a class="dropdown-item" href="/dashboard/home">My Dashboard</a></li>
                    <li><a class="dropdown-item" href="/dashboard/setting">Settings</a></li>
                    <li>
                        <form action="/logout" method="post" style="display: inline;">
                            @csrf
                            @method('post')
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
        </div>
        <div class="buttons-control" id="buttons-control" style="width:100%;">
            <button class="button-toggle d-block btn btn-warning mt-3 mx-3" id="button-toggle">
                <i class="fa-solid fa-up-long"></i>
            </button>
            <button class="button-slider-nav d-block btn btn-warning mt-3 mx-3" id="button-slider-nav">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</header>
