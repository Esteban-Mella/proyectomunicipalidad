@php
    use Barryvdh\DomPDF\Facade\Pdf;/* libreria Dompdf retirar si se utiliza otro controlador para generar documentos */
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Boostrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- boostrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>Intranet- {{$title ?? 'recursos'}} </title>
</head>
<body class="bg-light p-2 text-dark">
    <x-navegacion/>
    {{$slot}}
</body>

<x-footer/>

</html>

