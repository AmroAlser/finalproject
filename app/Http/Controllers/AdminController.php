<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{

    public function product()

    {
        $name= Auth()->user()->name;
        $category=Category::all();
        return view('admin.product',compact('name', 'category'));
    }


    public function uploadproduct(Request $request)
    {

        $data = new Product();

        // $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->des;
        $data->quantity = $request->quantity;
        $data->category = $request->Category;
        $data->category_id= $request->Categoryy;

        $imagename = time() . '.' . $request->file->extension();
        $request->file->move(public_path('productimage'), $imagename);
        $data->image = $imagename;

        $data->save();
        return redirect()->back()->with('message', 'Product Added Successfully');
    }
    public function showproduct()
    {
        $name = Auth()->user()->name;
        $data = Product::all();
        return view('admin.showproduct', compact('data','name'));
    }
    public function menproduct()
    {
        $name = Auth()->user()->name;
        $data = Product::where('category', '=', 'men')->get();
        return view('admin.showproduct', compact('data', 'name'));
    }
    public function womenproduct()
    {
        $name = Auth()->user()->name;
        $data = Product::where('category', '=', 'women')->get();
        return view('admin.showproduct', compact('data', 'name'));
    }
    public function kidproduct()
    {
        $name = Auth()->user()->name;
        $data = Product::where('category','=','kid')->get();
        return view('admin.showproduct', compact('data', 'name'));
    }
    public function deleteproduct($id)
    {
        $data = Product::find($id)->delete();
        return redirect()->back()->with('message', 'Deleted Successfully');;
    }

    public function editproduct($id)
    {
        $name = Auth()->user()->name;
        $data = Product::find($id);
        $category = Category::all();
        return view('admin.editproduct', compact('data','name', 'category '));
    }
    public function updateproduct(Request $request, $id)
    {
        $data = Product::find($id);
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->des;
        $data->quantity = $request->quantity;
        $data->category = $request->Category;
        $data->category_id = $request->Categoryy;
        $imagename = time() . '.' . $request->file->extension();
        $request->file->move(public_path('productimage'), $imagename);
        $data->image = $imagename;

        $data->save();
        return redirect()->back()->with('message', 'Product Updated Successfully');
    }
    public function profile()
    {
        return view('profile.show');
    }
}
