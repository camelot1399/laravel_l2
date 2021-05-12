<?php

namespace App\Http\Controllers;

use App\Http\Requests\Zakaz\StoreZakazRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ZakazController extends Controller
{
    public function create()
    {
        return view('zakaz.index');
    }

    public function store(StoreZakazRequest $request)
    {
        $html = '';
        $currentDate = date('l jS \of F Y h:i:s A');

        $html .= $currentDate . "\n";
        foreach($request->validated() as $item) {
            $html .= $item . "\n";
        }

        $path = 'zakaz/zakaz.' . strtotime("now") . '.txt';
        Storage::disk('public')->put($path, $html);

        return redirect()->route('zakaz.create')->with('success', 'Заказ успешно отправлен!');
    }
}
