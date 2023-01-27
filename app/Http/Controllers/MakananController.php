<?php

namespace App\Http\Controllers;
use App\Models\Makanan;
use Illuminate\Support\Facades\Log;
class MakananController extends Controller
{
    public function index()
    {
        try{
            $makanan = Makanan::select('kode_menu','nama_menu','harga','nama_kategori')->get();
            return $this->responseOk($makanan, 200);
        }catch(\Throwable $th){
            Log::error($th->getMessage());
            return $this->responseError("Internal Server Error", 500);
        }
    }

}
