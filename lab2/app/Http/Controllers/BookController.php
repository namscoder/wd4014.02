<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = DB::table('categories')->get();
        $query= DB::table('books')
            ->join('categories','books.category_id','=','categories.id')
            ->select('books.*','categories.name')
            ->orderBy('books.id','asc');

        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('books.category_id', $request->category_id);
        }
        $books = $query->paginate(10);

        return view('books.index',compact(['books','categories']));
    }

    public function filter(Request $request)
    {
        $query = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'categories.name');
        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('books.category_id', $request->category_id);
        }
        $filterbooks = $query->paginate(10);
        return view('books.index', compact('filterbooks'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book=DB::table('books')
            ->join('categories','books.category_id','=','categories.id')
            ->select('books.*','categories.name')
            ->where('books.id',$id)
            ->first();
        return view('books.detail',compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
