<html lang="en-ca">
<!-- ICS2O-Unit5-08-PHP -->

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Division with Repeated Subtraction, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Peter Zerbinos" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.amber-orange.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Division with Repeated Subtraction, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Division with Repeated Subtraction, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/division.jpg" alt="Division" />
      </div>
      <?php
      $dividend = $_GET["user-dividend"];
      $divisor = $_GET["user-divisor"];
      $remainder = $dividend;
      $quotient = 0;

      while ($remainder >= $divisor) {
        $remainder -= $divisor;
        $quotient++;
      }

      echo $dividend . " ÷ " . $divisor . " = " . $quotient . " and the remainder is: " . $remainder . ".";
      ?>
    </main>
  </div>
</body>

</html>
