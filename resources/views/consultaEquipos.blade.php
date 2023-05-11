<x-layouts
    title="Consulta Equipos"
>

{{-- inicio barra de busqueda --}}
<section class="mx-3 mb-3 p-3 border rounded-3">
    <div class="col">
        <h3>Equipos disponibles y no disponibles</h3>

        <div class="form-outline">
            <input type="text" id="busquedaEquipos" class="form-control mt-3" placeholder="busqueda de equipos" aria-label="Search" />
        </div>
        <h4 class="mt-3">Mostrar:</h4>
        <select id="selectShow" class="form-select mt-3 mb-3 w-25">
            <option value="0">Todos</option>
            <option value="1">Equipos Disponibles</option>
            <option value="2">Equipos no Disponibles</option>
          </select>
{{-- fin barra de busqueda --}}

    <div class="col" >
        <h3 class="mb-3 mt-3">Busqueda de equipos</h3>
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
                @foreach ($equipos as $equipo)
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
            {{ $equipos->links() }}
        </div>


    </section>


    <script>
        /* busqueda de equipos en la tabla de equipos */
        $(document).ready(function() {
        $('#busquedaEquipos').on('input', function() {

            var buscarText = $('#busquedaEquipos').val().toLowerCase();
            var filtro = $('#selectShow option:selected').val().toLowerCase();

            $.ajax({
                    url: "{{ route('busquedaPorEstado') }}",
                    type: "post",
                    dataType: "json",
                    data: {_token: "{{ csrf_token() }}", filtro: filtro, buscarText: buscarText},
                success: function (response) {
                        $("#formulario-datos").html(response);
                    }
            })

        });

        $('#selectShow').on('change', function() {

            var buscarText = $('#busquedaEquipos').val().toLowerCase();
            var filtro = $('#selectShow option:selected').val().toLowerCase();

            $.ajax({
                    url: "{{ route('busquedaPorEstado') }}",
                    type: "post",
                    dataType: "json",
                    data: {_token: "{{ csrf_token() }}", filtro: filtro, buscarText: buscarText},
                success: function (response) {
                        $("#formulario-datos").html(response);
                    }
            })

        });

        });

    </script>



</x-layouts>

