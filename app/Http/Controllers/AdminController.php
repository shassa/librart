<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\Order;
use App\Models\User;
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

    public function users()
    {
        $users=User::all();
        return view('admin.users',compact('users'));
    }
    public function images($id)
    {
        $images=explode('|',book::find($id)->images);
        
        return view('admin.images',compact('images'));
    }

    public function orders()
    {
        $orders=Order::all();

        return view('admin.orders',compact('orders'));
    }
    public function tags()
    {
        $tags=book::with('tags')->get();
    //    print_r($tags);
       $lang='en';
        return view('admin.tags',compact('tags','lang'));
    }

    public function accept_order($id)
    {
        Order::find($id)->update(['accept'=>1]);
        $orders=Order::all();

        return view('admin.orders',compact('orders'))->with('successMsg','You accept the order');
    }

    public function refuse_order($id)
    {
        Order::find($id)->update(['accept'=>0]);
        $orders=Order::all();

        return view('admin.orders',compact('orders'))->with('successMsg','You refuse the order');
    }
}
