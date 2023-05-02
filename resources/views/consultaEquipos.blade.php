<x-layouts
    title="Consulta Equipos"
>

{{-- inicio barra de busqueda --}}
<section class="mx-3 mb-3 p-3 border rounded-3">
    <div class="col">
        <h3>Equipos disponibles y no disponibles</h3>

        <div class="form-outline">
            <input type="search" id="form1" class="form-control" placeholder="busqueda de equipos" aria-label="Search" />
        </div>
    </div>

    <div class="col" >
        <h3 class="mb-3 mt-3">Busqueda de equipos</h3>
        <table class="table table-striped border rounded-4">

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
                    <td>Moises David</td>
                    <td>SI</td>
                    <td>sI</td>
                    <td class="d-flex justify-content-center"><i class="bi bi-calendar-check-fill h1 text-success " href="#"></i></td>
                </tr>
                {{-- prueba no disponible --}}
                <tr>
                    <th scope="row">1</th>
                    <td>234-aasd-5231-2324</td>
                    <td>1-002-332-004-451</td>
                    <td>DTI-2020-600</td>
                    <td>Sin Grafica</td>
                    <td>LG</td>
                    <td>Monitor</td>
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

            </tbody>
        </table>

        <label for="buscar">Buscar:</label>
        <input type="text" id="buscar">

        <table id="tabla">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Edad</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>25</td>
            </tr>
            <tr>
              <td>Jane</td>
              <td>Doe</td>
              <td>30</td>
            </tr>
            <tr>
              <td>Bob</td>
              <td>Smith</td>
              <td>35</td>
            </tr>
          </tbody>
        </table>

        <script>

$(document).ready(function() {
  $('#buscar').on('input', function() {
    var buscarText = $(this).val().toLowerCase();
    $('#tabla tbody tr').filter(function() {
      var tdText = $(this).find('td:nth-child(1), td:nth-child(2)').text().toLowerCase();
      return tdText.indexOf(buscarText) === -1;
    }).hide();
    $('#tabla tbody tr').filter(function() {
      var tdText = $(this).find('td:nth-child(1), td:nth-child(2)').text().toLowerCase();
      return tdText.indexOf(buscarText) !== -1;
    }).show();
  });
});

        </script>

</x-layouts>

