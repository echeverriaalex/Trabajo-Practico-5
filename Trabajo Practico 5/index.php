<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trabajo Practico 5</title>
    </head>
    <body>
        <div class="content">
            <form action="Process/logueo.php" method="POST">

                <div class="form-group"> 
                    <label for="userName"> <p> User Name </p> </label>
                    <input type="text" name="userName" id="userName" required>
                </div>
                
                <div class="form-group">
                    <label for="password"> <p> Password </p> </label>

                    <input type="password" name="password" id="password" required>
                </div>        
        
                <button type="submit"> Log in</button>    
            </form>   
            
            <div class="content" align = "center">
                <a href="EjercicioAutoload/actionTransports.php" class="btn btn-danger"> Ver Ejercicio 1 - Autoload</a>
            </div>
        </div>
    </body>
</html>