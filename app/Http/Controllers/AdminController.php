<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function books()
    {
        $books=book::all();
        if (Session::has('lang')=='ar'){
            $lang='ar';
        }else{$lang='en';}
    
        return view('admin.books',compact('books','lang'));
    }
    public function addbook()
    {
        return view('admin.addbook');
    }
    public function images($id)
    {
        $images=explode('|',book::find($id)->images);
        
        return view('admin.images',compact('images'));
    }


}
