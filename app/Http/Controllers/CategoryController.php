<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function add(CategoryRequest $request) {
        $category = new Category();
        $category -> category_name = $request -> category_name;
        $category->save();
        return redirect() -> route('new_category')->with("success", "Category successfully inserted");
    }

}
