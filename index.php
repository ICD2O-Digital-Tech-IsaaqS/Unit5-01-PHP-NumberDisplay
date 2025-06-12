<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="Number display, with JavaScript">
  <meta name="keywords" content="Immaculata, ICD2O">
  <meta name="author" content="Isaaq Simon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (22)/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (22)/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (22)/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io (22)/site.webmanifest">
  <title>Number Display</title>
  <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
  <h2>Enter Min and Max Numbers</h2>

  <form method="POST" action="">
    <label for="min">Min Number:</label>
    <input type="text" id="min" name="min" required>

    <label for="max">Max Number:</label>
    <input type="text" id="max" name="max" required>

    <button type="submit">Show Numbers</button>
  </form>

  <div id="output">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $min = trim($_POST['min']);
      $max = trim($_POST['max']);

      // Validate input: integers only (no decimals or text)
      if (!ctype_digit($min) || !ctype_digit($max)) {
        echo "<span class='error'>Error: Please enter valid positive whole numbers only.</span>";
      } else {
        $min = intval($min);
        $max = intval($max);

        if ($min < 0 || $max < 0) {
          echo "<span class='error'>Error: Negative numbers are not allowed.</span>";
        } elseif ($min > $max) {
          echo "<span class='error'>Error: Min number cannot be greater than max number.</span>";
        } else {
          while ($min <= $max) {
            echo $min . "<br>";
            $min++;
          }
        }
      }
    }
    ?>
  </div>
</body>
</html>