<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Categories::orderBy('created_at', 'DESC')->paginate(30);
//        dd($data);
        return view('backend.category.index', compact('data'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $category = Categories::create($request->all());
        if ($category) {
            return redirect()->route('category.index')->with('success', "Thêm mới $request->name thành công");
        }
    }

    public function edit($id)
    {
//        dd('edit');
        if ($category = Categories::find($id)) {
            return view('backend.category.edit', compact('category'));
        }

    }

    public function update(Request $request, $id)
    {
//        dd($request->all());
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads/books'), $file_name);
            $request->merge(['image' => $file_name]);
        }
        if ($category = Categories::find($id)) {
            if ($category->update($request->all())) {
                return redirect()->route('category.index')->with('success', "Sửa thể loại $request->name thành công");
            } else {
                return 'lỗi';
            }
        } else {
            return 'lỗi';
        }
    }

    public function delete($id)
    {
        if ($category = Categories::find($id)) {
            $category->delete();
            return redirect()->route('category.index')->with('success', "Xóa thể loại $category->name thành công");
        } else {
            return view('category.index')->with('error', 'Không tìm thấy thể loại này');
        }
    }
}
