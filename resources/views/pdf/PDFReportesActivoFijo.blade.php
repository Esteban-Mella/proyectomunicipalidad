<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<style>
    .center {
        text-align: center;
    }

    .banner{
        position: absolute;
        left: 0;
        width: 90%;
        text-align: center;
        opacity: 65%;
        left: 20px;
    }

   .contenedor{
        position: absolute;
        display: flex;
        display: inline-block;
        text-align: center;
        align-content: center;
        left: 8px;

    }

    .contenedor-tablas{
        display: flex;
        align-items: center;
        align-content: center;
        align-self: auto;
        width: 100%;

    }

    table {
        width: 700px;
        border-left: 0.01em solid #000000;
        border-right: 0;
        border-top: 0.01em solid #000000;
        border-bottom: 0;
        border-collapse: collapse;
    }
    table td,
    table th {
        width: 100%;
        text-align: left;
        border-left: 0;
        border-right: 0.01em solid #000000;
        border-top: 0;
        border-bottom: 0.01em solid #000000;
    }

    .th1{
        height: 30px;
        width: 100px;
    }
    .th2{
        height: 30px;
        width: 250px;
    }
    .th3{
        height: 30px;
    }

    .texto-fecha{
        position: absolute;
        bottom: 10%;
        text-align: left;
        left: 10px;
    }

    .texto{

            text-align: left;
            left: 10px;
        }
    .texto-footer{
        position: absolute;
        text-align: left;
        top: 45px;
        left: 20px;
        color: gray;
        font-size: 14px;
    }

    .tablaFirmas{
        width: 700px;
        border-left: 0.01em solid #000000;
        border-right: 0;
        border-top: 0.01em solid #000000;
        border-bottom: 0;
        border-collapse: collapse;
    }
    .thFirma{
        width: 100%;
        height: 160px;
        text-align: left;
        border-left: 0;
        border-right: 0.01em solid #000000;
        border-top: 0;
        border-bottom: 0.01em solid #000000;

    }
    .FirmasDocumento{
        position: absolute;
        bottom: 20%;
        left: 10px;
    }
    .rut{
        margin-left: 10px;
    }

    footer {
        text-align: center;
        position: absolute;
        left: 0;
        bottom: -40px;
        width: 100%;
        opacity: 70%;
   }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reportes de Activo fijo</title>
</head>

<body>

    <div class="banner">
        <img src="{{URL::asset('/recursosImagenes/banner.svg')}}" />
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="center">
        <h1><u>Historial de Activo fijo</u></h1>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div class="contenedor">

        <div class="contenedor-tablas">
            <table id="tablaActivoFijo" class="table table-striped border rounded-4">

                <thead>
                <tr >
                    <th scope="col">id</th>
                    <th scope="col">N° de serie Equipos</th>
                    <th scope="col">N° Activo fijo Equipos</th>
                    <th scope="col">N° de Inventario Equipos</th>
                    <th scope="col">Tipo Equipo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Fecha</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($datosTabla as $historial)
                            <tr style="max-height: 100px;">
                                <th scope="row">{{$historial[0]}}</th>
                                <td>{{$historial[1]}}</td>
                                <td>{{$historial[2]}}</td>
                                <td>{{$historial[3]}}</td>
                                <td>{{$historial[4]}}</td>
                                <td>{{$historial[5]}}</td>
                                <td>{{$historial[7]}}</td>
                            </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



        <div class="texto-fecha">
            @php
                $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                $dia =  date("d");
                $mes = date("m");
                $year =date("Y");

                if ($dia<=31 && $mes <= 12) {
                    echo '<b>Puerto Varas</b>, '. $dia ." de ". $meses[$mes - 1] ." del ". $year;
                }
                else{
                    echo "Puerto Varas, ____________________________________.";
                }

            @endphp
        </div>


</body>
<footer>
    <div class="container">
        <img src="{{URL::asset('/recursosImagenes/footer.svg')}}" />
        <div class="texto-footer">
            Departamento de Tecnologías de la Información <br>
            Fono: 65 2 361103 – 65 2 361109 – 65 2 361214 – 65 2 361397 <br>
            San Francisco 413 <br>
            Puerto Varas <br>
        </div>

  </footer>

    </div>


</html>
