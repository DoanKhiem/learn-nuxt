<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data = Categories::orderBy('created_at', 'DESC')->paginate(30);
//        dd($data);
        return view('backend.category.index', compact('data'));
    }
    public function create(){

    }
    public function store(Request $request){

    }
    public function edit($id){

    }
    public function update(Request $request, $id){

    }
    public function delete($id){

    }
}
