<?php

require '../vendor/autoload.php';

use EuMatheusGomes\Barcode\InterleavedTwoOfFive;

if (isset($_POST) && count($_POST) > 0) {
    $itf = new InterleavedTwoOfFive();
    $barcode = $itf->render($_POST['number']);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interleaved Two of Five</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <br>
      <div class="panel panel-default">
        <div class="panel-body">
          <form method="post">
            <div class="form-group">
              <label for="number">Type any number (must be an even number of characters):</label>
              <?php $value = isset($_POST['number']) ? $_POST['number'] : '' ?>
              <input type="text" name="number" id="number" class="form-control" value="<?= $value ?>">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

      <?php if (isset($_POST) && count($_POST) > 0): ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <h4>Usage:</h4>
<pre>
$itf = new InterleavedTwoOfFive();
echo $itf->render($_POST['number']);
</pre>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-body">
          <h4>Result:</h4>

          <?= $barcode ?>
        </div>
      </div>
      <?php endif ?>

    </div>
  </body>
</html>
