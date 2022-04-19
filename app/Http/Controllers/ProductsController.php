<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProductsController extends Controller
{
    public function products(){
        return view('products');
    }
    
    public function productsSetPrice(){
        return view('products_set_price');
    }

    public function productsSetDescription(){
        return view('products_set_description');
    }
    
    public function productsSetPicture(){
        return view('products_set_picture');
    }

    public function productsAdmin(){
        return view('products_admin');
    }

    public function productsResults(){
        return view('products_results');
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
