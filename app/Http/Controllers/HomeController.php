<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Cart;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function redirect()
    {
        @$usertype = Auth::user()->usertype;

        if ($usertype == "1") {
            return view('admin.home');
        } else {
            $data = Product::paginate(3);
            return view('user.product', compact('data'));
        }
    }
    public function index()
    {

        $data = Product::paginate(3);


        // $count=Cart::Where('phone',$user->phone)->count();

        return view('user.product', compact('data'));
    }
    public function products()

    {

        $data = Product::paginate(3);


        // $count=Cart::Where('phone',$user->phone)->count();

        return view('user.products', compact('data'));
    }
    public function menuser()

    {

        $data = Product::where('category','=','men')->paginate(3);


        // $count=Cart::Where('phone',$user->phone)->count();

        return view('user.products', compact('data'));
    }
    public function womenuser()

    {

        $data = Product::where('category', '=', 'women')->paginate(3);




        return view('user.products', compact('data'));
    }
    public function kiduser()
    {

        $data = Product::where('category', '=', 'kid')->paginate(3);



        return view('user.products', compact('data'));
    }
    public function about()

    {
        $face=About::where('name','facebook')->get();
        $twit = About::where('name', 'twitter')->get();

        return view('user.about',compact('face','twit'));
    }
    public function contact()

    {

        return view('user.contact');
    }

    public function search(Request $request)
    {

        $search = $request->search;

        if ($search == '') {
            $data = Product::paginate(3);
            return view('user.product', compact('data'));
        }
        $data = Product::where('title', 'like', '%' . $search . '%')->get();
        return view('user.product', compact('data'));
    }
    public function searchh(Request $request)
    {

        $search = $request->search;

        if ($search == '') {
            $data = Product::paginate(3);
            return view('user.products', compact('data'));
        }
        $data = Product::where('title', 'like', '%' . $search . '%')->get();
        return view('user.products', compact('data'));
    }
    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {

            $user = Auth()->user();
            $product = Product::find($id);
            $cart = new Cart();
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->quantity = $request->num;
            $cart->save();
            return redirect()->back()->with('message', 'Add Crat Successfully');;
        } else {
            return redirect('login');
        }
    }
    public function showcart()
    {
        $user = Auth()->user();

        $count = Cart::Where('phone', $user->phone)->count();
        return view('user.showcart', compact('count'));
    }
    public function contactstore(Request $request){
        $data = new Contact ();
        $data->name= $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();
        return redirect()->back()->with('message', 'message_send');

    }
}
