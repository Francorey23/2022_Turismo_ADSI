<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('role:admin')->only('index');
    }
    public function index()
    {
        $sitios = Site::simplePaginate(3);
        return view('sites.index', compact('sitios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sites.create');
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
            'municipio' => 'required',
            'lugar' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'fotografia' => 'required',
        ]);

        if (isset($validaciones)) {
            $sitio = new Site;
            $sitio->municipio = $request->municipio;
            $sitio->lugar = $request->lugar;
            $sitio->descripcion = $request->descripcion;
            $sitio->nombre = $request->nombre;
  
            $fotografia = $request->file('fotografia');
            $fotografia->move('img', $fotografia->getClientOriginalName());
            $sitio->fotografia = $fotografia->getClientOriginalName();
            
            $sitio->save();
            session()->flash('message', 'Sitio creado satisfactoriamente!!');
            return redirect()->route('site.create');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //recuperamos los servicios
        $services = Service::join("sites","services.id_sitio","=","sites.id")
                            ->where("id_sitio",$site->id)
                            ->select("services.servicio","services.precio")
                            ->get();
                           // return $service;
        return view('sites.show',compact('services','site'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        return view('sites.edit', compact('site'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        $validaciones = request()->validate([
            'municipio' => 'required',
            'lugar' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
        if (isset($validaciones)) {
            $site->municipio = $request->municipio;
            $site->nombre = $request->nombre;
            $site->lugar = $request->lugar;
            $site->descripcion = $request->descripcion;
            
            if (isset($request->fotografia)) {
                //si existe un nuevo archivo de imagen el primer paso es eliminarlo
                $image_path = public_path().'/img/'.$site->fotografia;
                unlink($image_path);

                //despues le asigno el nuevo archivo que me llega por el request
                $fotografia = $request->file('fotografia');
                $fotografia->move('img', $fotografia->getClientOriginalName());
                $site->fotografia = $fotografia->getClientOriginalName();            
            }else {
                $site->fotografia =$site->fotografia;
            }
            $site->save();
        }
        session()->flash('update', 'Sitio actualizado satisfactoriamente!!');
        return redirect()->route('site.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //Eliminar la imagen desde el servidor
        $image_path = public_path().'/img/'.$site->fotografia;
        unlink($image_path);
        $site->delete();
        session()->flash('message', 'Sitio eliminado correctamente!!');
        return redirect()->route('site.index');
    }
}
