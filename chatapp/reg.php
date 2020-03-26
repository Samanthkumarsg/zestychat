<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ZestyChat</title>
    <link rel="stylesheet" href="index.css"></link>
  </head>
  <body>
    <?php

      require_once("connection.php") ;

    if(isset($_POST['Register'])){
        $username= $_POST['username'];
        $password= $_POST['password'];

        if($username !="" and $password !="")
        {
            $q="INSERT INTO `user` (`id`, `username` , `password`)
            VALUES('', '".$username."','".$password."')
            " ;
            if(mysqli_query($con, $q)){
              header(location:login.php);
            }
            else{
              echo $q ;
            }
          }
          else{
            echo "please fill";
          }

      }


     ?>


    <header><h3>ZestyChat</h3></header>
    <div class="reg">
      <h3> Register</h3>
      <div class="sign">
      <form method="post">
        <input type="text" name="username" id="username" placeholder="Username"></input>
        <input type="password" name="password" id="password" placeholder="Password  "></input>
        <input type="submit" id="submit" name="Register" value="Register"></input>
      </form>
      </div>
    </div>




  </body>
</html>
