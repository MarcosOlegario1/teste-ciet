<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return response()->json($items);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $email
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
        $item = Item::findByEmail($email);

        if($item) 
        {
            return response()->json($item);
        } else {
            return response()->json(['error' => 'Item não encontrrado'], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $item = Item::create($data);

        return response()->json($item, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $email)
    {
        $data = $request->all();
        $item = Item::update($email, $data);

        if($item) 
        {
            return response()->json($item, 200);
        } else {
            return response()->json(['error' => 'Item não encontrado'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy($email)
    {
        $success = Item::delete($email);

        if($success) 
        {
            return response()->json(null, 204);
        } else {
            return response()->json(['error' => 'Item não encontrado'], 404);
        }
    }
}