<!DOCTYPE>
<html>
  <head>
    <title>MadLib with PHP</title>
  </head>
  <body>
    <h1>This is a game MadLib with PHP.</h1>
    <h2></h2>
    <form action="madlib.php" method="post">
      Color: <input type="text" name="color"/><br/>
      Plural Noun: <input type="text" name="pluralNoun"/><br/>
      Celebrity: <input type="text" name="celebrity"/><br/>
      <button type="submit">Submit your Answers</button>
    </form>
    <?php 
      $color = $_POST["color"];
      $pluralNoun = $_POST["pluralNoun"];
      $celebrity = $_POST["celebrity"];

      if ($color && $pluralNoun && $celebrity) {
        echo("<strong>Roses are $color</strong><br/>");
        echo("<strong>$pluralNoun are blue</strong><br/>");
        echo("<strong>I love $celebrity</strong>");
      }else {
        echo("<h2>You need to do the info !</h2>");
      }
    ?>
  </body>
</html>