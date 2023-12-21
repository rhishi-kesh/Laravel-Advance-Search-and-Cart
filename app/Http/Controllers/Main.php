<?php

namespace App\Http\Controllers;

use App\Models\Prodects;
use Illuminate\Http\Request;

class Main extends Controller
{
    function search(){
        $products = Prodects::take(5)->get();

        $data = [];

        foreach($products as $item){
            $data[] = $item['name'];
        }

        return $data;
    }
    function search_product(Request $request){
        $search_product = $request->Search;
        if($search_product != ""){
            $product = Prodects::where('name', 'LIKE', "%$search_product%")->first();
            if($product){
                return redirect('s/'.$product->name);
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }
}
