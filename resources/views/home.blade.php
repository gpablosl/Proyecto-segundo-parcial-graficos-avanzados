<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-sm mt-5" style="width: 80%">
        <button type="button" class="btn btn-primary" style="width: 20%">Inicio</button>

        <div class="container-sd text-center">
            <div class="row">
                <div class="col mt-2">
                    <button type="button" class="btn btn-warning" style="width: 100%">Administrar peliculas</button>
                </div>
                <div class="col mt-2">
                    <button type="button" class="btn btn-warning" style="width: 100%">Administrar proyecciones</button>
                </div>
                <div class="col mt-2">
                    <button type="button" class="btn btn-warning" style="width: 100%">Administrar generos</button>
                </div>
            </div>
        </div>

        <div class="container-sd">
        
            <tbody>
                @foreach($peliculas as $pelicula)

                @endforeach
            </tbody>
            
              <div class="row bg-dark text-white mt-2">
                    <div class="col-4 mt-2">
                        <div class="card" style="width: 18rem;">
                            <img src="img/{{$pelicula->poster}}" class="card-img-top" alt="...">
                        </div>
                    </div>
        
                    <div class="col mt-2">
                        <div class="row">
                            <h1>{{$pelicula->titulo}}</h1>
                        </div>
                        <div class="row">
                            <h4>Año: {{$pelicula->anio}}</h4>
                        </div>
                        <div class="row">
                            <h4>Proyección: -----</h4>
                        </div>
                        <div class="row">
                            <h4>Hora: ---</h4>
                        </div>
                        <div class="row">
                            <h4>Duración: {{$pelicula->duracion_minutos}}</h4>
                        </div>
                        <div class="row">
                            <h4>Géneros: ----</h4>
                        </div>
                        <div class="row">
                            <h4>Director: {{$pelicula->director}}</h4>
                        </div>
                    </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

