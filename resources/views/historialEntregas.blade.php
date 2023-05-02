<x-layouts
    title="Historial de Asignaciones"
>




{{-- inicio barra de busqueda --}}
<section class="mx-3 mb-3 p-3 border rounded-3">
    <a class="nav-link" href="{{route('entregaEquipos')}}" aria-current="page">Regresar</a>
    <h3 class="mt-2 mb-4">Historial de asignacion de equipos</h3>
    <div class="container-fuid">
        <div class="col">
            <h3>Busqueda</h3>
            <div class="form-outline">
                <input type="text" id="busquedaEquipos" class="form-control" placeholder="busqueda en historial de entregas" />
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
                <tr>
                    <th scope="row">1</th>
                    <td>DTI-2020-006</td>
                    <td>1-002-002-004-001</td>
                    <td>dfs-awas5-4554a-sqds</td>
                    <td>Impresora</td>
                    <td>En Bodega</td>
                    <td class="d-flex justify-content-center"><a class="bi bi-cloud-arrow-down-fill h1 text-success " href="#"></a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>DTI-2020-312</td>
                    <td>1-01232-002-0124-1201</td>
                    <td>dasdfs-aasds5-45d54a-sqds</td>
                    <td>Computador</td>
                    <td>En Bodega</td>
                    <td class="d-flex justify-content-center"><a class="bi bi-cloud-arrow-down-fill h1 text-success " href="#"></a></td>
                </tr>
            </tbody>
        </table>

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
