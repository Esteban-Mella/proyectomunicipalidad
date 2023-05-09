<x-layouts
    title="Historial de Retorno Equipos"
>

{{-- inicio barra de busqueda --}}
<section class="mx-3 mb-3 p-3 border rounded-3">
    <a  href="{{route('retornoEquipos')}}">Regresar</a>

    <H3 class="mt-2 mb-4">Historial de Retorno de Equipos a informatica</H3>

    <div class="container-fuid">
        <div class="col">
            <h3>Busqueda</h3>
            <div class="form-outline mb-3">
                <input type="text" id="busquedaEquipos" class="form-control" placeholder="Busqueda en historial de retornos" />
            </div>
        </div>
    </div>


     {{-- tabla para buscar asignaciones Recordar el orden por fecha --}}

     <div class="col" >
        <h3 class="mb-3 mt-3">Busqueda en Historial</h3>
        <table id="historialEquipos" class="table table-striped border rounded-4">

            <thead>
            <tr >
                <th scope="col">id</th>
                <th scope="col">N° de Inventario Equipos</th>
                <th scope="col">N° Activo fijo Equipos</th>
                <th scope="col">N° de serie Equipos</th>
                <th scope="col">Detalle Equipos</th>
                <th scope="col">Asignado</th>
                <th scope="col">Descargar Detalle</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($historialRetorno as $historial)
                        <tr style="max-height: 100px;">
                            <th scope="row">{{$historial->id}}</th>
                            <td>{{str_replace(",", " ", $historial->nro_inventario)}}</td>
                            <td>{{str_replace(",", " ", $historial->nro_activo_fijo)}}</td>
                            <td>{{str_replace(",", " ", $historial->nro_serie)}}</td>
                            <td>{{str_replace(",", " ", $historial->nombre_equipo)}}</td>
                            <td>{{$historial->asignado}}</td>

                            <td class="d-flex justify-content-center"><a class="bi bi-cloud-arrow-down-fill h1 text-success " href="#"></a></td>
                        </tr>


                        @endforeach

            </tbody>
        </table>
        <div>
            {{ $historialRetorno->links() }}
        </div>
    </div>
</div>
</div>

</section>

<script>
    /* busqueda de equipos en la tabla */
    $(document).ready(function() {
    $('#busquedaEquipos').on('input', function() {
        var buscarText = $(this).val().toLowerCase();
        $('#historialEquipos tbody tr').filter(function() {
            var tdText = $(this).find('td:nth-child(1), td:nth-child(2), td:nth-child(3), td:nth-child(4), td:nth-child(5)').text().toLowerCase();
                return tdText.indexOf(buscarText) === -1;
            }).hide();
        $('#historialEquipos tbody tr').filter(function() {
            var tdText = $(this).find('td:nth-child(1), td:nth-child(2), td:nth-child(3), td:nth-child(4), td:nth-child(5)').text().toLowerCase();
            return tdText.indexOf(buscarText) !== -1;
        }).show();
    });
    });

</script>

</x-layouts>
