
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3" style="width: 80%">
        <button type="button" class="btn btn-primary" style="width: 20%">Inicio</button>

        <div class="row mt-2 ">
          <h1>Administrar películas</h1>
          <div class="col-4 mt-3">
            <a href="#" class="btn btn-primary">Añadir peliculas</a>
          </div>
        </div>

                <div class="container text-center">
                  <div class="col align-self-center">
                      <div class="row row-cols-auto mt-3">
                      @foreach($peliculas as $pelicula)
                          <div class="card" style="width: 13rem;">
                              <img src="img/{{$pelicula->poster}}" class="card-img-top mt-2" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">{{$pelicula->titulo}}</h5>
                                <a href="#" class="btn btn-primary">Editar</a>
                              </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                  </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>