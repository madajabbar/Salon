<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kasir;
use Illuminate\Http\Request;
use Whoops\Run;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use DOMAttr;
use Barryvdh\DomPDF\Facade\Pdf;

class HasilHarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $penjualan = Kasir::whereRaw('date(created_at) = curdate()')->orderBy('id', 'DESC')->get();
            return DataTables::of($penjualan)
               ->addColumn('action', function ($content) {
                   return '
                           <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pencil-square-o"></i></a>
                           <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $content->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                           ';
               })
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
         $data['title'] = "Grafik Penjualan";
         return view('backend.hasil_harian.index', compact('data'));
    }

    public function print(){
        $tanggal = Carbon::now()->format('Y-m-d');

        $data = Kasir::whereRaw('date(created_at) = curdate()')->get();
        // dd($data);
    	$pdf = PDF::loadView('backend.hasil_harian.pdf', ['data'=>$data]);
        // dd($pdf);
    	return $pdf->download('laporan-harian.pdf');
    }
}
