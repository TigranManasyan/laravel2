<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index() {

    }
    public function store(ImageRequest $request) {
        $image_name = time() . "." . $request->image->extension();//poxum enq nkari anun@
        $request->image->move(public_path('images'), $image_name);
        return $request->image . " " . $image_name;
    }
}
