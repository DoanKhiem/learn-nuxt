<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Shelfs;
use Illuminate\Http\Request;

class ShelfController extends Controller
{
    public function index()
    {
        $data = Shelfs::orderBy('name', 'ASC')->get();
//        dd($data);
        return view('backend.shelf.index', compact('data'));
    }

    public function create()
    {
        return view('backend.shelf.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        if ($shelf = Shelfs::create($request->all())) {
            return redirect()->route('admin.shelf.index')->with('success', "Thêm mới kệ $request->name thành công");
        }
    }

    public function edit($id)
    {
        if ($shelf = Shelfs::find($id)) {
            return view('backend.shelf.edit', compact('shelf'));
        }

    }

    public function update(Request $request, $id)
    {
//        dd($request->all());
        if ($shelf = Shelfs::find($id)) {
            if ($shelf->update($request->all())) {
                return redirect()->route('admin.shelf.index')->with('success', "Sửa kệ sách $request->name thành công");
            } else {
                return 'lỗi';
            }
        } else {
            return 'lỗi';
        }
    }

    public function delete($id)
    {
        if ($shelf = Shelfs::find($id)) {
            if ($shelf->delete()) {
                return redirect()->route('admin.shelf.index')->with('success', "Xóa kệ sách $shelf->name thành công");
            } else {
                'lỗi';
            }
        } else {
            return view('shelf.index')->with('error', 'Không tìm thấy thể loại này');
        }
    }
}
