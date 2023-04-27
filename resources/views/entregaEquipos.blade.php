<x-layouts
    title="Entrega Equipos"
>

{{-- inicio barra de busqueda --}}
<section class="mx-3 mb-3 p-3 border rounded-3">
    <H3>Formulario para entrega de Equipos</H3>
    <div class="d-flex ml-auto justify-content-end">
        <a class="btn btn-secondary rounded p-2 px-2" href="{{route('historialEntregas')}}">
            <i class="bi bi-clock-history"></i>
            Historial
        </a>
    </div>

    <div class="container-fuid">
        <div class="row">
            <div class="col-6">
                <h3>Busqueda de Personal</h3>
                <div class="form-outline mb-3">
                    <input type="search" id="form1" class="form-control" placeholder="Busqueda de Personal" aria-label="Search" />
                </div>
                <select class="form-select mb-3" aria-label="">
                    <option selected>Busqueda de personal</option>
                    <option value="1">Juan Maestro</option>
                    <option value="2">Pedro Juan</option>
                    <option value="3">Diego Roberto</option>
                  </select>
            </div>

            <div class="col">
                <h3>Busqueda de Equipos</h3>

                <div class="form-outline">
                    <input type="search" id="form1" class="form-control" placeholder="busqueda de elemento" aria-label="Search" />
                </div>
            </div>

        </div>
    </div>


    {{-- fin barra de busqueda --}}
    <div class="container-fluid ">

        <div class="row border rounded-3">
            <div class="col">
                {{-- tabla para generar lista --}}
                <h3 class="mb-3 mt-3">Equipos para asignar</h3>
                <table class="table table-striped border rounded-3">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">N° de Inventario</th>
                        <th scope="col">N° Activo fijo</th>
                        <th scope="col">N° serie</th>
                        <th scope="col">Nombre Equipo</th>
                        <th scope="col">Asignado</th>
                        <th scope="col">operativo</th>
                        <th scope="col">Acciones</th>
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
                        <td>Si</td>
                        <td><a class="bi bi-file-earmark-x-fill h1 text-danger" href="#"></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            {{-- tabla para buscar equipos --}}

            <div class="col">
                <h3 class="mb-3 mt-3">Busqueda de equipos</h3>
                <table class="table table-striped border rounded-4">

                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">N° de Inventario</th>
                        <th scope="col">N° Activo fijo</th>
                        <th scope="col">N° de serie</th>
                        <th scope="col">Nombre Equipo</th>
                        <th scope="col">Asignado</th>
                        <th scope="col">operativo</th>
                        <th scope="col">Acciones</th>
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
                            <td>Si</td>
                            <td>{{-- <button type="button" class="btn btn-success">Añadir</button> --}}
                                <a class="bi bi-file-earmark-plus-fill h1 text-success" href="#"></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>DTI-2020-312</td>
                            <td>1-01232-002-0124-1201</td>
                            <td>dasdfs-aasds5-45d54a-sqds</td>
                            <td>Computador</td>
                            <td>En Bodega</td>
                            <td>Si</td>
                            <td><a class="bi bi-file-earmark-plus-fill h1 text-success" href="#"></a></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="d-flex ml-auto justify-content-end pt-3">
        <button class="btn btn-success rounded p-2 px-2">
            <i class="bi bi-journal-check"></i>
            Ingresar Solicitud
        </button>
    </div>
</section>
</x-layouts>
