<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Site;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Service::simplePaginate(2);
        return view('services.index', compact('servicios'));
    }
    public function filtrar( $id){
        $servicios =  Service::join("sites","services.id_sitio", "=", "sites.id")
        ->where('id_sitio', $id)
        ->select("services.servicio","services.precio","sites.nombre", )
        ->simplePaginate(10);
        $sitiosTotal = Site::all();
        $sitios = Site::cursorPaginate(10);
        return view('sites.index', compact('sitios','servicios','sitiosTotal'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sitios = Site::all();
        return view('services.create', compact('sitios'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validaciones = request()->validate([
            'servicio' => 'required',
            'precio' => 'required',
            'sitio' => 'required',
        ]);

        if (isset($validaciones)) {
            $servicio = new Service();
            $servicio->servicio = $request->servicio;
            $servicio->precio = $request->precio;
            $servicio->id_sitio = $request->sitio;
            
            $servicio->save();
            session()->flash('message', 'Servicio creado satisfactoriamente!!');
            
            return redirect()->route('service.create');
            
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
