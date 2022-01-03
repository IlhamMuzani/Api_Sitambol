<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bengkel;
use Validator;
use Storage;

class BengkelController extends Controller
{

    public function TampilSemuaBengkel()
    {
        $bengkel = Bengkel::all();
        if($bengkel){
            return response()->json([
                'status' => TRUE,
                'msg' => 'Berhasil',
                'bengkel' => $bengkel
            ]);
        }else {
            return response()->json([
                'status' => FALSE,
                'msg' => 'Berhasil',
            ]);
        }
    }


    public function TampilBengkel($id)
    {
        $bengkel = Bengkel::where([
            ['kelurahan_id', $id],
            ])->get();
        if($bengkel){
            return response()->json([
                'status' => TRUE,
                'msg' => 'Berhasil',
                'bengkel' => $bengkel
            ]);
        }else {
            return response()->json([
                'status' => FALSE,
                'msg' => 'Berhasil',
            ]);
        }
    }
}
