<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function getPets() {
        $pets_array = [];
        $pet_id = 1;


        while (count($pets_array) !== 5) {
            $response = Http::get("https://petstore.swagger.io/v2/pet/$pet_id");

            if($response->status() === 200) {
                array_push($pets_array, $response->object());
            }
            ++$pet_id;
        }

        return $pets_array;
    } 

    public function index()
    {
        return view('Pet.index', [
            "pets" => $this->getPets()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $response = Http::post("https://petstore.swagger.io/v2/pet", [
            "name" => $data['name'],
            "status" => $data['status']
        ]);

        return redirect('/');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
