<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
</head>
<body>
   <h1>this is dashboard</h1>
   <span>user name: <strong><?php echo $_SESSION['user_name']; ?></strong></span>
   <pre>
      <?php
      echo is_callable([Guest::class, 'guestHandle']);
      ?>
   </pre>
</body>
</html>