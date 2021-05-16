
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
        <script src="{{ mix('js/app.js') }}"></script>
        <title>Login</title>
    </head>
    <body> 
    <div class="login">  
        <div class="container">
            <div class="row">
            <div class="d-flex justify-content-center col-lg-12 col-sm-12 col-md-12 ">
                <form asp-action="Login" asp-controller="Account" class="form-signin">
                    <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Usuario</label>
                    <input type="text" name="username" class="form-control" placeholder="Usuario" required="" autofocus="">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    <hr />
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                    <p class="mt-5 mb-3 text-muted">© 2020-2021</p>
                </form>
            </div>
            </div>

        </div> 
    
    
    </div>


      
        
    </body>
</html>