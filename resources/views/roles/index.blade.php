@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Guard Name</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($roles as $role)
                      <tr>
                        <td>{{$role->name}}</td>
                        <td>{{$role->guard_name}}</td>
                        <td class="grid">
                            
                                
                            {{-- <form action="{{route('site.destroy',$site)}}" method="POST">
                                @csrf @method('delete') 
                                <button type="submit"  class="btn btn-secondary"><i class="fas fa-trash"></i></button>
                            </form>  --}}
                                  
                        </td>
                      </tr>
                  @endforeach
                </tbody>
            </table>
            {{ $roles->links() }}
              
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
