<?php

namespace App\Http\Controllers;

use App\Addresses;
use App\User;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Addresses  $addresses
     * @return \Illuminate\Http\Response
     */
    public function show(Addresses $addresses, User $user)
    {
        $user=$addresses->user()->first();
        return view('endereco',[
            'user' => $user,
            'address' => $addresses
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Addresses  $addresses
     * @return \Illuminate\Http\Response
     */
    public function edit(Addresses $addresses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Addresses  $addresses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Addresses $addresses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Addresses  $addresses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addresses $addresses)
    {
        //
    }
}
