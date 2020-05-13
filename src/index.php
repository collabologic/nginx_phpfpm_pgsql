<?php 
    $db = new PDO(
        'pgsql:host=db;dbname=admin;',
        'admin',
        'admin'
    );
    $data = [];
    $sql = 'select account_id, account_name, email from users';
    foreach ($db->query($sql) as $row) {
        array_push($data, $row);
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP-FPMのテスト</title>
  </head>
  <body>
      <?php echo '<h1>php-fpm</h1>'; ?>
      <p>Thank you for comming !!</p>
      <ul>
        <?php foreach ($data as $row) { ?>
            <li> <?php echo $row["account_id"];?>:<?php echo $row["account_name"];?>(<?php echo $row["email"];?>)
        <?php }?>
      <ul>
  </body>
</html>