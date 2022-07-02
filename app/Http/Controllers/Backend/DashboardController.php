<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Kasir;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['hari'] = Kasir::all()->unique('day');
        return view('backend.dashboard.index', $data);
    }
    public function bulanan(){
        $data = Kasir::whereMonth('created_at', '=', Carbon::now()->format('m'))->get()->unique('day');
        dd($data);
        // $tanggal = Kasir::all()->unique('day');
        return response()->json($data);
    }
}
