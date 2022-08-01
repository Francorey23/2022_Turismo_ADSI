@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Sitio</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{route('site.store')}}" enctype="multipart/form-data" method="POST"><form action="{{route('site.store')}}" enctype="multipart/form-data" method="POST">
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
                        <label for="">Municipio:</label>
                        <input  type="text" placeholder="Ingrese el nombre del municipio..." class="form-control" name="municipio">
                        <small class="text-danger">{{$errors->first('municipio')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Lugar:</label>
                        <input  type="text" placeholder="Ingrese el lugar..." class="form-control" name="lugar">
                        <small class="text-danger">{{$errors->first('lugar')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Nombre:</label>
                        <input  type="text" placeholder="Ingrese el nombre del sitio..." class="form-control" name="nombre">
                        <small class="text-danger">{{$errors->first('nombre')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Descripción:</label>
                        <input  type="text" placeholder="Ingrese una descripción..." class="form-control" name="descripcion">
                        <small class="text-danger">{{$errors->first('descripcion')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Fotografia:</label><br>
                        <span class="btn btn-secondary btn-file">
                            <i class="far fa-images"></i> <input accept="image/*" onchange="vistaPrevia(event)" type="file" name="fotografia">
                        </span>
                        <small class="text-danger">{{$errors->first('fotografia')}}</small>
                    </div>
                    
                    <div class="imagen col-md-6 col-lg-6 col-sm-12">
                        <label for="">Vista previa fotografia:</label><br>
                        <img src="" id="img-foto" alt="">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style type="text/css">
        .btn-file {
            position: relative;
            overflow: hidden;
            width: 100px;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }
        .btn-file i{
            font-size:23px;
        }
        .imagen img{
            max-width: 100%;
            max-height: 50vh;
        }
    </style>
@stop

@section('js')
    
<script>
        function ocultarAlerta() {
            document.querySelector(".alert").style.display = 'none';
        }
        setTimeout(ocultarAlerta,3000);
    
        // vista previa de la imagen

        let vistaPrevia = ()=>{
            let leerImg = new FileReader();
            let id_img = document.getElementById('img-foto');

            leerImg.onload = ()=>{
                if (leerImg.readyState == 2) {
                    id_img.src = leerImg.result;
                }
            }

            leerImg.readAsDataURL(event.target.files[0])
        }
    </script>
@stop