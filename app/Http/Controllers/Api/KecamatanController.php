<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kecamatan;
use Validator;
use Storage;


class KecamatanController extends Controller
{
    public function TampilKecamatan()
    {
        $kecamatan = Kecamatan::all();
        if($kecamatan){
            return response()->json([
                'status' => TRUE,
                'msg' => 'Berhasil',
                'kecamatan' => $kecamatan
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'msg' => 'Error',
                'kecamatan' => $kecamatan
            ]);
        }
    }
}
