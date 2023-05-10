{{-- se utiliza para retornar las tablas de busqueda e ingresarlas en la tabla original de la solicitud como una vista --}}
<table id="formulario-datos" class="table table-striped border rounded-4">

    <thead>
    <tr >
        <th scope="col">id</th>
        <th scope="col">N° de serie Equipos</th>
        <th scope="col">N° Activo fijo Equipos</th>
        <th scope="col">N° de Inventario</th>
        <th scope="col">Tarjeta Grafica</th>
        <th scope="col">Marca</th>
        <th scope="col">Tipo Equipo</th>
        <th scope="col">S.O</th>
        <th scope="col">Procesador</th>
        <th scope="col">Procesador Generacion</th>
        <th scope="col">RAM</th>
        <th scope="col">HDD</th>
        <th scope="col">Asignado</th>
        <th scope="col">Inventariado</th>
        <th scope="col">Operativo</th>
        <th scope="col">disponible</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($data as $equipo)
                <tr style="max-height: 100px;">
                    <th scope="row">{{$equipo->id}}</th>
                    <td>{{$equipo->nro_serie}}</td>
                    <td>{{$equipo->nro_activofijo}}</td>
                    <td>{{$equipo->nro_inventario}}</td>
                    <td>{{$equipo->tarjeta_grafica}}</td>
                    <td>{{$equipo->marca}}</td>
                    <td>{{$equipo->tipo_equipo}}</td>
                    <td>{{$equipo->sistema_operativo}}</td>
                    <td>{{$equipo->procesador}}</td>
                    <td>{{$equipo->sistema_operativo}}</td>
                    <td>{{$equipo->ram}}</td>
                    <td>{{$equipo->hdd}}</td>
                    <td>{{$equipo->asignado}}</td>
                    <td>{{$equipo->inventariado}}</td>
                    <td>{{$equipo->operativo}}</td>

                    @if(strtolower($equipo->asignado) === 'en bodega')
                        <td class="d-flex justify-content-center"><i class="bi bi-calendar-check-fill h1 text-success " href="#"></i></td>
                    @else
                        <td class="d-flex justify-content-center"><i class="bi bi-calendar-check-fill h1 text-danger " href="#"></i></td>
                    @endif
                </tr>
        @endforeach



    </tbody>
</table>
<div>
    {{ $data->links() }}
</div>
