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
            <div class="form-outline">
                <input type="search" id="form1" class="form-control" placeholder="busqueda de elemento" aria-label="Search" />
            </div>
        </div>
    </div>


     {{-- tabla para buscar asignaciones Recordar el orden por fecha --}}

     <div class="col" >
        <h3 class="mb-3 mt-3">Busqueda en Historial</h3>
        <table class="table table-striped border rounded-4">

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

            </tbody>
        </table>

    </div>
</div>
</div>

</section>

</x-layouts>
