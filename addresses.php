<?php
  $db = mysql_connect('localhost', 'panelcre_abby', 'NYE2016');
  mysql_select_db('panelcre_wedding', $db);

  $results = mysql_query('SELECT * from `address_list` ORDER BY `id`;', $db);
  $counter = 1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <title>Abby and Paul - NYE2016</title>
  </head>
  <body>
    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th></th>
            <th>Name</th>
            <th>Address Line 1</th>
            <th>Address Line 2</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
          </tr>
        </thead>
        <tbody>
      <?php while($address = mysql_fetch_assoc($results)):?>
          <tr>
            <td><?php echo $counter; $counter++; ?></td>
            <td><?php echo $address['full_name']; ?></td>
            <td><?php echo $address['address_line1']; ?></td>
            <td><?php echo $address['address_line2']; ?></td>
            <td><?php echo $address['city']; ?></td>
            <td><?php echo $address['region']; ?></td>
            <td><?php echo $address['zip']; ?></td>
      <?php endwhile; ?>
          </tr>
        </tbody>
      </table>
    <div class="container">
  </body>
</html>
