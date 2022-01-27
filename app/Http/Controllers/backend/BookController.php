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
        $data = Books::orderBy('created_at', 'DESC')->get();
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
            return redirect()->route('admin.book.index')->with('success', 'Thêm mới thành công');
        }
    }

    public function edit($id)
    {
        if ($book = Books::find($id)) {
            $category = Categories::all();
            $shelf = Shelfs::all();
            return view('backend.book.edit', compact('book', 'category', 'shelf'));
        } else {
            return view('book.index')->with('error', 'Không tìm thấy sách này');
        }
    }

    public function update(Request $request, $id)
    {
        $book = Books::find($id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads/books'), $file_name);
            $request->merge(['image' => $file_name]);
        }
        if ($book->update($request->all())) {
            return redirect()->route('admin.book.index')->with('success', "Sửa sách $request->name thành công");
        } else {
            return 'lỗi';
        }
    }

    public function delete($id)
    {
        if ($book = Books::find($id)) {
            $book->delete();
            return redirect()->route('admin.book.index')->with('success', "Xóa sách $book->name thành công");
        } else {
            return view('book.index')->with('error', 'Không tìm thấy sách này');
        }

    }
}
