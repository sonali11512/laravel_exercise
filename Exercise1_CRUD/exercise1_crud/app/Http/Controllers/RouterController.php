<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\SoftDeletes;
use App\Router;

class RouterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routers = Router::all();
        return view('routers.index', compact('routers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('routers.create');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sap_id'=>'required',
            'loopback'=>'required',
            'type'=>'required'
        ]);
        $router = new Router([
            'sap_id' => $request->get('sap_id'),
            'hostname' => $request->get('hostname'),
            'loopback' => $request->get('loopback'),
            'mac_address' => $request->get('mac_address'),
            'type' => $request->get('type')
        ]);
        $router->save();
        return redirect('/routers')->with('success', 'Router Information Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $router = Router::find($id);
        return view('routers.edit', compact('router')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sap_id'=>'required',
            'loopback'=>'required',
            'type'=>'required'
        ]);
        $router = Router::find($id);
        $router->sap_id =  $request->get('sap_id');
        $router->hostname = $request->get('hostname');
        $router->loopback = $request->get('loopback');
        $router->mac_address = $request->get('mac_address');
        $router->type = $request->get('type');
        $router->save();
        return redirect('/routers')->with('success', 'router updated!');
    }

    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $router = Router::find($id);
        $router->delete();
        // $router->softDeletes();
        return redirect('/routers')->with('success', 'Router deleted!');
    }
}
