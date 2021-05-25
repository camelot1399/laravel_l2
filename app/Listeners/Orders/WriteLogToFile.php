<?php

namespace App\Listeners\Orders;

use App\Events\Orders\OrderCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;

class WriteLogToFile
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(OrderCreated $orderCreated)
    {
        \Log::info('Write log to file for order #');

        $html = '';
        $currentDate = date('l jS \of F Y h:i:s A');

        $html .= $currentDate . "\n";
        $items = $orderCreated->order->getAttributes();
        foreach($items as $item) {
            $html .= $item . "\n";
        }

        $path = 'order/order.' . strtotime("now") . '.txt';
        Storage::disk('public')->put($path, $html);


    }
}
