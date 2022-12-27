<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="register.php">
      <label for="username">Username:</label>&nbsp;
      <input type="text" name="username" maxlength="10" value="">
      <br>
      <label for="userpass">Password:</label>&nbsp;
      <input type="password" name="userpass" maxlength="10">
      <br>
      <label for="fname">First Name:</label>&nbsp;
      <input type="text" name="fname" maxlength="30" value="">
      <br>
      <label for="lname">Last Name:</label>&nbsp;
      <input type="text" name="lname" maxlength="30" value="">
      <br>
      <label for="age">Age:</label>&nbsp;
      <input type="number" name="age">
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
