<x-dashboard-content>
    <div class="container-order-dashboard mt-3">
        <div class="container-sm">
            @foreach ($orders as $order)
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
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div style="width: 50px;">
                                <h5 class="fw-normal mb-0">{{ $order->quantity }}</h5>
                            </div>
                            <div style="width: 80px;">
                                <h5 class="mb-0">${{ $order->price }}</h5>
                            </div>
                            <form action="/removeorder/{{$order->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-dashboard-content>
