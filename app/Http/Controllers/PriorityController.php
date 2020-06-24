<?php

namespace App\Http\Controllers;

use App\Priority;
use Illuminate\Http\Request;

class PriorityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $priority = Priority::all();
        return response()->json($priority);
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

    public function select(Request $request){
        $priority = Priority::all();
        $option='<option>'.$request->priority.'</option>';
        foreach ($priority as $p){
            $option.='<option value="'.$p->id.'">'.$p->title.'</option>';
        }
        return response()->json($option);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Category $status)
    {
        
    }

}
