<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;
use App\bank;

class ProductsController extends Controller
{
    public function index()
    {
    $pro = bank::all();
    return response()->json($pro ,200);
    
    }
    public function Stort( Request $request , bank $bank )
    {
  
    
    $bank->name = $request->name;
    $bank->save();
    return response($pro ,200);
   }
   public function conutryUpdate ( Request $request , bank $pro)
   {
    
    $pro->update($request);
    return response()->json($pro ,200);


   }
   public function conutryDelete ( Request $request ,bank $pro )
   {
    
    $pro->delete($request);
    return response()->json(null ,200);


   }

}
