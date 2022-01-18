<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $data = Departments::orderBy('created_at', 'DESC')->search()->paginate(30);
//        dd($data);
        return view('backend.department.index', compact('data'));
    }

    public function create()
    {
        return view('backend.department.create');
    }

    public function store(Request $request)
    {
        if ($department = Departments::create($request->all())) {
            return redirect()->route('department.index')->with('success', "Thêm mới ban $request->name thành công");
        }
    }

    public function edit($id)
    {
        if ($department = Departments::find($id)) {
            return view('backend.department.edit', compact('department'));
        }

    }

    public function update(Request $request, $id)
    {
//        dd($request->all());
        if ($department = Departments::find($id)) {
            if ($department->update($request->all())) {
                return redirect()->route('department.index')->with('success', "Sửa ban $request->name thành công");
            } else {
                return 'lỗi';
            }
        } else {
            return 'lỗi';
        }
    }

    public function delete($id)
    {
        if ($category = Departments::find($id)) {
            if ($category->delete()){
                return redirect()->route('category.index')->with('success', "Xóa ban $category->name thành công");
            }else{
                return 'lỗi';
            }
        } else {
            return view('category.index')->with('error', 'Không tìm thấy ban này');
        }
    }
}
