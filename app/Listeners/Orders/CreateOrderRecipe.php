<?php

namespace App\Listeners\Orders;

use App\Events\Orders\OrderCreated;
use App\Services\OrderService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateOrderRecipe
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
        \Log::info('Creating recipe for order #' );
    }
}
