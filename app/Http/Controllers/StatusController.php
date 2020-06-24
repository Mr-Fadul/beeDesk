<?php

namespace App\Http\Controllers;

use App\Status;
use App\Queue;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Status::all();
        return response()->json($status);
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
        $status = Status::all();
        $option='<option>'.$request->status.'</option>';
        foreach ($status as $s){
            $option.='<option value="'.$s->id.'">'.$s->title.'</option>';
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
