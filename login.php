<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <h2 style="text-align: center;">Iniciar sesion</h2>

    <form action="validar_login.php" method="post">

        <div class="container" style="text-align: center;">
           
           <div class="item">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="usuario" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            </div>
        </div>


    </form>

</body></html>
