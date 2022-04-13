<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Image;
use App\Models\Vendor;
use App\Models\User;
use App\Models\Cart;
use App\Models\CartItem;
use Session;
use DB;
// use App\Http\Middleware\Vendor;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('shop','singleproduct');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('home');
    }
    public function product()
    {
        $vendors = Vendor::all();
        // echo "<pre>";
        // print_r($vendors);
        // die;
        return view('product',compact('vendors'));
    }
    public function save(Request $request)
    {
        // dd($request->all());
        // $validatedData = $request->validate([
        //     'title' => 'required',
        //     'subtitle' => 'required',
        //     'image' => 'required',
        //     'price' => 'required',
        //     'description' => 'required',
        //     'dimension' => 'required'
        // ]);
    
        $products = new Product;
        $products->vendor_id = $request['vendor'];
        // die;
        $products->title = $request['title'];
      
        $products->subtitle = $request['subtitle'];
        $products->price = $request['price'];
        $products->description = $request['description'];
        
        $products->dimension = implode(',',$request['dimension']);
        // dd($request->all());
        $products->save();
        $id = $products->id;
        if($request->hasfile('filenames'))
        {
           foreach($request->file('filenames') as $file)
           {
               $name = $file->getClientOriginalName();
               $file->move(public_path().('/files/'), $name);  
               $images = new Product_Image;
               $images->image = $name;
               $images->prod_id = $id;
               $images->save();    
           }
        }
        // print_r($data[0]);
        // die;
        
        return redirect('/show');
       
    }
    public function show()
    {
        $products = Product::all();
        $images = Product_Image::all();
        return view('show',compact('products','images'));
    }
    public function edit($id)
    {
        $products = Product::find($id);
        $data = compact('products');
        return view('edit')->with($data);
    }
    public function update($id,Request $request)
    {
        $products = Product::find($id);
      
        if(!empty($request['filenames']))
        {
        $products->title = $request['title'];
        
        $products->subtitle = $request['subtitle'];
        $data = [];
        if($request->file('filenames'))
        {
           foreach($request->file('filenames') as $file)
           {
               $name = $file->getClientOriginalName();
               $file->move(public_path().('/files/'), $name);  
               $data[] = $name;  
           }
        }
      
        $products->image=implode(",",$data);
     
        $products->price = $request['price'];
        
        $products->description = $request['description'];
        $products->dimension = $request['dimension'];
        $products->save();
        return redirect('/show');
        }else{
            $products->title = $request['title'];
        
            $products->subtitle = $request['subtitle'];
            $products->image = $request['fill'];
            $products->price = $request['price'];
            
            $products->description = $request['description'];
            $products->dimension = $request['dimension'];
            $products->save();
            return redirect('/show');
        }

    }
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }
    public function shop(Request $request)
    {   
        $images = Product_Image::all();
        $vendors = Vendor::all();
        $products = Product::paginate(6);
        // $type  = $request->input('type');

        if($request->ajax())
        { 
            
           $product = Product::select("*");
        //    dd($product->orderBy('title')->get());
            if($request->input('sort') == "ascending")
            {
                $product->orderBy('title','asc',$request->input('sort'));           
            
            }
           if($request->input('sort') == "ascending" && $request->vendor_ids)
           {
                $product->whereIn('vendor_id',$request->vendor_ids)->orderBy('title','asc',$request->input('sort'));
                // $product->orderBy('title','asc',$request->input('sort'));           
              
           }
           elseif($request->input('sort') == "descending")
           {
                $product->orderBy('title','desc',$request->input('sort'));           
              
           }
           elseif($request->input('sort') == "descending" && $request->vendor_ids)
           {
                $product->whereIn('vendor_id',$request->vendor_ids)->orderBy('title','desc',$request->input('sort'));           
              
           }
           elseif($request->input('sort') == "priceasc")
           {
                $product->orderBy('price','asc',$request->input('sort'));           
              
           }
           elseif($request->input('sort') == "priceasc" && $request->vendor_ids)
           {
                $product->whereIn('vendor_id',$request->vendor_ids)->orderBy('price','asc',$request->input('sort'));           
              
           }
          
           elseif($request->input('sort') == "pricedesc")
           {
                $product->orderBy('price','desc',$request->input('sort'));           
              
           }
           
           elseif($request->input('sort') == "pricedesc" && $request->vendor_ids)
           {
                $product->whereIn('vendor_id',$request->vendor_ids)->orderBy('price','desc',$request->input('sort'));           
              
           }

           if($request->input('min') && $request->input('max')){
                
                $product->whereBetween('price', [ (int)$request->input('min'), (int)$request->input('max')]);
           }
           if($request->input('min') && $request->input('max') && $request->vendor_ids){
                // dd($request->vendor_ids);
                $product->whereBetween('price', [ (int)$request->input('min'), (int)$request->input('max')]);
                
           }
       
           if($request->vendor_ids){
                // dd($request->input('min'));
                $product->whereIn('vendor_id',$request->vendor_ids);
                // $product->whereBetween('price', [ (int)$request->input('min'), (int)$request->input('max')]);
            }
           if($request->input('search'))
           {
                $product->where('title','LIKE','%'.$request->input('search')."%");
           }
           
                
            return response()->json(view('frontend.products.include.product', ['products' => $product->paginate(6),'images' => $images,'vendors' => $vendors])->render());
                                               
                                                           
      
        }    
    
        return response()->view('frontend.products.shop', compact('products','images','vendors'));
    }
    public function singleproduct($id)
    { 
        $product = Product::find($id);
        $vendid = $product->vendor_id;
        $vendor = Vendor::find($vendid);
        $images = Product_Image::where('prod_id',$id)->get();
        $product->images = $images;
        $dimensions = explode(',',$product->dimension);
       
        return view('singleproduct',compact('product','vendor'));
    }
    
    public function shopcart($id)
    {
        $product = Product::find($id);
        
        $images = Product_Image::where('prod_id',$id)->get();
        $product->images = $images;
        
        return view('shopcart',compact('product'));
    }
    
    public function savecart($id,Request $request)
    { 
       
        $product = Product::find($id);
       

        $carts = New Cart;
        $products = Product::find($id);
        $sessionid = Session::getId();
        $carts->sessionid = $sessionid;
        $carts->price = $products->price * $request['number'];;
        $carts->save();

        $id = $carts->id;
        
        $dim = explode(',',$product->dimension);
        $dimension = $dim[0];
        $cartitem = New CartItem;
        
        $cartitem->productid = $products->id;
        $cartitem->cartid = $id;
        $cartitem->dimension = $dimension;
        $cartitem->quantity = $request['number'];  
        $cartitem->save();
        
    }
    public function updatecart($id, Request $request)
    {
        $products = Product::find($id);
       
        $data = $request['number'];
        $total = $products->price * $data;
      
        $carts = CartItem::all();
        print_r($carts->quantity); 
    }
    
   
}
