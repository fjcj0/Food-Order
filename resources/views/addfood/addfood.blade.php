<x-add-food-content>
    <section>
        <form method="post" action="/addfood" class="container py-5" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://images.unsplash.com/photo-1484980972926-edee96e0960d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGZvb2R8ZW58MHx8MHx8fDA%3D"
                                    alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height:100%;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Add food</h3>
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <label class="form-label" for="name">Name</label>
                                                <input type="text" name="name" id="name" class="form-control form-control-lg" />
                                            </div>
                                            @error('name')
                                            <p class="text-danger mt-2">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <label class="form-label" for="price">Price</label>
                                                <input type="number" name="price" id="price" class="form-control form-control-lg" step="0.01" />
                                            </div>
                                            @error('price')
                                            <p class="text-danger mt-2">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <label class="form-label" for="quantity">Quantity</label>
                                                <input type="number" name="quantity" id="quantity" class="form-control form-control-lg" />
                                            </div>
                                            @error('quantity')
                                            <p class="text-danger mt-2">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <label class="form-label" for="description">Description</label>
                                                <textarea name="description" id="description" class="form-control form-control-lg"></textarea>
                                            </div>
                                            @error('description')
                                            <p class="text-danger mt-2">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex justify-content-center">
                                            <div data-mdb-ripple-init class="btn btn-primary btn-rounded">
                                                <label class="form-label text-white m-1">Choose food image</label>
                                                <input type="file" class="form-control" name="image" id="image"/>
                                            </div>
                                        </div>
                                        @error('image')
                                        <p class="text-danger mt-2">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <select data-mdb-select-init style="width: 100%; height:3rem; outline:blue; border: 1px solid black; border-radius:10px;" id="type" name="type">
                                            <option value="1">Type</option>
                                            <option value="2">Appetizers</option>
                                            <option value="3">Additions</option>
                                            <option value="4">Breakfasts</option>
                                            <option value="5">Drinks</option>
                                        </select>
                                    </div>
                                    @error('type')
                                    <p class="text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-end pt-3">
                                    <button type="reset" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg my-3" style="font-weight:bolder;">Reset all</button>
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg mx-3 my-3" style="font-weight:bolder;">Add food</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
</x-add-food-content>
