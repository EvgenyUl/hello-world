<!DOCTYPE html>
<html>
<head>
<title>Заголовок сайта</title>
</head>
<body>

  <?php foreach($person as $key => $value): ?>
    <li>
      <strong><?= $key ?> </strong><?= $value ?>
    </li>
  <?php endforeach; ?>

</body>
</html>