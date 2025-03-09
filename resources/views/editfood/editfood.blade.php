<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Josefin Sans", sans-serif;
        }

        body {
            min-height: 100vh;
        }

        .form-edit {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="container-sm">
            @foreach($items as $item)
            <form action="/deletefood/{{$item->id}}" method="post" class="card mb-3 bg-dark text-white my-3" enctype="multipart/form-data">
                @csrf
                @method('delete')
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div style="width: 10rem; height: 10rem;" class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" style="object-fit:cover; width:100%;">
                            </div>
                            <div class="ms-3">
                                <h5>{{$item->name}}</h5>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div style="width: 50px;">
                                <h5 class="fw-normal mb-0">
                                    <h5>{{$item->quantity}}</h5>
                                </h5>
                            </div>
                            <div style="width: 80px;">
                                <h5 class="mb-0">
                                    <h5>${{$item->price}}</h5>
                                </h5>
                            </div>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-success mx-2">Edit</button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="/editfood/{{$item->id}}" class="form-edit" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example1">Name</label>
                            <input type="text" id="form3Example1" class="form-control" name="name" />
                            @error('name')
                            <p class="text-danger mt-2">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example2">Price</label>
                            <input type="number" id="form3Example2" class="form-control" name="price" step="0.01" />
                            @error('price')
                            <p class="text-danger mt-2">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Quantity</label>
                    <input type="number" id="form3Example3" class="form-control" name="quantity" />
                    @error('quantity')
                    <p class="text-danger mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-outline mb-4 d-flex flex-column">
                    <label class="form-label" for="form3Example3">Description</label>
                    <textarea name="description" class="form-control" id="form3Example3"></textarea>
                    @error('description')
                    <p class="text-danger mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-outline mb-4">
                    <div class="d-flex justify-content-start">
                        <div class="btn btn-primary btn-rounded">
                            <label class="form-label text-white m-1">Choose food image</label>
                            <input type="file" class="form-control" name="image" id="image" />
                            @error('image')
                            <p class="text-danger mt-2">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-outline-danger btn-block py-2 px-4 cancel-button" style="font-size:20px;">Cancel</button>
                    <button type="submit" class="btn btn-success btn-block py-2 px-4" style="font-size:20px;">Edit</button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.btn-success.mx-2');
            const cancelButtons = document.querySelectorAll('.cancel-button');
            const formEdits = document.querySelectorAll('.form-edit');
            editButtons.forEach((editButton, index) => {
                editButton.addEventListener('click', function() {
                    formEdits.forEach((form, formIndex) => {
                        form.style.display = formIndex === index ? 'block' : 'none';
                    });
                });
            });
            cancelButtons.forEach((cancelButton, index) => {
                cancelButton.addEventListener('click', function() {
                    formEdits[index].style.display = 'none';
                });
            });
        });
    </script>
</body>

</html>
