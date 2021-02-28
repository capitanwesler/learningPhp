<!DOCTYPE>
<html>
  <head>
    <title>Array with PHP</title>
  </head>
  <body>
    <h1>Type the name of the student:</h1>
    <form action="array.php" method="POST">
      <input type="text" name="student"/>
      <button type="submit">Submit the form</button>
    </form>
    <?php 
      $students = array();
      $student = $_POST["student"];

      if (in_array($student, $students)) {
        array_push($students, $student);
        echo("<h2>Student added to the list.</h2>");
      }else {
        echo("<h2>Already a student with that name:</h2>");
        echo("<strong>$student - name of the student</strong>");
      }
    ?>
  </body>
</html>