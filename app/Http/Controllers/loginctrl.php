<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logintable;
use App\Models\Animal;
use App\Models\Adminlogin;
use App\Models\Shop;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Adopt;
use App\Models\orderAnimal;
use Hash;
use Session;

class loginctrl extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function showLoginForm()
    {
        return view('admin.adminlogin');
    }
    public function registration()
    {
        return view("auth.registration");
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:logintables',
            'password'=>'required|min:5|max:12'
        ]);
        $logintable = new logintable();
        $logintable->name = $request->name;
        $logintable->email = $request->email;
        $logintable->password = Hash::make($request->password);
        $res = $logintable->save();
        if($res){
            return back()->with('success','You have registered suucessfully');
        }
        else{
            return back()->with('fail','Something is wrong');
        }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $logintable = logintable::where('email','=',$request->email)->first();
        if($logintable){
            if(Hash::check($request->password, $logintable->password)){
                $request->session()->put('loginid', $logintable->id);
                return redirect('pet');
            }
            else{
                return back()->with('fail','Password does not match');
            }
        }
        else{
            return back()->with('fail','The email is not reistered');
        }
    }
    public function registerAdmin(Request $request)
    {
        $request->validate([
            'admin_name'=>'required',
            'email'=>'required|email|unique:adminlogins',
            'password'=>'required|min:5|max:12'
        ]);
        $adminlogintable = new Adminlogin();
        $adminlogintable->admin_name = $request->admin_name;
        $adminlogintable->email = $request->email;
        $adminlogintable->password = Hash::make($request->password);
        $res = $adminlogintable->save();
        if($res){
            return back()->with('success','You have registered suucessfully');
        }
        else{
            return back()->with('fail','Something is wrong');
        }
    }
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $adminlogintable = Adminlogin::where('email','=',$request->email)->first();
        if($adminlogintable){
            if(Hash::check($request->password, $adminlogintable->password)){
                $request->session()->put('loginid', $adminlogintable->id);
                return redirect('adminhome');
            }
            else{
                return back()->with('fail','Password does not match');
            }
        }
        else{
            return back()->with('fail','The email is not reistered');
        }
    }
    
    
    public function user(){
        $data = logintable::all();
        return view("admin.user",compact('data'));
    }
    public function deleteuser($id){
        $data = logintable::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function item()
    {
        $data = Shop::all();
        return view("admin.item",compact('data'));
    }
    public function upload(Request $request)
    {
        $data = new Shop;
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('itemimage',$imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->save();
        return redirect()->back();
    }
    public function shop(){
        $data = Shop::all();
        return view("shop",compact('data'));
    }
    public function deleteitem($id){
        $data = Shop::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateitem($id){
        $data = Shop::find($id);
        return view("admin.updateitem",compact("data"));
    }
    public function update2(Request $request, $id){
        $data = Shop::find($id);
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('itemimage',$imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->save();
        return redirect()->back();
    }




    public function upload_p(Request $request)
    {
        $data = new Animal;
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('petimage',$imagename);
        $data->image = $imagename;
        $data->breed = $request->breed;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }
    public function pet(){
        $data = Animal::all(); // Assuming Animal is your model representing the animals table

        return view('pet', compact('data'));
    }
    public function pets()
    {
        $data = Animal::all();
        return view("admin.pets",compact('data'));
    }
    public function deletepet($id){
        $data = Animal::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatepet($id){
        $data = Animal::find($id);
        return view("admin.updatepet",compact("data"));
    }
    public function update1(Request $request, $id){
        $data = Animal::find($id);
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('petimage',$imagename);
        $data->image = $imagename;
        $data->breed = $request->breed;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }


    public function provide()
    {
        return view("provide");
    }



    public function addcart(Request $request, $id){
        $email=$request->email;
        $product_id=$id;
        $quantity=$request->quantitys;

        $cart=new Cart();
        $cart->email=$email;
        $cart->product_id=$product_id;
        $cart->quantity=$quantity;
        $cart->save();
    
        return redirect()->back();
        
    }
    public function showcart(Request $request)
    {
        $email=$request->email;
        $data1=Cart::select('*')->where('email','=',$email)->get();
        $data=Cart::where('email',$email)->join('shops','carts.product_id','=','shops.id')->get();
        return view('showcart',compact('data','data1'));
    }
    public function remove($id)
    {
        $data=Cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orders(Request $request){

        foreach($request->productname as $key =>$productname)
        {
            $price=$request->price[$key];
            $quantity=$request->quantity[$key];
            $name=$request->name;
            $phone=$request->phone;
            $address=$request->address;

            $data=new Order();
            $data->Productname=$productname;
            $data->Price=$price;
            $data->Amount=$quantity;
            $data->Name=$name;
            $data->Phone=$phone;
            $data->Address=$address;
            $data->save();


        }
        return view('/home');

    }
    public function adminorder(){
        $data=Order::all();
        return view('admin.adminorder',compact('data'));
    }

    public function addanimal(Request $request, $id){
        $email=$request->email;
        $product_id=$id;

        $adopt=new Adopt();
        $adopt->email=$email;
        $adopt->product_id=$product_id;
        $adopt->save();
    
        return redirect()->back();
    }

    public function adopts(Request $request){

        
            $name=$request->name;
            $phone=$request->phone;
            $address=$request->address;

            $data=new orderAnimal();
            $data->Breedname=$request->breedname;
            $data->Name=$name;
            $data->Phone=$phone;
            $data->Address=$address;
            $data->save();


        
        return view('/home');
        
    }
    public function showanimal(Request $request)
    {
        $email=$request->email;
        $data1=Adopt::select('*')->where('email','=',$email)->get();
        $data=Adopt::where('email',$email)->join('animals','adopts.product_id','=','animals.id')->get();
        return view('showpet',compact('data','data1'));
    }
    public function remove1($id)
    {
        $data=Adopt::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function adminadp(){
        $data=orderAnimal::all();
        return view('admin.adminadp',compact('data'));
    }

}
