<x-app-layout>
    @include('layouts.navigation')
    <div class="container">
        <section class="mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <h1 class="mb-2">{{$site->nombre}}</h1>
                        {{-- <p>{{$site->descripcion}}</p> --}}
                        <img src="{{asset('img/'.$site->fotografia)}}" class="img-fluid" alt="Portfolio 01">
                        
                            <div class="col-md-12 mt-4 text-center">
                                <a href="{{url('/')}}" type="submit" class="btn btn-secondary">Volver</a>
                            </div>
                        
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <form action="{{route('commentary.store')}}" method="post">
                            @csrf
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-10">
                                        <input name="comentario" type="comentario" class="form-control" placeholder="ingrese un comentario...">
                                        <input type="hidden" value="{{$site->id}}" name="id_sitio">
                                        {{-- se envia campo oculto con el objeto de site --}}
                                        
                                    </div>

                                    <div class="col-2">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-secondary">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                           
                        </form>
                        <hr class="mt-4">
                        @if (count($commentaries))
                            @foreach ($commentaries as $commentary)
                                <div class="card card-body">
                                    <small>Comentario echo por:{{$commentary->name}}</small>
                                    <strong>{{$commentary->comentario}}</strong>
                                    <small>fecha:{{$commentary->fecha}}</small>
                                </div>
                            @endforeach
                        @else
                            <strong>NO HAY COMENTARIOS PARA ESTE SITIO!</strong>
                        @endif
                    </div>
                </div>
            </div>
    
        </section>
    </div>
    
</x-app-layout>