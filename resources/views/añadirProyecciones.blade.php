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


        <div class="container-sd">
            <h1>Añadir proyecciones</h1>

            <div class="row mt-2 ">
                <div class="col-3 mt-3">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Buscar una película" aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-primary">Buscar</button>
                    </div>
                </div>


              <div class="row mt-2 ">
                <div class="col-3 mt-3">
                    <div class="card " style="width: 18rem; ">
                        <img src="img/placeholder.png" class="card-img-top" alt="...">
                    </div>
                </div>
                

              <div class="row mt-2">
                <div class="col-1 mt-3">

                    <div class="row">
                        <h4>Titulo:</h4>
                    </div>
                    <div class="row">
                        <h4>Fecha:</h4>
                    </div>
                    <div class="row">
                        <h4>Hora:</h4>
                    </div>
                </div>
        
                    <div class="col-4 mt-3">
                        <h4>(Selecciona una película)</h4>
                        <input type="text" class="form-control" placeholder="DD/MM/YYYY">
                        <input type="text" class="form-control" placeholder="HH:MM/XM">
                    </div>

                    
            </div>
            
            <div class="col-4 mt-2">
                <button type="button" class="btn btn-primary">Añadir proyección</button>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>