<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>Books Name</h1>

    <?php
      $books = [
            "sherlock homes",
            "Alice in Wonderland",
            "The Bible",
            "The Lord of the Rings"
      ];
    ?>

    <ul>
        <?php foreach ($books as $book){

           echo "<li>$book</li>";
        }
        ?>
    </ul>

</body>
</html>