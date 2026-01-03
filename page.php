<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>SIGN IN</h1>
        <form action="includes/formhandler.inc.php" method="post">
          <label for="customername">Full Name:</label><br>
          <input type="text" name="customername" id="customername">
          <br><br>
           <label for="email">Email:</label><br>
          <input type="email" name="email" id="email">
          <br><br>
          <label for="pswrd">password:</label><br>
          <input type="password" name="pswrd" id="pswrd">
          <br><br>
         
          <button type="submit">Sign In</button>
        </form>
    </section>
</body>
</html>