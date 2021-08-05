<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
//        $products = DB::table('products')->get();
//        return $products;
        $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.name', 'categories.category_name')->orderBy('products.id')
            ->paginate(10);
        return view('products.products', compact('products'));

    }
}
