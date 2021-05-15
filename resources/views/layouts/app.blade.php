<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
        <script src="{{ mix('js/app.js') }}"></script>
        <title>Document</title>
    </head>
    <body> 
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <img class="navbar-brand" src="{{ asset('/images/logo.png') }}" />
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between" id="navbarsExample07">
                    <ul class="navbar-nav flex-grow-1">
                            <li class="nav-item active">
                                <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compra Ágil</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown08">
                                    <a class="dropdown-item">Publicadas</a>
                                    <a class="dropdown-item disabled">Adjudicadas</a>
                                </div>
                            </li>                        
                        <li class="nav-item">
                            <a class="nav-link">Bodega</a>
                        </li>
                    </ul>                

                </div>
            </div>
        </nav>
    </header> 
    <div >
        @yield('content')
    </div>
      
        
    </body>
</html>