<?php

namespace App\Http\Controllers;
use App\Models\Minuman;
use Illuminate\Support\Facades\Log;
class MinumanController extends Controller
{
    public function index()
    {
        try{
            $minuman = Minuman::select('kode_menu','nama_menu','harga','nama_kategori')->get();
            return $this->responseOk($minuman, 200);
        }catch(\Throwable $th){
            Log::error($th->getMessage());
            return $this->responseError("Internal Server Error", 500);
        }
    }
}
