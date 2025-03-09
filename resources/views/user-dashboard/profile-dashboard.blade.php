<x-dashboard-content>
    <div class="container-dashboard-profile d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="information-user" style="width: 100%;">
            <h1 class="text-center">Profile Information</h1>
            <ul class="list-group text-white">
                <li class="list-group-item list-group-item-dark  list-group-item-action d-flex align-items-center justify-content-between">
                    Name: <span class=" badge bg-warning px-5 py-3">
                        @auth
                        {{$user->name}}
                        @endauth
                        @guest
                            N/A
                        @endguest
                    </span>
                </li>
                <li class="list-group-item list-group-item-dark list-group-item-action d-flex align-items-center justify-content-between">
                    Email: <span class=" badge bg-warning px-5 py-3">
                        @auth
                        {{$user->email}}
                        @endauth
                        @guest
                            N/A
                        @endguest
                    </span>
                </li>
                <li class="list-group-item list-group-item-dark  list-group-item-action d-flex align-items-center justify-content-between">
                    UserName: <span class=" badge bg-warning px-5 py-3">
                        @auth
                        {{$user->username}}
                        @endauth
                        @guest
                            N/A
                        @endguest
                    </span>
                </li>
                <li class="list-group-item list-group-item-dark  list-group-item-action d-flex align-items-center justify-content-between">
                    Password: <span class=" badge bg-warning px-5 py-3">
                        @auth
                        {{$password_placeholder}}
                        @endauth
                        @guest
                            N/A
                        @endguest
                    </span>
                </li>
            </ul>
        </div>
    </div>
</x-dashboard-content>
