@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Asignar rol</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                      <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="grid">
                            <a href="{{route('user.edit',$user)}}" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                                
                        </td>
                      </tr>
                  @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
              
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        

         .grid{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4px;
        }

        .grid a,button{
            width:40px;
        }
    

    </style>
@stop

@section('js')
    
@stop
