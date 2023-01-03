{{-- Vista de Locales --}}
VISTA LOCAL
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Logo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Propietario</th>
                <th scope="col">Direccion</th>
                <th scope="col">accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Locales as $local)
            <tr class="">
                <td>{{$local->id}}</td>
                <td>{{$local->Logo}}</td>
                <td>{{$local->Nombre}}</td>
                <td>{{$local->Propietario}}</td>
                <td>{{$local->Direccion}}</td>
                <td> <input type="button" name="" value="Editar">
                    <form action="{{url('/locales/'.$local->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('¿Quieres eliminar?')" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
