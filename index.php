<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Traduire ce code avec des if et des else :</p>
    <p><code>  echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';</code></p>
    <p>
      <?php
      $isOk = false;
      if ($isOk == false) {
        echo 'c\'est pas bon !!!';
      } else {
        echo 'c\'est ok !!';
      }
      ?>
    </p>
  </body>
</html>
