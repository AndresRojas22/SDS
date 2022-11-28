<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $products;
    public function __construct(Product $products)
    {
        $this->products = $products;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->get();
        return view('Admin.Almacen',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product($request->all());
        $products->Nombre;
        $products->Descripcion;
        $products->Precio;
        $products->Cantidad;
        $products->Proveedor;
        
        $imagenes = $request->file('Ruta')->store('IMG');
        $url = Storage::url($imagenes);
        $products->Ruta =$url;
        $products->save();
        $products = Product::all('Nombre', 'Descripcion', 'Precio', 'Cantidad', 'Proveedor', 'Ruta');
        $collectionproducts = collect(['products'=>$products]);
        Storage::disk('resources')->put('products.json', $products);
        
        return redirect()->action([ProductController::class, 'index']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $id)
    {
        $id->delete();
        return redirect()->route('admin.Almacen');
    }
}
