@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Asignar rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{route('asyncRole', $user)}}" method="POST">
                @method('PUT')
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
                        <label for="">Nombre del usuario:</label>
                        
                        <small class="">{{$user->name}}</small>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Seleccione los roles:</label>
                        @if (count($roles) >= 1)
                            @foreach($roles as $role)
                                <div class="form-check">
                                    {{-- campo oculto --}}
                                    <input type="hidden" value="{{$user}}" name="user">
                                    <input name="roles[]" class="form-check-input" type="checkbox" value="{{$role->id}}" id="flexCheckDefault">
                                    <small class="text-danger">{{$errors->first('roles')}}</small>
                                    <label class="form-check-label" for="flexCheckDefault">
                                    {{$role->name}}
                                    </label>
                                </div>
                            @endforeach  
                        @else
                            <br>
                            <small>por favor antes de asignar un rol, cree dichos roles</small>
                            <br>
                            <small class="text-danger">{{$errors->first('roles')}}</small>
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
