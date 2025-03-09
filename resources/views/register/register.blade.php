<x-content>
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11 my-5">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                    <form action="/register" method="post" class="form-sign-in">
                                        @csrf
                                        @method('post')
                                        <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa-regular fa-id-badge me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                                <input type="text" name="name" id="name" class="form-control" />
                                            </div>
                                        </div>
                                        @error('name')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example1c">Your Username</label>
                                                <input type="text" name="username" id="username" class="form-control" />
                                            </div>
                                        </div>
                                        @error('username')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                                <input type="email" name="email" id="email" class="form-control" />
                                            </div>
                                        </div>
                                        @error('email')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4c">Password</label>
                                                <input type="password" name="password" id="password" class="form-control" />
                                            </div>
                                        </div>
                                        @error('password')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" name="term" id="term" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#">Terms of service</a>
                                            </label>
                                            @error('term')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg" style="font-weight: bolder;">Register</button>
                                        </div>
                                        <div class="form-check d-flex justify-content-center">
                                            <button class="btn btn-sm border rounded">
                                                <img src="https://img.icons8.com/color/48/000000/google-logo.png" alt="Google Logo">
                                                <span class="font-monospace text-dark">Continue with Google</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 d-none">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-content>
