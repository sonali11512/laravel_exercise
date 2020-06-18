<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomSearchController extends Controller
{
    function index(Request $request)
    {
        
        if($request->ajax())
        
        {
        
        $output="";
        
        $routers=DB::table('routers')->where('loopback','LIKE','%'.$request->search."%")->get();

       if($routers)
        {
            
            foreach ($routers as $key => $value) {
            
                $output.='<tr>'.
                
                '<td>'.$value->sap_id.'</td>'.
                
                '<td>'.$value->hostname.'</td>'.
                
                '<td>'.$value->loopback.'</td>'.
                
                '<td>'.$value->mac_address.'</td>'.
                '<td>'.$value->type.'</td>'.
                
                '</tr>';
                
            }
            
            return Response($output);
            
        }
        }

        $result=DB::table('routers')->select('loopback')->get();
        return view('routers.search', compact('result'));
    } 
}