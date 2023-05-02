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
            <option value="">Todos</option>
            <option value="En Bodega">Equipos Disponibles</option>
            <option value="noDisponibles">Equipos no Disponibles</option>

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
                {{-- prueba disponible --}}
                <tr>
                    <th scope="row">1</th>
                    <td>dfs-awas5-4554a-sqds</td>
                    <td>1-002-002-004-001</td>
                    <td>DTI-2020-006</td>
                    <td>Sin Grafica</td>
                    <td>LG</td>
                    <td>Monitor</td>
                    <td>No Aplica</td>
                    <td>Sin procesador</td>
                    <td>n/d</td>
                    <td>Sin R.A.M</td>
                    <td>n/d</td>
                    <td>En Bodega</td>
                    <td>SI</td>
                    <td>sI</td>
                    <td class="d-flex justify-content-center"><i class="bi bi-calendar-check-fill h1 text-success " href="#"></i></td>
                </tr>
                {{-- prueba no disponible --}}
                <tr>
                    <th scope="row">1</th>
                    <td>234-aasd-5231-2324</td>
                    <td>1-022-332-004-451</td>
                    <td>DTI-2020-600</td>
                    <td>Sin Grafica</td>
                    <td>samsung</td>
                    <td>monitor</td>
                    <td>No Aplica</td>
                    <td>Sin procesador</td>
                    <td>n/d</td>
                    <td>Sin R.A.M</td>
                    <td>n/d</td>
                    <td>Juan Pedro</td>
                    <td>SI</td>
                    <td>sI</td>
                    <td class="d-flex justify-content-center"><i class="bi bi-calendar-check-fill h1 text-danger " href="#"></i></td>
                </tr>

                <tr>
                    <th scope="row">1</th>
                    <td>201502-400</td>
                    <td>54-5465-54642-5454</td>
                    <td>nvr-2025-600</td>
                    <td>Sin Grafica</td>
                    <td>lexmar</td>
                    <td>impresora</td>
                    <td>No Aplica</td>
                    <td>Sin procesador</td>
                    <td>n/d</td>
                    <td>Sin R.A.M</td>
                    <td>n/d</td>
                    <td>En Bodega</td>
                    <td>SI</td>
                    <td>sI</td>
                    <td class="d-flex justify-content-center"><i class="bi bi-calendar-check-fill h1 text-success " href="#"></i></td>
                </tr>

            </tbody>
        </table>

    </section>


    <script>
        /* busqueda de equipos en la tabla de equipos */
        $(document).ready(function() {
        $('#busquedaEquipos').on('input', function() {
            var buscarText = $(this).val().toLowerCase();
            var filtro = $('#selectShow option:selected').val().toLowerCase();
            $('#formulario-datos tbody tr').filter(function() {
                var tdText = $(this).find('td:nth-child(1), td:nth-child(2), td:nth-child(3), td:nth-child(4), td:nth-child(6), td:nth-child(7), td:nth-child(13), td:nth-child(15)').text().toLowerCase();
                    return tdText.indexOf(buscarText) === -1;
                }).hide();

            $('#formulario-datos tbody tr').filter(function() {
                var tdText = $(this).find('td:nth-child(1), td:nth-child(2), td:nth-child(3), td:nth-child(4), td:nth-child(6), td:nth-child(7), td:nth-child(13), td:nth-child(15)').text().toLowerCase();
                return tdText.indexOf(buscarText) !== -1;
            }).show();

        });
        });

    </script>
    {{-- script de selector para estados todos, disponible y no disponible --}}
    <script>
        $(document).ready(function() {
            $('#selectShow').on('change', function() {
                var buscarText = $(this).val().toLowerCase();

                if(buscarText=='en bodega' || buscarText==''){
                    console.log(buscarText);
                    $('#formulario-datos tbody tr').filter(function() {
                        var tdText = $(this).find('td:nth-child(13)').text().toLowerCase();
                        return tdText.indexOf(buscarText) === -1;
                    }).hide();
                    $('#formulario-datos tbody tr').filter(function() {
                        var tdText = $(this).find('td:nth-child(13)').text().toLowerCase();
                        return tdText.indexOf(buscarText) !== -1;
                    }).show();

                }else if(buscarText=='nodisponibles'){
                    var buscarText="En Bodega".toLowerCase();
                    $('#formulario-datos tbody tr').filter(function() {
                        var tdText = $(this).find('td:nth-child(13)').text().toLowerCase();
                        return tdText.indexOf(buscarText) === -1;
                    }).show();
                    $('#formulario-datos tbody tr').filter(function() {
                        var tdText = $(this).find('td:nth-child(13)').text().toLowerCase();
                        return tdText.indexOf(buscarText) !== -1;
                    }).hide();
                }

            });
        });


    </script>

</x-layouts>

