<?php

namespace App\Http\Controllers;
use  App\Models\Prouduct;
use  App\Models\User;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request as FacadesRequest;

class ProuductController extends Controller
{
    //
  public function index(){
    $products=Prouduct::orderBy('id','DESC')->paginate(7);
    //  dd($products); //collection
     //dd($products->count()); //collection has helper function like first last take count

     //to filter database in laravel
    // $products=Prouduct::where('price','>',400)
    // ->orWhere('quantity','>',10)
    // ->get();

    // $products=Prouduct::where('price','>',400)
    // ->where('quantity','>',10)
    // ->get();

     return view('products.index',['products'=>$products]);
   }
   public function show($id){
    // dd($id);
    $product=Prouduct::find($id);
    return view('products.show',['product' => $product]);
}

public function destroy($id){
    Prouduct::where('id',$id)->delete();
    return redirect()->route('products.index');
    // dd($id);

}

public function edit($id){
    // dd($id);
    $product=Prouduct::find($id);
    return view('products.edit',['product'=>$product]);
}
public function update($id ,Request $request){
    // dd($id,$request->all());
    $product=Prouduct::find($id);
    $product->update($request->except('_method','_token'));
    // return veiw('products',['product'=>$product]);
    return redirect()->route('products.index');
}
public function create(Request $request){
   return view('products.create');
}
public function store(Request $request){
    // dd($request->all());
    $product=Prouduct::create($request->except('_token'));


    return redirect()->route('products.index');
}
};



