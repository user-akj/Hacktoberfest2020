<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="ligin.css">
    <meta charset="utf-8">
    <title>Log In Page</title>
      <style type="text/css">

      </style>

  </head>
  <body>

  <div class="login">
    <img src="images/user.png" alt="userIcon" class="avatar">
   <h1>Login Here</h1>
   <form class="log" action="login.php" method="get">

      <label for="uname">User Name</label>
      <input type="text" name="uname" id="uname" placeholder="Enter User Name">

      <label for="passwor">Password</label>
      <input type="password" name="passwor" id="passwor" placeholder="Enter Password">
       <a href="#">Fogot Your Password?</a>
      <input type="submit" name="submit" value="Submit" id="submit1">
      <div class="error">
        <?php echo $error; ?>
      </div>
  <input type="submit" name="back" value="Back" id="submit2">



   </form>


  </div>







  </body>
</html>
