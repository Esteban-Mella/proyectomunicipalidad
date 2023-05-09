<x-layouts
    title="Historial de Retorno Equipos"
>

{{-- inicio barra de busqueda --}}
<section class="mx-3 mb-3 p-3 border rounded-3">
    <a  href="{{route('retornoEquipos')}}">Regresar</a>

    <H3 class="mt-2 mb-4">Historial equipos marcados como no operativos para informar Activo Fijo</H3>

    <div class="container-fuid">
        <div class="col">
            <h3>Busqueda</h3>
            <div class="form-outline mb-3" >
                <input class="mt-3 h2 rounded-3 border border-dark" type="date" id="fecha1" class="form-control" style="width: 300px;"/>
                <input class="h2 mx-3 rounded-3 border border-dark" type="date" id="fecha2" class="form-control" style="width: 300px;" />
                <button id="Aceptar" type="button" class="btn btn-success btn-lg">Buscar</button>
            </div>
        </div>
    </div>


     {{-- tabla para buscar asignaciones Recordar el orden por fecha --}}

     <div class="col" >
        <h3 class="mb-3 mt-3">Busqueda en Historial</h3>
        <table id="tablaActivoFijo" class="table table-striped border rounded-4">

            <thead>
            <tr >
                <th scope="col">id</th>
                <th scope="col">N° de serie Equipos</th>
                <th scope="col">N° Activo fijo Equipos</th>
                <th scope="col">N° de Inventario Equipos</th>
                <th scope="col">Marcado como no operativo</th>
                <th scope="col">Fecha</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($equipos as $historial)
                        <tr style="max-height: 100px;">
                            <th scope="row">{{$historial->id}}</th>
                            <td>{{$historial->nro_serie}}</td>
                            <td>{{$historial->nro_activo_fijo}}</td>
                            <td>{{$historial->nro_inventario}}</td>
                            <td>{{$historial->marcado_no_operativo}}</td>
                            <td>{{$historial->created_at}}</td>
                        </tr>
                @endforeach

            </tbody>
        </table>
        <div>
            {{ $equipos->links() }}
        </div>
    </div>
</div>
</div>

</section>

<script>
    $(document).ready(function() {
        $('#Aceptar').on('click', function() {
            var fecha1 = $('#fecha1').val();
            var fecha2 = $('#fecha2').val();

            $.ajax({
                    url: "{{ route('historialActivoFijo') }}",
                    type: "post",
                    dataType: "json",
                    data: {_token: "{{ csrf_token() }}", fecha1:fecha1, fecha2:fecha2},
                success: function (response) {
                        $("#tablaActivoFijo").html(response);
                    }
            })
        });
    });

</script>

</x-layouts>
