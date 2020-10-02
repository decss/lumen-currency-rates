<?php

namespace App\Http\Controllers;

class CurrencyController extends Controller
{
    // http://www.cbr.ru/scripts/XML_daily.asp?date_req=02/10/2020

    public function index()
    {
        dd(__METHOD__);
    }

    public function show($id)
    {
        dd(__METHOD__, $id);
    }
}
