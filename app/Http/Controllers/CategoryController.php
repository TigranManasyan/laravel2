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
        $category -> created_at = NOW();
        $category -> updated_at = NOW();
        $category->save();
        return redirect() -> route('new_category')->with("success", "Category successfully inserted");
    }

    public function all_data() {
        $category = new Category();
        return view('categories.categories', ['categories' => $category ->all()]);
    }

    public function one_category($id) {
        $category = new Category();
        return view('categories.one_category', ['category' => $category -> find($id)]);
    }

    public function delete($id) {
        $category = new Category();
        $res = $category->find($id);
        $res -> delete();
        return redirect() -> route('all');
    }
}
