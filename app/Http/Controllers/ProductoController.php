<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=Producto::simplePaginate(5); //esto es para la paginación
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['nombre'=>'required','descripcion'=>'required','imagen'=>'required|image|mimes:jpg,png,jpeg|max:1024']);
        $producto=$request->all();
        if ($imagen=$request->file('imagen')) {
            $rutaGuardarImg='imagen/';
            $imagenProducto=date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg,$imagenProducto);
            $producto['imagen']="$imagenProducto";
        }
        Producto::create($producto);
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view('productos.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate(['nombre'=>'required','descripcion'=>'required','imagen'=>'nullable|image|mimes:jpg,png,jpeg|max:1024']);
        $prod=$request->all();
        if ($imagen=$request->file('imagen')) {
            $rutaGuardarImg='imagen/';
            $imagenProducto=date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move(public_path($rutaGuardarImg),$imagenProducto);
            $prod['imagen']="$imagenProducto";
        }
        else{
            unset($prod['imagen']);
        }
        
        $producto->update($prod);
        return redirect()->route('productos.index');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
