<!DOCTYPE>
<html>
  <head>
    <title>Learning PHP</title>
  </head>
  <body>
    <?php 
      $name = $_GET["name"];
      if ($name) {
        echo("<h1>Welcome back, $name</h1>");
      }else {
        echo("<h1>You need to enter something to name you !</h1>");
      }
    ?>
    <form action="site.php" method="get">
      Name: <input type="text" name="name"/>
      <button type="submit">Send your name</button>
    </form>
  </body>
</html>