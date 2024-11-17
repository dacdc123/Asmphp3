<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function max()
    {
        $category = DB::table('categories')
            ->get();
        $books = DB::table('books')
            ->orderBy('price', 'desc',)
            ->limit(3)
            ->get();
            // dd($category);

        // $booked = DB::table('books')
        //     ->orderBy('price', 'asc')
        //     ->limit(10)
        //     ->get();
        return view('client.index', compact('books', 'category'));
    }

}
