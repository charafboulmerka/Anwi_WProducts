<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function products(){
        return view('products');
    }

    public function productsAdmin(){
        return view('products_admin');
    }

    public function find(Request $query){
        $keyword = $query->keyword;
        $category = $query->category;
        if($category=="All Categories"){
            $data2 = Products::query()->where([['title', 'LIKE', '%' . $keyword . '%']])->get();
        }else{
            $data2 = Products::query()->where([['title', 'LIKE', '%' . $keyword . '%'],
            ['category',$category]])->get();
        }
        

         return $data2;
         //return $data2->title;
     }

    public function product($id){
        $data = Products::where('id',$id)->get()->first();
        return view('product',['data'=>$data]);
    }
}
