<html>
  <head>
    <meta charset="UTF-8">
    <title>作業2</title>  
  </head>
  
  <body>
    <?php
    function num_eval($a){
      if(is_int($a)){
          if ($a >= 0 && $a<10){
              echo "$a 是整數個位數";
              echo "<br />";
          }
          else{
              echo "$a 是整數，但不是個位數";
              echo "<br />";
          }
        }
      elseif(is_float($a)){
          echo "$a 是小數";
          echo "<br />";
        }
    }

    num_eval(3);
    num_eval(23.9);
    num_eval(999);
    ?>
  </body>
</html>