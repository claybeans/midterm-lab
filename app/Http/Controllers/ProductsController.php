<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        return response()->json(Products::all());
    }


    public function store(Request $request)
    {
        $supplier = Products::create($request->all());
        return response()->json($supplier, 201);
    }


    public function show($id)
    {
        return response()->json(Products::find($id));
    }


    public function update(Request $request, $id)
    {
        Products::find($id)->update($request->all());
    }


    public function destroy($id)
    {
        Products::destroy($id);
    }
}

