<?php
$arr = [
    'item 1',
    'item 2',
    'item 3',
    'item 4',
    'item 5',
    'item 6',
    'item 7',
    'item 8',
    'item 9'
];

// $arr = array_chunk($arr, 4);
// echo '<pre>' . print_r($arr, true) . '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Columns</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

  <h2 style="text-align:center;" class="mt-4">Сетка</h2>

  <div class="container">
    <?php foreach( array_chunk($arr, 4) as $value ): ?>

      <div class="row">
        <?php foreach($value as $item): ?>

          <div class="col-md-3">
            <?php echo $item ?>
          </div>

        <?php endforeach ?>
      </div>

    <?php endforeach ?>
  </div>

  <h2 style="text-align:center;" class="mt-4">Таблица</h2>

  <div class="container">
    <table class="table">
  
      <?php foreach( array_chunk($arr, 4) as $value ): ?>

        <tr>
          <?php foreach($value as $item): ?>

            <td>
              <?php echo $item ?>
            </td>

          <?php endforeach ?>
        </tr>

      <?php endforeach ?>

    </table>
  </div>
  
</body>
</html>