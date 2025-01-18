<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        //gia cao nhat
        $book_highprices=DB::table('books')
            ->join('categories','books.category_id','=','categories.id')
            ->select('books.*','categories.name')
            ->orderBy('price','desc')
            ->take(8)
            ->get();
        //gia thap nhat
        $book_lowprices=DB::table('books')
            ->join('categories','books.category_id','=','categories.id')
            ->select('books.*','categories.name')
            ->orderBy('price','asc')
            ->take(8)
            ->get();

    return view('homes.index',compact(['book_highprices','book_lowprices']));
    }
    public function show($id)
    {
        $book=DB::table('books')
            ->join('categories','books.category_id','=','categories.id')
            ->select('books.*','categories.name')
            ->where('books.id',$id)
            ->first();
        return view('books.detail',compact('book'));
    }
}
