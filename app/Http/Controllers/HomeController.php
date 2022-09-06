<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use http\Exception\BadUrlException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public  function index()
    {

            if(Auth::id())
        {
            return  redirect('home');
        }
            else
        {
            $categories=Category::all();
            $products=Product::all();
            return view('user.home',compact('categories','products'));
        }

    }
   public  function  redirect()
   {
       if(Auth::id())
       {
           if(Auth::user()->usertype=='0')
           {
               $categories=Category::all();
               $products=Product::all();
               return view('user.home',compact('categories','products'));

           }
           else
           {
               return view('admin.home');
           }
       }
       else{
            return redirect()->back();
       }

   }
   public  function  product_view($id)
   {
       if(Category::where('id',$id)->exists())
       {
           $categorys=Category::where('id',$id)->first();
           $products=Product::where('category_id',$categorys->id)->get();
           return view('user.product_view_user',compact('products'));
       }
       else
       {
           return redirect('/home');
       }
   }
   public function  one_product_view($id)
   {
       $oneproduct=Product::find($id);
       return view('user.one_product_view',compact('oneproduct'));
   }
}
