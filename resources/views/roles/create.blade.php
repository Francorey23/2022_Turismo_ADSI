@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{route('role.store')}}" method="POST">
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
                        <label for="">Nombre del rol:</label>
                        <input  type="text" placeholder="Ingrese el nombre del rol..." class="form-control" name="name">
                        <small class="text-danger">{{$errors->first('name')}}</small>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Seleccione los permisos:</label>
                        @if (count($permissions) >= 1)
                            @foreach($permissions as $permission)
                                <div class="form-check">
                                    <input name="permissions[]" class="form-check-input" type="checkbox" value="{{$permission->id}}" id="flexCheckDefault">
                                    <small class="text-danger">{{$errors->first('permissions')}}</small>
                                    <label class="form-check-label" for="flexCheckDefault">
                                    {{$permission->name}}
                                    </label>
                                </div>
                            @endforeach  
                        @else
                            <br>
                            <small>por favor antes de guardar un rol , cree los permisos</small>
                            <br>
                            <small class="text-danger">{{$errors->first('permissions')}}</small>
                        @endif
                                          
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
