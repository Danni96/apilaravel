<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carros</title>
</head>
<body>
    <h1>Lista de carros</h1>

    <table class="table table-striped table-bordered table-hover">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fabricante</th>
                <th scope="col">Modelo</th>
                <th scope="col">Año</th>
                <th scope="col">Color</th>
                {{-- <th scope="col" colspan="2">Opciones</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->make }}</td>
                <td>${{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->color }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>            
</body>
</html>