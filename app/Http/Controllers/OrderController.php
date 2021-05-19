<?php

namespace App\Http\Controllers;

use App\Exceptions\Orders\CreatingOrderIsNotAvailableNowException;
use App\Http\Requests\Orders\StoreOrderRequest;
use App\Models\Order;
use App\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    private OrderService $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function create()
    {
        return view('orders.index');
    }

    /**
     * @throws \App\Exceptions\Orders\CreatingOrderIsNotAvailableNowException
     */
    public function store(StoreOrderRequest $request)
    {
        \Log::info('Calling store method in the controller');

        try {
            $this->orderService->create($request->validated());
        } catch(CreatingOrderIsNotAvailableNowException $e) {
            return redirect()->back()->with('warning', 'Can new create an order right now :(');
        }

        return redirect()->back()->with('success', 'Заказ успешно отправлен!');
    }
}
