<x-content>

    <section class="d-flex align-items-center justify-content-center" style="width: 100%; min-height:100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card border border-light-subtle rounded-3 shadow-sm">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="text-center mb-3">
                                <a href="#" class="disabled">
                                    <img src="https://img.icons8.com/?size=100&id=64753&format=png&color=000000">
                                </a>
                            </div>
                            <h2 class="text-center text-dark fs-5 mb-3">Sign in to your account</h2>
                            <form action="/login" method="post">
                                @csrf
                                @method('post')
                                <div class="row gy-2 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                            <label for="username" class="form-label">username</label>
                                        </div>
                                        @error('username')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password">
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                        @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex gap-2 justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" name="rememberMe" id="rememberMe">
                                                <label class="form-check-label text-secondary" for="rememberMe">
                                                    Keep me logged in
                                                </label>
                                            </div>
                                            <a href="#" class="link-primary text-decoration-none">Forgot password?</a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid my-3">
                                            <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="m-0 text-secondary text-center">Don't have an account? <a href="/register" class="link-primary text-decoration-none">Sign up</a></p>
                                    </div>
                                    <div class="form-check d-flex justify-content-center mt-3">
                                        <button class="btn btn-sm border rounded">
                                            <img src="https://img.icons8.com/color/48/000000/google-logo.png" alt="Google Logo">
                                            <span class="font-monospace text-dark">Continue with Google</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-content>
