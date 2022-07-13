<?php

namespace App\Http\Controllers;

use App\Models\Hardware;

class HardwareController extends Controller
{
    public function index()
    {
        return Hardware::paginate(10);
    }

    public function show(Hardware $hardware)
    {
        return $hardware;
    }
}
