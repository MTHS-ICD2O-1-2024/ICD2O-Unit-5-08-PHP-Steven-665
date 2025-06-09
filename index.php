<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Divide a number, in PHP" />
  <meta name="keywords" content="math, icd2o" />
  <meta name="author" content="yi.zhou" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <title>Divide a number, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Divide a number, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/Divide.jpg" alt="divide image" />
      </div>
      <br />
      <form action="answer.php" method="get">
        <p>Enter divisor number</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" name="divisor" required>
          <label class="mdl-textfield__label" for="divisor">number here ...</label>
        </div>
        <br /><br />
        <p>Enter dividend number</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" name="dividend" required>
          <label class="mdl-textfield__label" for="dividend">number here ...</label>
        </div>
        <br /><br />
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          DIVIDE
        </button>
      </form>
      <br />
      <div class="page-content-answer"></div>
    </main>
  </div>
</body>

</html>