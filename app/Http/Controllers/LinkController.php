<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class LinkController extends Controller
{

    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
    public function index()
    {
        $links = Link::all();
        return view('link.laracrud')->with('links', $links);
    }

    /**
        * Show the form for creating a new resource.
        *
        * @return Response
        */
    public function create()
    {
        //
    }

    /**
        * Store a newly created resource in storage.
        *
        * @return Response
        */
    public function store(Request $request)
    {
        $link = Link::create($request->all());
        return response()->json($link);
    }

    /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function show($id)
    {
        //
    }

    /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function edit($id)
    {
        $link = Link::find($id);
        return response()->json($link);
    }

    /**
        * Update the specified resource in storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function update(Request $request, $id)
    {
        $link = Link::find($id);
        $link->url = $request->url;
        $link->description = $request->description;
        $link->save();
        return response()->json($link);
    }

    /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function destroy($id)
    {
        $link = Link::destroy($id);
        return response()->json($link);
    }

}
