<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Support\Facades\Artisan;

class CurrencyController extends Controller
{

    public function index()
    {
        $currency = new Currency();
        return $currency->all();
    }

    public function show($id)
    {
        $currency = new Currency();
        $result = $currency->find($id);
        if (!$result) {
            return abort(404);
        }
        return $result;
    }

    public function update()
    {
        echo '<pre>';
        Artisan::call('currency:update');
        echo '</pre>';
        echo '<a href="' . route('home') . '">Go Back</a>';
    }
}
