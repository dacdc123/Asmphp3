<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function detail($id)
    {
        $book = DB::table('books')->find($id);
        if ($book == null) {
            return redirect(404);
        }
        $category = DB::table('categories')
            ->get();
        return view('client.detail', compact('book', 'category'));
    }

    // hiển thị theo danh mục 
    public function list($id)
    {
        $books = DB::table('books')
            ->join('categories', 'books.category_id', 'categories.id')
            ->select('books.*', 'title')
            ->where('category_id', $id)
            ->latest('id')
            ->paginate(4);
        $category = DB::table('categories')
            ->get();
        return view('client.index', compact('books', 'category'));
    }
}
