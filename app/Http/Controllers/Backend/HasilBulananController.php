<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Kasir;
use Illuminate\Http\Request;
use Whoops\Run;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use DOMAttr;
use Barryvdh\DomPDF\Facade\Pdf;

class HasilBulananController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $penjualan = Kasir::whereMonth('created_at', '=', Carbon::now()->format('m'))->orderBy('id', 'DESC')->get();
            return DataTables::of($penjualan)
               ->addColumn('pegawai',function ($data){
                    return $data->pegawai->name;
               })
               ->addColumn('total',function ($data){
                    $harga = $data->harga;
                    $diskon = $data->diskon;

                    return $harga+$diskon;
               })
               ->addColumn('tanggal',function ($data){
                    $tanggal = Carbon::parse($data->created_at)->format('j, F, Y');
                    return $tanggal;
               })
               ->removeColumn('id')
               ->addIndexColumn()
               ->rawColumns(['action'])
               ->make(true);
         }
         $data['title'] = "Grafik Penjualan Bulan".Carbon::now()->format(' F');
         return view('backend.hasil-bulanan.index', compact('data'));
    }

    public function print(){
        $tanggal = Carbon::now()->format('Y-m-d');

        $data = Kasir::whereRaw('date(created_at) = curdate()')->get();
        // dd($data);
    	$pdf = PDF::loadView('backend.hasil-bulanan.pdf', ['data'=>$data]);
        // dd($pdf);
    	return $pdf->download('laporan-bulanan.pdf');
    }
}
