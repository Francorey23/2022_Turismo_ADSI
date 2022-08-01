<?php

namespace App\Http\Controllers;

use App\Models\Commentary;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaryController extends Controller
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
        $commentary = new Commentary;
        $commentary->comentario = $request->comentario;
        $commentary->id_sitio = $request->id_sitio;
        //Del usuario que esta autenticado actualmente se extrae el ID
        //Para buscar autocompletar use llamado Ctrl + tecla espacio
        $commentary->id_user = Auth::user()->id;
        $commentary->fecha = date('d-m-Y');
        $commentary->save();
        //return $commentary;
        return redirect()->route('showSite',['site'=>$request->id_sitio]);
        
    }

    /**
     * Display the specified resource.
     
     *
     * @param  \App\Models\Commentary  $commentary
     * @return \Illuminate\Http\Response
     */
    public function show(Commentary $commentary)
    {
        //
    }

    public function showSite(Site $site){
        
        $commentaries = Commentary::join("users", "commentaries.id_user", "=", "users.id")
                                  ->select("users.name","commentaries.comentario","commentaries.fecha")
                                  ->where("commentaries.id_sitio",$site->id)
                                  ->orderBy("commentaries.id","DESC")
                                  ->get();
        return view('commentary.show', compact('site','commentaries'));
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentary  $commentary
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentary $commentary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commentary  $commentary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentary $commentary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentary  $commentary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentary $commentary)
    {
        //
    }
}
