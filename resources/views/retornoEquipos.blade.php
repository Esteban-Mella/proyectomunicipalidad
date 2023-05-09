<x-layouts
    title="Entrega Equipos"
>

{{-- inicio barra de busqueda --}}
<section class="mx-3 mb-3 p-3 border rounded-3">
    <H3>Formulario para Retornar Equipos</H3>
    <div class="d-flex ml-auto justify-content-end">
        <a class="btn btn-secondary rounded p-2 px-2" href="{{route('historialRetorno')}}">
            <i class="bi bi-clock-history"></i>
            Historial
        </a>
    </div>

    <div class="container-fuid">
        <div class="row">
            <div class="col-6">
                <h3>Busqueda de Personal</h3>
                <div class="form-outline mb-3">
                    <input type="text" id="busquedaPersonal" class="form-control" placeholder="Busqueda de Personal" />
                </div>

                <select id="usuarioSelected" class="form-select mb-3">
                    <option value="">Busqueda de personal</option>
                    @foreach ($usuarios as $usuario )
                    <option value="{{$usuario->id}}">{{$usuario->nombre}} {{$usuario->apellido}}</option>
                    @endforeach
                  </select>
            </div>

            <div class="col">
                <h3>Busqueda de Equipos</h3>

                <div class="form-outline">
                    <input id="busquedaEquipos" class="form-control" placeholder="busqueda de Equipos"  />
                </div>
            </div>

        </div>
    </div>


    {{-- fin barra de busqueda --}}
    <div class="container-fluid ">

        <div class="row border rounded-3">
            <div class="col">
                {{-- tabla para generar lista recuperando equipos que seran entregados   --}}
                <form action="" method="POST">
                    @csrf {{-- importante añadir esto para evitar errores de ataques csrf --}}

                    <h3 name="title" class="mb-3 mt-3">Equipos para asignar</h3>

                    <table id="tabla-datos" class="table table-striped border rounded-3">
                        @csrf
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">N° de Inventario</th>
                            <th scope="col">N° Activo fijo</th>
                            <th scope="col">N° serie</th>
                            <th scope="col">Nombre Equipo</th>
                            <th scope="col">Marca Equipo</th>
                            <th scope="col">Asignado</th>
                            <th scope="col">operativo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </form>

            {{-- tabla para buscar equipos --}}

            <div class="col">
                <h3 class="mb-3 mt-3">Busqueda de equipos</h3>
                <table id="formulario-datos" class="formulario-datos table table-striped border rounded-4">

                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">N° de Inventario</th>
                        <th scope="col">N° Activo fijo</th>
                        <th scope="col">N° de serie</th>
                        <th scope="col">Nombre Equipo</th>
                        <th scope="col">Marca Equipo</th>
                        <th scope="col">Asignado</th>
                        <th scope="col">operativo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipos as $equipo)
                        <tr>
                            <th scope="row">{{$equipo->id}}</th>
                            <td>{{$equipo->nro_inventario}}</td>
                            <td>{{$equipo->nro_activofijo}}</td>
                            <td>{{$equipo->nro_serie}}</td>
                            <td>{{$equipo->tipo_equipo}}</td>
                            <td>{{$equipo->marca}}</td>
                            <td>{{$equipo->asignado}}</td>
                            <td>{{$equipo->operativo}}</td>
                            <td>{{-- <button type="button" class="btn btn-success">Añadir</button> --}}
                                <a id="agregar-dato" class="bi bi-file-earmark-plus-fill h1 text-success enviar-dato" href="" onclick="obtenerDatos(this)"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="d-flex ml-auto justify-content-end pt-3">

        <button id="btn-preview" class="btn btn-secondary rounded p-2 px-2 mx-4 ">
            <i class="bi bi-journal-check"></i>
            Previsualizar formulario </button>

        <button id="btn-enviar-datos" class="btn btn-success rounded p-2 px-2">
            <i class="bi bi-journal-check"></i>
            Enviar datos</button>

    </div>


</section>

<script>
    $(document).ready(function() {
    $('#busquedaPersonal').on('input', function() {
        console.log(jQuery);
        var input = $(this).val().toLowerCase();

        $('#usuarioSelected option').each(function() {
            var texto = $(this).text().toLowerCase();
            if (texto.indexOf(input) !== -1) {
            $(this).show();
            $(this).prop('selected', true);
            } else {
            $(this).hide();
            }
        });

    });
});

</script>



<script>
    /* busqueda de equipos en la tabla de equipos */
    $(document).ready(function() {
        $('#busquedaEquipos').on('input', function() {
            var buscarTexto = $(this).val().toLowerCase();
            $.ajax({
                url: "{{ route('equiposBusqueda') }}",
                type: "post",
                dataType: "json",
                data: {_token: "{{ csrf_token() }}", text: buscarTexto },
                success: function (response) {
                    $("#formulario-datos").html(response);
                }
            })

        });
    });

</script>

{{-- Area de scripts para funcionalidad de pagina --}}

<script>
    $.ajaxSetup({/* solucion error 419 controlador a form por ajax */
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function obtenerDatos(enlace) {
        event.preventDefault();
        var fila = enlace.parentNode.parentNode;
        var id = fila.cells[0].innerHTML;
        var nroInventario = fila.cells[1].innerHTML;
        var nroActivoFijo = fila.cells[2].innerHTML;
        var nroSerie = fila.cells[3].innerHTML;
        var nombreEquipo = fila.cells[4].innerHTML;
        var marcaEquipo = fila.cells[5].innerHTML;
        var asignado = fila.cells[6].innerHTML;
        var operativo = fila.cells[7].innerHTML;

        $('#tabla-datos tbody').append(
            '<tr>'+
                '<td>'+id+'</td>'+
                '<td>'+nroInventario+'</td>'+
                '<td>'+nroActivoFijo+'</td>'+
                '<td>'+nroSerie+'</td>'+
                '<td>'+nombreEquipo+'</td>'+
                '<td>'+marcaEquipo+'</td>'+
                '<td>'+asignado+'</td>'+
                '<td>'+operativo+ '</td>'+
                '<td><a onclick="eliminarFila(this)" class="bi bi-file-earmark-x-fill h1 text-danger" href="#"></a></td>'+
            '</tr>'
        );
    }

    /* funcionalidad de boton para quitar elementos de la tabla de prestamos */
    function eliminarFila(boton) {
        var fila = boton.parentNode.parentNode;
        fila.parentNode.removeChild(fila);
    }

    /* funcion para envio de datos desde la tabla html y el campo select de personal a dompdf */

    $('#btn-enviar-datos').click(function() {

    var usuarioPrestamo = $('#usuarioSelected option:selected').text();
    var tipoForm='Retorno';
    var informacion=[usuarioPrestamo,tipoForm];
    var datosTabla = [];

    $('#tabla-datos tbody tr').each(function() {
        var fila = [];
    $(this).find('td').each(function() {
        fila.push($(this).text());
    });
    datosTabla.push(fila);
    });

    if(datosTabla.length > 0 && usuarioPrestamo!=='Busqueda de personal'){
        $.ajax({
        type: "POST",
            url: "{{ route('descargarpdf') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "datos": datosTabla,
                "informacion": informacion
            },
            xhrFields: {
            responseType: 'blob'
        },

            success: function(response) {
                var blob = new Blob([response], { type: 'application/pdf' });
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = 'Certificado de Entrega '+Date()+'.pdf';
                link.click();
                Swal.fire({
                    title: 'Formulario',
                    text: 'Formulario Generado correctamente!',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });
            }
        });
    }else{
        Swal.fire({
                    title: 'Error!',
                    text: 'Revise que todos los campos se encuentren completos!',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });

    }
});

$('#btn-preview').click(function() {
    var usuarioPrestamo = $('#usuarioSelected option:selected').text();
    var tipoForm='Entrega';
    var informacion=[usuarioPrestamo, tipoForm];
    var datosTabla = [];
    $('#tabla-datos tbody tr').each(function() {
        var fila = [];
    $(this).find('td').each(function() {
        fila.push($(this).text());
    });
    datosTabla.push(fila);
    });

    if(datosTabla.length > 0 && usuarioPrestamo!=='Busqueda de personal'){
        $.ajax({
        type: "POST",
            url: "{{ route('previewPDF') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "datos": datosTabla,
                "informacion": informacion
            },
            xhrFields: {
            responseType: 'blob'
        },

            success: function(response) {
                var blob = new Blob([response], { type: 'application/pdf' });
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.setAttribute('target', '_blank');
                link.click();

            }
        });

    }else{
        Swal.fire({
                    title: 'Error!',
                    text: 'Revise que todos los campos se encuentren completos!',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
    }
});


</script>



</x-layouts>
