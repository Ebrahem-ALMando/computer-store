<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_product_view()
    {
        $categorys=Category::all();

        return view('admin.add_products',compact('categorys'));
    }
    public function add_category_view()
    {
        return view('admin.add_categpry');
    }
    public  function  add_user_view()
    {
        return view('admin.add_user');

    }
    public  function  add_category(Request $request)
    {
        $category= new Category;
        $category->name=$request->c_name;
        $category->description=$request->c_excerpt;
        $category->excerpt=$request->c_description;
        $logo=$request->c_logo;
        if ($logo){
            $imagename=time().'.'.$logo->getClientOriginalExtension();
            $request->c_logo->move('categoryimage',$imagename);
            $category->logo=$imagename;
        }
        $category->save();
        return redirect()->back()->with('Message_Add','Category Add Successfully');
    }
    public  function add_products(Request $request)
    {
        $product=new  Product;
        $product->name=$request->p_name;
        $product->price=$request->p_price;
        $product->category_id=$request->p_category;
        $product->status=$request->p_status;
        $product->number=$request->p_number;
        $product->availability=$request->p_availability;
        $product->excerpt=$request->p_excerpt;
        $product->description=$request->p_description;
        $image=$request->p_image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->p_image->move('productimage',$imagename);
            $product->image=$imagename;

        }
        $product->save();
        return redirect()->back()->with('Message_Add','Product Add Successfully');

    }
//    public function add_users(array $input)
//    {
//        Validator::make($input, [
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => $this->passwordRules(),
//            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
//        ])->validate();
//
//         User::create([
//            'name' => $input['u_name'],
//            'phone' => $input['u_phone'],
//            'address' => $input['u_address'],
//            'email' => $input['u_email'],
//            'password' => Hash::make($input['u_password']),
//        ]);
//        return redirect()->back()->with('Message_Add','User Add Successfully');
//    }
    public  function add_users(Request $request)
    {
//         $this->validate($request,[
//            'u_name'=>'required|string|max:255',
//            'u_email' =>'required|string|email|max:255|unique:users',
//             'u_password'=>'required|confirmed|min:6'
//         ]);
        $user=new User;
        $user->name=$request->u_name;
        $user->phone=$request->u_phone;
        $user->address=$request->u_address;
        $user->email=$request->u_email;
        $user->password=bcrypt($request->u_password);
        $user->save();
        return redirect()->back()->with('Message_Add','User Add Successfully');

    }
    public  function products_view()
    {
        $datas=Product::all();
        return view('admin.products_view',compact('datas'));
    }

    public function  delete_product($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->back()->with('Delete','Product Delete Successfully');
    }
    public function  update_product($id)
    {
        $categorys=Category::all();
        $product=Product::find($id);
        return view('admin.update_products_view',compact('product','categorys'));
    }
    public  function  edit_product($id,Request $request)
    {
        $product=Product::find($id);
        $product->name=$request->p_name;
        $product->price=$request->p_price;
        $product->category_id=$request->p_category;
        $product->status=$request->p_status;
        $product->number=$request->p_number;
        $product->availability=$request->p_availability;
        $product->excerpt=$request->p_excerpt;
        $product->description=$request->p_description;
        $image=$request->p_image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->p_image->move('productimage',$imagename);
            $product->image=$imagename;

        }
        $product->save();
        return redirect()->back()->with('Message_Update','Product Update Successfully');
    }
    public function category_view()
    {
        $datas=Category::all();
        return view('admin.category_view',compact('datas'));
    }
    public  function  delete_category($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect()->back()->with('Delete','Category Delete Successfully');
    }
    public function  update_category($id)
    {
        $category=Category::find($id);
        return view('admin.update_category_view',compact('category'));
    }
    public  function  edit_category($id,Request $request)
    {
        $category=Category::find($id);
        $category->name=$request->c_name;
        $category->description=$request->c_excerpt;
        $category->excerpt=$request->c_description;
        $logo=$request->c_logo;
        if ($logo){
            $imagename=time().'.'.$logo->getClientOriginalExtension();
            $request->c_logo->move('categoryimage',$imagename);
            $category->logo=$imagename;
        }
        $category->save();
        return redirect()->back()->with('Message_Update','Category Update Successfully');
    }
    public  function  user_view()
    {
        $datas=User::all();
        return view('admin.user_view',compact('datas'));
    }
    public  function  delete_user($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->back()->with('Delete','User Delete Successfully');
    }
    public  function update_user($id)
    {
        $user=User::find($id);
        return view('admin.update_user_view',compact('user'));
    }
    public function edit_users($id,Request $request)
    {
        $user=User::find($id);
        $user->name=$request->u_name;
        $user->phone=$request->u_phone;
        $user->address=$request->u_address;
        $user->email=$request->u_email;
        $user->password=bcrypt($request->u_password);
        $user->save();
        return redirect()->back()->with('Message_Add','User Update Successfully');
    }
}
