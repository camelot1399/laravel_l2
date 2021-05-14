<?php

namespace App\Http\Controllers;

use App\Http\Requests\Orders\StoreOrderRequest;
use App\Models\Order;
use App\Models\Zakaz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function create()
    {
        return view('orders.index');
    }

    public function store(StoreOrderRequest $request)
    {
        $html = '';
        $currentDate = date('l jS \of F Y h:i:s A');

        $html .= $currentDate . "\n";
        foreach($request->validated() as $item) {
            $html .= $item . "\n";
        }

        $path = 'order/order.' . strtotime("now") . '.txt';
        Storage::disk('public')->put($path, $html);


        // записываем в бд: zakaz

//        $data = ['name' => $request->name];

//        $results = DB::insert('INSERT INTO order (name) values (:name)', $data);

        $data = [
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'description' => $request->get('description'),
        ];

        Order::create($data);

        return redirect()->route('order.create')->with('success', 'Заказ успешно отправлен!');
    }
}
