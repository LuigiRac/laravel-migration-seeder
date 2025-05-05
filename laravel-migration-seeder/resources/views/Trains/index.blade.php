<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', "resources/js/app.js"])
    <title>Trains</title>
</head>
<body>
    
    <div class="container mt-5">
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col"><Strong>Azienda Ferroviaria</Strong></th>
                <th scope="col"><Strong>Stazione di partenza</Strong></th>
                <th scope="col"><Strong>Stazione di arrivo</Strong></th>
                <th scope="col"><Strong>Data e orario partenza</Strong></th>
                <th scope="col"><Strong>Data e orario arrivo</Strong></th>
                <th scope="col"><Strong>Codice treno</Strong></th>
                <th scope="col"><Strong>Totale Carrozze</Strong></th>
                <th scope="col"><Strong>Treno in orario</Strong></th>
                <th scope="col"><Strong>Trano cancellato</Strong></th>
              </tr>
            </thead>

            <tbody>
                @foreach ($trains as $train)

              <tr>
                <td>{{$train -> company}}</td>
                <td>{{$train -> departure_station}}</td>
                <td>{{$train -> arrival_station}}</td>
                <td>{{$train -> departure_time}}</td>
                <td>{{$train -> arrival_time}}</td>
                <td>{{$train -> train_code}}</td>
                <td>{{$train -> total_carriages}}</td>
                <td>{{$train -> is_on_time ? 'Si' : 'No'}}</td>
                <td>{{$train -> is_cancelled ? 'Si' : 'No'}}</td>
              </tr>

              @endforeach
            </tbody>
          </table>
    </div>
    