<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php foreach ($todos as $todo): ?>
      <li>
        <?php if ($todo->is_completed): ?>
          <strike><?=$todo->task_name?></strike>
        <?php else: ?>
          <?=$todo->task_name?>
        <?php endif;?>
      </li>
    <?php endforeach;?>
  </ul>
</body>
</html>