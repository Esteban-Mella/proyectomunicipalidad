@php
    use Barryvdh\DomPDF\Facade\Pdf;/* libreria Dompdf retirar si se utiliza otro controlador para generar documentos */

@endphp
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Boostrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- boostrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>{{-- dcn sweet alert reemplazar si no se utiliza y se cambia por modales, el mismo se encarga de los imports no sera necesario eliminarlos manualmente para produccion instalar el paqiede de sweetalert2--}}

   {{--  <script src="https://cdn.jsdelivr.net/npm/file-saver@2.0.5/dist/FileSaver.min.js"></script>  --}}  {{-- se uso para pruebas se reemplazo por metodos nativos dompdf js--}}



    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Intranet :: {{$title ?? 'recursos'}} </title>

</head>

<body class="bg-light p-2 text-dark">
    <x-navegacion/>
    {{$slot}}
</body>

<x-footer/>

</html>

