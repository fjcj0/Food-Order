<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
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
    </style>
</head>
<body>
    <div class="container-order-dashboard mt-3">
        <div class="container-sm">
            @foreach ($userorders as $order)
            <div class="card mb-3 bg-dark text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div>
                                <img
                                    src="{{ asset('storage/' . $order->image) }}"
                                    class="img-fluid" alt="{{ $order->name }}" style="width: 65px;">
                            </div>
                            <div class="ms-3">
                                <h5>{{ $order->name }}</h5>
                                <small>Ordered by: {{ $order->user->name }}</small><br>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div style="width: 50px;">
                                <h5 class="fw-normal mb-0">{{ $order->quantity }}</h5>
                            </div>
                            <div style="width: 80px;">
                                <h5 class="mb-0">${{ $order->price }}</h5>
                            </div>
                            <form action="Cancel/{{$order->id}}" method="post" class="mx-2">
                                @csrf
                                @method('post')
                                <button type="submit" class="btn btn-outline-danger">Cancel</button>
                            </form>
                            <form action="AcceptOrder/{{$order->id}}" method="post">
                                @csrf
                                @method('post')
                                <button type="submit" class="btn btn-success">Accept</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $userorders->links() }}
        </div>
    </div>
</body>
</html>
