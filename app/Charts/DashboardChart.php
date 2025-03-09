<?

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Models\orders;
use Illuminate\Support\Facades\Auth;

class DashboardChart extends Chart
{
    public function __construct()
    {
        parent::__construct();

        // Create an array of the last 7 days
        $days = [];
        for ($i = 6; $i >= 0; $i--) {
            $days[] = now()->subDays($i)->format('l, M d');  // Format: "Monday, Mar 09"
        }

        // Get the current user's orders for the last 7 days
        $userId = Auth::id();
        $orders = orders::where('user_id', $userId)
            ->whereBetween('created_at', [now()->subDays(6), now()])
            ->get();

        // Initialize the order counts for the last 7 days
        $orderCounts = array_fill(0, 7, 0);

        // Loop through orders and count them by day
        foreach ($orders as $order) {
            $dayIndex = now()->diffInDays($order->created_at);  // Get the day index (0 = today, 1 = yesterday, ..., 6 = 6 days ago)
            if ($dayIndex <= 6) {
                $orderCounts[6 - $dayIndex]++;
            }
        }

        // Set the labels and dataset for the chart
        $this->labels($days);
        $this->dataset('Orders last 7 days', 'bar', $orderCounts)->backgroundColor('#42A5F5');
    }
}
