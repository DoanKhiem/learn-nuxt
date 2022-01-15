<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Categories;
use App\Models\Shelfs;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Books::orderBy('created_at', 'DESC')->paginate(50);
        return view('backend.book.index', compact('data'));
    }

    public function create()
    {
        $category = Categories::orderBy('name', 'ASC')->select('id', 'name')->get();
        $shelf = Shelfs::orderBy('name', 'ASC')->select('id', 'name')->get();
        return view('backend.book.create', compact('category', 'shelf'));
    }

    public function store(Request $request)
    {

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads/books'), $file_name);
            $request->merge(['image' => $file_name]);
        }
//        dd($request->all());
        $book = Books::create($request->all());
        if ($book) {
            return redirect()->route('book.index')->with('success', 'Thêm mới thành công');
        }
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {

    }
}
