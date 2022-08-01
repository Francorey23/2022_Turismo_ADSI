@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
        <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Precio</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($servicios as $servicio)
                      <tr>
                        <td>{{$servicio->id}}</td>
                        <td>{{$servicio->servicio}}</td>
                        <td>{{$servicio->precio}}</td>
                        
                        <td class="grid">
                            
                            <a href="{{-- {{route('site.edit',$site)}} --}}" class="btn btn-secondary"><i class="far fa-edit"></i>Editar</a>
                        
                            <form action="{{-- {{route('site.destroy',$site)}} --}}" method="POST">
                                @csrf @method('delete') 
                                <button type="submit"  class="btn btn-secondary"><i class="fas fa-trash"></i>Eliminar</button>
                            </form> 
                                  
                    </td>
                      </tr>
                  @endforeach
                </tbody>
            </table>
            {{ $servicios->links() }}
              
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop