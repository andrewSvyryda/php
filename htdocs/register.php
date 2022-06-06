<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php include "style.php" ?>
    </head>
    <body>
        <?php include "navbar.php" ?>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputLogin" class="form-label">Login</label>
                <input name="login" type="text" class="form-control" id="exampleInputLogin">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $login = $_POST["login"];
                $email = $_POST["email"];
                $password = $_POST["password"];
   
                if(strlen($login) < 5)
                {
                    echo "<p>incorrect login</p>";
                }
                else if(!preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $email))
                {
                    echo "<p>incorrect email</p>";
                }
                else if(strlen($password) < 5)
                {
                    echo "<p>incorrect password</p>";
                }
                else
                {
                    header("Location: /login.php");
                }
            }
        ?>
    </body>
</html>