<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Divide a number result" />
  <meta name="author" content="yi.zhou" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <title>Division Result</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Division Result</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image"></div>
      <br /><br />

      <?php
      // Get numbers
      $divisor = (int) $_GET["divisor"];
      $dividend = (int) $_GET["dividend"];

      // Basic error check
      if ($dividend <= 0) {
        echo "<p style='color: red;'>Error: Dividend must be greater than 0.</p>";
      } else {
        $result = 0;
        $remainder = $divisor;

        // Repeated subtraction
        while ($remainder >= $dividend) {
          $remainder -= $dividend;
          $result++;
        }

        // Output
        echo "<p>The result is: <strong>$result</strong></p>";
        echo "<p>The remainder is: <strong>$remainder</strong></p>";
      }
      ?>

      <br /><br />
      <div class="page-content-answer">
        <a href="index.php">Try again</a>
      </div>
    </main>
  </div>
</body>

</html>