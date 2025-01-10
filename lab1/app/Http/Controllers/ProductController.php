<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Áo thun', 'image'=>'https://images.pexels.com/photos/1212487/pexels-photo-1212487.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'price' => 200000],
            ['id' => 2, 'name' => 'Quần jeans','image' => 'https://images.pexels.com/photos/1784578/pexels-photo-1784578.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'price' => 400000],
            ['id' => 3, 'name' => 'Giày thể thao','image' => 'https://images.pexels.com/photos/3849167/pexels-photo-3849167.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'price' => 600000],
        ];

        return view('products.index',compact('products'));
    }
}
