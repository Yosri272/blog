<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class fileController extends Controller
{
    public function countrylist()
    {
 
    return response()->download(public_path('img/avatar.png') ,'User Image');
    
    }
    public function savelist( Request $request )
    {
  
    $fileName= "user_image.jpg";
    $path = $request->file('photo')->move(public_path("/"), $fileName);
    $photoURL =url('/'.$fileName);
    return response()->json(['url'=>$photoURL] ,200);
   }

   
}
