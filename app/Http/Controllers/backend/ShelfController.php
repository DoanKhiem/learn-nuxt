<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Shelfs;
use Illuminate\Http\Request;

class ShelfController extends Controller
{
    public function index(){
        $data = Shelfs::orderBy('created_at', 'DESC')->paginate(2);
//        dd($data);
        return view('backend.shelf.index', compact('data'));
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
