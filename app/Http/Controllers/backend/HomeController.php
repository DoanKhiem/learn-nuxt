<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Categories;
use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index(){
//        dd(Auth::user());
        $count_member = Members::all()->count();
        $count_book = Books::all()->count();
        $count_category = Categories::all()->count();
//        dd($member);
        return view('backend.dashboard',
            compact('count_member',
            'count_book',
            'count_category'
            ));
    }

}
