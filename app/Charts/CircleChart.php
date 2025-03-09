<?php
namespace App\Charts;
use App\Models\Order;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
class CircleChart extends Chart
{
    public function __construct()
    {
        parent::__construct();
        $this->type('doughnut');
        $orders = auth()->user()->orders;
        $completedOrders = $orders->where('status', 'success')->count();
        $pendingOrders = $orders->where('status', 'pending')->count();
        $cancelledOrders = $orders->where('status', 'cancel')->count();
        $this->labels(['Completed Orders', 'Pending Orders', 'Cancelled Orders']);
        $this->dataset('Orders Status', 'doughnut', [$completedOrders, $pendingOrders, $cancelledOrders])
            ->backgroundColor(['#42b883', '#ffc93c', '#FF7043']);
    }
}
