<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop di prodotti</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar/>
    {{$slot}}
    
    <footer class="container-fluid">
        <p class="text-center py-0 mt-3">Lo shop dei prodotti S.p.A. | Via Flaminia 123, 00135 Roma RM | Tel. +39 351 956 1478 | P.IVA 12556984588</p>
    </footer>
</body>
</html>

