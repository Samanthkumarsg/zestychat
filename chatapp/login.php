<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> login </title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div id="main">
      <?php
        require_once("connection.php") ;
        if(isset($_POST['login'])){
          $username = $_POST['username'];
          $password = $_POST['password'];

          $q='SELECT * FROM `user` where `username`="'.$username.'" and `password`="'.$password.'"';
          $r = mysqli_query($con, $q) ;
          if(mysqli_num_rows($r)> 0 ){
              header("location:index.php");
          }
          
          else {
            echo "your password and username name do not match";
          }
        }

       ?>
      <h2>Login</h2>
      <br>
      <form method="post">

        <input type="text" name="username" placeholder="username" required></input>

        <input type="password" name="password" placeholder="password"></input>

        <input type="submit" name="login" value="Login"></input>
      </form>
    </div>

  </body>
</html>
