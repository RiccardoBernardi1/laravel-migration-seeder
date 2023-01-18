<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;

class PageController extends Controller
{
    public function index() {
        $trains=Train::where('departure_time','>=',now())->get();
        return view('homepage',compact('trains'));
    }
}
