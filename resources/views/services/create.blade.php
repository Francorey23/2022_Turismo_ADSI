@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Servicio</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{route('service.store')}}" method="POST">
                @csrf

                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        
                @endif
               
                
                <div class="row">    
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Servicio:</label>
                        <input  type="text" placeholder="Ingrese el nombre del servicio..." class="form-control" name="servicio">
                        <small class="text-danger">{{$errors->first('servicio')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Precio:</label>
                        <input  type="number" placeholder="Ingrese el precio del servicio..." class="form-control" name="precio">
                        <small class="text-danger">{{$errors->first('precio')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Sitio:</label>
                        <select  name="sitio" class="form-control">
                            <option selected="true" disabled="disabled" >Seleccione un sitio</option>
                            @foreach($sitios as $sitio)
                                <option value="{{$sitio->id}}" >{{$sitio->nombre}}</option>
                            @endforeach  
                        </select>
                        <small class="text-danger">{{$errors->first('sitio')}}</small>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 mt-4 text-center">
                        <button type="submit" class="btn btn-secondary">Guardar</button>
                    </div>
                </div>
            
            </form>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    

    <script>
        function ocultarAlerta() {
            document.querySelector(".alert").style.display = 'none';
        }
        setTimeout(ocultarAlerta,3000);
    
        
    </script>
@stop
