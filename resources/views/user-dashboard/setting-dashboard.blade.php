<x-dashboard-content>
    <div class="setting-dashboard container-fluid mt-3">
        <form action="/edituser" method="post">
            @csrf
            @method('patch')
            <h1>Profile Edit</h1>
            <div class="row g-2">
                <div class="col">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" aria-label="name">
                    @error('name')
                    <p class=" text-danger mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="col">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" aria-label="username">
                    @error('username')
                    <p class=" text-danger mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row g-3 mt-2">
                <div class="col">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" aria-label="email">
                    @error('email')
                    <p class=" text-danger mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="col">
                    <label for="username">Password</label>
                    <input type="password" name="password" id="password" class="form-control" aria-label="password">
                    @error('password')
                    <p class=" text-danger mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="text" name="password_confirmation" id="password_confirmation" class="form-control" aria-label="confirmationpassword">
                    @error('password_confirmation')
                    <p class=" text-danger mt-2">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-dark btn-md px-4 py-2 mt-2">Update</button>
        </form>
        <hr>
        <div class="interface-settings">
            <h1>Interface Settings</h1>
            <div class="row">
                <select name="language" id="language" class="form-select p-3 mx-2" style="width: 95%;">
                    <div class="col">
                        <option value="0">Choose language</option>
                        <option value="ar">Arabic</option>
                        <option value="en">English</option>
                    </div>
                </select>
            </div>
            <div class="row mt-2">
                <select name="mode" id="mode" class="form-select p-3 mx-2" style="width: 95%;">
                    <div class="col">
                        <option value="0">Choose mode</option>
                        <option value="dark">Dark mode</option>
                        <option value="light">Light mode</option>
                    </div>
                </select>
            </div>
            <button type="button" class="btn btn-dark btn-md px-4 py-2 mt-2">Save</button>
        </div>
    </div>
</x-dashboard-content>
