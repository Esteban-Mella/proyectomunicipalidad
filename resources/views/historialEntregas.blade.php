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

                @foreach ($historialEntregas as $historial)
                        <tr style="max-height: 100px;">
                            <th scope="row">{{$historial->id}}</th>
                            <td>{{str_replace(",", " ", $historial->nro_inventario)}}</td>
                            <td>{{str_replace(",", " ", $historial->nro_activo_fijo)}}</td>
                            <td>{{str_replace(",", " ", $historial->nro_serie)}}</td>
                            <td>{{str_replace(",", " ", $historial->nombre_equipo)}}</td>
                            <td>{{$historial->asignado}}</td>

                            <td class="d-flex justify-content-center"><a class="bi bi-cloud-arrow-down-fill h1 text-success " target="_blank"href="{{URL::asset('/storage/documentos/pdf-entrega/'.$historial->ruta_pdf)}}"></a></td>
                        </tr>


                        @endforeach
            </tbody>
        </table>
        <div>
            {{ $historialEntregas->links() }}
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
        $.ajax({
                    url: "{{ route('busquedaHistorialEntregas') }}",
                    type: "post",
                    dataType: "json",
                    data: {_token: "{{ csrf_token() }}", text: buscarText},
                success: function (response) {
                        $("#historialEquipos").html(response);
                    }
            })
    });
    });

</script>

</x-layouts>
