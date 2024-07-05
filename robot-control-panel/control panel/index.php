<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Training Task</title>
</head>

<body>
  <form action="insert.php" method="post">
    <div class="container">
      <div class="panel">
        <button class="main-button" name="btn" value="Forward">Forward</button>
      </div>
      <div class="panel">
        <button class="secondary-button" name="btn" value="Left">Left</button>
        <button class="secondary-button" name="btn" value="Stop">Stop</button>
        <button class="secondary-button" name="btn" value="Right">Right</button>
      </div>
      <div class="panel">
        <button class="main-button" name="btn" value="Backward">Backward</button>
      </div>
      <div>
         <button class="btn"><a href="view_movements.php">View Latest Movement</a></button>        
      </div>
    </div>
  </form>

</body>

</html>