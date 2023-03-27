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
        <a class="btn btn-primary" style="width: 20%" href="/">Inicio</a>


        <div class="container-sd">
            <h1>Añadir peliculas</h1>



              <div class="row mt-2 ">
                <div class="col-3 mt-3">
                    <div class="card " style="width: 18rem; ">
                        <img src="img/placeholder.png" class="card-img-top" alt="...">
                    </div>
                </div>
                
                <div class="col-3 mt-5">
                    <button type="button" class="btn btn-warning">(Click aquí para añadir una imagen)</button>
                </div>
             </div>

              <div class="row mt-2">
                <div class="col-1 mt-3">

                    <div class="row">
                        <h4>Titulo:</h4>
                    </div>
                    <div class="row">
                        <h4>Año:</h4>
                    </div>
                    <div class="row">
                        <h4>Duración:</h4>
                    </div>
                    <div class="row">
                        <h4>Director:</h4>
                    </div>
                    <div class="row">
                        <h4>Géneros:</h4>
                    </div>
                </div>
        
                    <div class="col-4 mt-2">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                        <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Seleccionar géneros
                        </a>
                          <div class="collapse" id="collapseExample">
                            <ul class="list-group">
                                <li class="list-group-item">
                                  <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                                  <label class="form-check-label" for="firstCheckbox">Acción</label>
                                </li>
                                <li class="list-group-item">
                                  <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                                  <label class="form-check-label" for="secondCheckbox">Aventura</label>
                                </li>
                                <li class="list-group-item">
                                  <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                                  <label class="form-check-label" for="thirdCheckbox">Ciencia Ficción</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                                    <label class="form-check-label" for="thirdCheckbox">Comedia</label>
                                  </li>
                                  <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                                    <label class="form-check-label" for="thirdCheckbox">Drama</label>
                                  </li>
                                  <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                                    <label class="form-check-label" for="thirdCheckbox">Fantasía</label>
                                  </li>

                              </ul>
                          </div>

                    </div>

                    
            </div>
            
            <div class="col-4 mt-2">
                <a class="btn btn-primary" href="/">Añadir película</a>

            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>