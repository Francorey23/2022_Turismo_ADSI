<x-app-layout> 
    @include('layouts.navigation')
    <div class="container">
        <section class="mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h2>{{$site->nombre}}</h2>
                        <p>{{$site->descripcion}} </p>
                        <img src="{{asset('img/'.$site->fotografia)}}" alt="">
                    </div>
                    <div class="col-6 mt-4">
                        <form action="{{route('reservation.store')}}" method="POST">
                            @csrf
                            <label for="">Fecha de reserva: </label>
                            <input type="date" name="fecha" placeholder="ingresar la fecha de reserva" class="form-control">
                            <label for="">Hora de reserva: </label>
                            <input type="time" name="hora" placeholder="ingresar la hora de reserva" class="form-control">
                            <label for="">Numero de personas: </label>
                            <input type="number" name="num_per" placeholder="ingresar el numero de personas" class="form-control">
                            <input type="hidden" name="id_sitio" value="{{$site->id}}">
                            <div class="row">
                                <div class="col-md-12 text-center mt-4">
                                    <button type="submit" class="btn btn-secondary">Registrarse</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>    
    </div>

</x-app-layout>
