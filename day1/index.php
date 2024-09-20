<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
   <?php
      $name = "anthon";
      $read = true;

      if ($read) {
          $message = "You are name $name";
      } else {
          $message = "You are not name $name";
      }

   ?>

   <h1><u>
           <?php echo $message; ?> </u>
   </h1>

</body>
</html>