<?php

namespace App\Http\Controllers;

use App\Models\Goat;
use App\Models\User;
use Illuminate\Http\Request;


class GoatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $goat = Goat::all();
        return view('admin.goat.home', compact('goat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.goat.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'weight' => 'required|numeric',
            'health_status' => 'required|string|max:255',
            'for_sale' => 'required|boolean',
        ]);

        Goat::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'age' => $request->age,
            'weight' => $request->weight,
            'health_status' => $request->health_status,
            'for_sale' => $request->for_sale,
        ]);
        return redirect()->route('admin/goats/create');
    }

    /**
     * Display the specified resource.
     */

}
