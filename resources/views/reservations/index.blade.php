<x-app-layout>
    @include('layouts.navigation')
    <div class="container">
        <section class="mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <h1 class="mb-2">{{$site->nombre}}</h1>
                        <p>{{$site->descripcion}}</p>

                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <form action="{{route('reservation.store')}}" method="post">
                            @csrf
                            <label for="">Fecha:</label>
                            <input name="fecha" type="date" class="form-control" placeholder="ingrese la fecha...">
                            <label for="">Hora:</label>
                            <input name="hora" type="time" class="form-control" placeholder="ingrese la hora">
                            <label for="">Numer de personas:</label>
                            <input name="num_per" type="number" class="form-control" placeholder="ingrese el numero de persona">
                            <input type="hidden" value="{{$site->id}}" name="id_sitio">


                            <div class="row">
                                <div class="col-md-12 mt-4 text-center">
                                    <button type="submit" class="btn btn-secondary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
        </section>
    </div>
</x-app-layout>
{{$site}}