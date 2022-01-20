<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Departments;
use App\Models\Member_role;
use App\Models\Members;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $data = Members::orderBy('created_at', 'DESC')->get();
        return view('backend.member.index', compact('data'));
    }

    public function create()
    {
        $department = Departments::orderBy('name', 'ASC')->select('id', 'name')->get();
        $member_role = Member_role::orderBy('name', 'ASC')->select('id', 'name')->get();
        return view('backend.member.create', compact('department', 'member_role'));
    }

    public function store(Request $request)
    {

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads/members'), $file_name);
            $request->merge(['avatar' => $file_name]);
        }
        if ($member = Members::create($request->all())) {
            return redirect()->route('member.index')->with('success', "Thêm mới thành viên $request->name thành công");
        }
    }

    public function edit($id)
    {
        if ($member = Members::find($id)) {
            $department = Departments::all();
            $member_role = Member_role::all();
            return view('backend.member.edit', compact('member', 'department', 'member_role'));
        } else {
            return view('member.index')->with('error', 'Không tìm thấy thành viên này');
        }
    }

    public function update(Request $request, $id)
    {
        $member = Members::find($id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads/members'), $file_name);
            $request->merge(['avatar' => $file_name]);
        }
        if ($member->update($request->all())) {
            return redirect()->route('member.index')->with('success', "Sửa thông tin thành viên $request->name thành công");
        } else {
            return 'lỗi';
        }
    }

    public function delete($id)
    {
        if ($member = Members::find($id)) {
            $member->delete();
            return redirect()->route('member.index')->with('success', "Xóa thành viên $member->name thành công");
        } else {
            return view('member.index')->with('error', 'Không tìm thấy thành viên này');
        }

    }
}
