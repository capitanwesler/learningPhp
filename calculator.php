<!DOCTYPE>
<html>
  <head>
    <title>Calculator with PHP</title>
  </head>
  <body>
    <h1>This is a calculator with PHP.</h1>
    <form action="calculator.php" method="get">
      Number &#128511;1: <input type="text" name="number1"/>
      Number &#128511;2: <input type="text" name="number2"/>
      <button type="submit">Do the maths</button>
    </form>
    <?php 
      $number1 = $_GET["number1"];
      $number2 = $_GET["number1"];
      if ($number1 && $number2) {
        echo("<strong>This is the sum of the two numbers:</strong>");
        echo("<br/>");
        echo($number1 + $number2);
      }else {
        echo("<h2>You need to enter some numbers to do the maths!</h2>");
      }
    ?>
  </body>
</html>