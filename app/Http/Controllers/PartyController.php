<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $parties = Party::filter($request)->select('name', 'phone_number', 'email', 'slug')->paginate(10);
        return inertia('Party/Index', compact('parties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Party $party)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Party $party)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Party $party)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Party $party)
    {
        //
    }
}
