<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelurahan;
use Validator;
use Storage;

class KelurahanController extends Controller
{
    public function TampilKelurahan($id)
    {
        $kelurahan = Kelurahan::where([
            ['kecamatan_id', $id],
            ])->get();
        if($kelurahan){
            return response()->json([
                'status' => TRUE,
                'msg' => 'Berhasil',
                'kelurahan' => $kelurahan
            ]);
        }else {
            return response()->json([
                'status' => FALSE,
                'msg' => 'Berhasil',
            ]);
        }
    }
}
