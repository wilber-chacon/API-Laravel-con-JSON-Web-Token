<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function allProducts()
    {
        return product::all();
    }


    public function createProduct(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:200',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'acquisitionDate' => 'required|date'
        ]);

        //creando una instancia de la clase product
        $product = new product();

        //Guardando los datos del nuevo producto
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->acquisitionDate = $request->input('acquisitionDate');
        $product->save();
        //retornando un mensaje de exito y su estado
        return response()->json(["message" => "Producto creado correctamente", "product"=> $product], Response::HTTP_CREATED);
    }


    public function findProduct($id)
    {

        //cargando el registro
        $product = product::find($id);

        if ($product != null) {
            //retornando el registro del producto consultado
            return response()->json(["product" => $product], Response::HTTP_OK);
        } else {

            return response()->json(["message" => "Producto no encontrado"], Response::HTTP_NOT_FOUND);
        }
    }

    public function editProduct(Request $request, $id)
    {
        //cargando el registro a ser actualizado
        $product = product::find($id);

        if ($product != null) {

            //Guardando los nuevos datos del producto
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->stock = $request->input('stock');
            $product->acquisitionDate = $request->input('acquisitionDate');
            $product->save();
            //retornando un mensaje de exito
            return response()->json(["message" => "Producto actualizado correctamente", "product"=> $product], Response::HTTP_OK);
        } else {

            return response()->json(["message" => "Producto no encontrado"], Response::HTTP_NOT_FOUND);
        }
    }


    public function destroyProduct($id)
    {

        //eliminando el producto con el id recibido
        $result = product::destroy($id);

        if ($result > 0) {
            //retornando un mensaje de exito
            return response()->json(["message" => "Producto eliminado correctamente"], Response::HTTP_OK);
        } else {

            return response()->json(["message" => "Producto no encontrado"], Response::HTTP_NOT_FOUND);
        }
    }
}
