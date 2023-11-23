<?php




namespace App\Services;
use Illuminate\Support\ServiceProvider;
use App\Services\DepartureTime;
use App\Models\{Order,OrderItem};

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Carbon\CarbonImmutable;


class OrderPdf extends ServiceProvider
{

    public static function pdfOrder($orderId)
    {
        // $path = public_path('logo/logo.png');
        // $type = pathinfo($path, PATHINFO_EXTENSION);
        // $data_img = file_get_contents($path);
        // $logo = 'data:image/' . $type . ';base64,' . base64_encode($data_img);

        $order = Order::findOrFail($orderId);

        $pdf = Pdf::loadView('pdf.order', [
            // 'logo' => $logo,
            'order' => $order,
        ]);
        return $pdf;
    }


    public static function pdfInvoice($orderId)
    {
        // $path = public_path('logo/logo.png');
        // $type = pathinfo($path, PATHINFO_EXTENSION);
        // $data_img = file_get_contents($path);
        // $logo = 'data:image/' . $type . ';base64,' . base64_encode($data_img);

        $order = Order::findOrFail($orderId);

        $order->per_one = ($order->total_price / 110) * 100;

        $order->dph = $order->total_price - $order->per_one;

        $productPerOne = 0;
        foreach ($order->items as $item) {
            $productPerOne = ($item->product_marged_price / 121) * 100;
            $productDph = $item->product_marged_price - $productPerOne;
            $item->perOne = $productPerOne;
            $item->dph = $productDph;
        }

        $totalPreDph =  ($order->total_price / 121) * 100;
        $totalDph = $order->total_price - $totalPreDph;


        $pdf = Pdf::loadView('pdf.invoice', [
            // 'logo' => $logo,
            'order' => $order,
            'totalDph' => $totalDph,
            'totalPreDph' => $totalPreDph,
        ]);
        return $pdf;
    }
}
