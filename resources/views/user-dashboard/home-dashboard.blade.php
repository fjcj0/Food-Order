<x-dashboard-content>
    <div class="container-home-dashboard">
        <div class="cards-info-home-dashboard mt-3 container-sm">
            <div class="container">
                <div class="row g-3">
                    <div class="col-lg-6">
                        <div class="card-home-dashboard d-flex justify-content-between align-items-center border bg-dark text-white" style="height: 9rem; border-radius:5px;">
                            <div class="icon-card-home mx-3" id="icon-card-home">
                                <i class="fa fa-list-alt rounded-circle bg-white text-dark p-3" aria-hidden="true" style="font-size:2rem;"></i>
                            </div>
                            <div class="texts-card-home d-flex flex-column mx-3">
                                <h3>Total Orders</h3>
                                <p>{{$totalorder}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-home-dashboard d-flex justify-content-between align-items-center border bg-dark text-white" style="height: 9rem; border-radius:5px;">
                            <div class="icon-card-home mx-3" id="icon-card-home">
                                <i class="fa fa-credit-card-alt rounded-circle bg-white text-dark p-3" aria-hidden="true" style="font-size:2rem;"></i>
                            </div>
                            <div class="texts-card-home d-flex flex-column mx-3">
                                <h3>Total Money Lossed</h3>
                                <p>${{$sumprice}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-lg-6">
                        <div class="card-home-dashboard d-flex justify-content-between align-items-center border bg-dark text-white" style="height: 9rem; border-radius:5px;">
                            <div class="icon-card-home mx-3" id="icon-card-home">
                                <i class="fa fa-tasks rounded-circle bg-white text-dark p-3" aria-hidden="true" style="font-size:2rem;"></i>
                            </div>
                            <div class="texts-card-home d-flex flex-column mx-3">
                                <h3>Orders Done</h3>
                                <p>{{$PercentOrderDone}}%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-home-dashboard d-flex justify-content-between align-items-center border bg-dark text-white" style="height: 9rem; border-radius:5px;">
                            <div class="icon-card-home mx-3" id="icon-card-home">
                                <i class="fa fa-heart rounded-circle bg-white text-dark p-3" aria-hidden="true" style="font-size:2rem;"></i>
                            </div>
                            <div class="texts-card-home d-flex flex-column mx-3">
                                <h3>Products Favirote</h3>
                                <p>3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="charts mt-5 d-flex flex-wrap justify-content-center align-items-center" style="width:100%;" id="charts">
        <div class="chart mx-3"  id="chart">
            <h3 class="text-center mb-4">Statistics</h3>
            <div style="width:100%;">
                {!! $chart->container() !!}
            </div>
        </div>
        <div class="chart mx-3" id="circle-chart">
            <h3 class="text-center mb-4">Orders Status</h3>
            <div style="width:100%;">
                {!! $circleChart->container() !!}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {!! $chart->script() !!}
    {!! $circleChart->script() !!}
    </div>
    <div class="table mt-5" id="table">
        <h1 class="text-center">Orders Proccess</h1>
        <table class="table table-dark table-hover table-bordered text-center mx-auto" style="width:97%;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$order->name}}</td>
                    <td>${{$order->price}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>
                        @if($order->status == "pending")
                            <span class="spinner-border text-warning"></span>
                        @elseif($order->status == "success")
                            <span class="spinner-grow text-success"></span>
                        @elseif($order->status == "cancel")
                            <span class="spinner-grow text-danger"></span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination-container d-flex justify-content-center mt-4">
            {{ $orders->links('pagination::bootstrap-4') }}
        </div>
    </div>
</x-dashboard-content>
