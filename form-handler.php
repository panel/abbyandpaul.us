<?php
  $db = mysql_connect('localhost', 'panelcre_abby', 'NYE2016');
  mysql_select_db('panelcre_wedding', $db);

  $full_name = mysql_escape_string($_POST['full_name']);
  $address_line1 = mysql_escape_string($_POST['address_line1']);
  $address_line2 = mysql_escape_string($_POST['address_line2']);
  $city = mysql_escape_string($_POST['city']);
  $region = mysql_escape_string($_POST['region']);
  $zip_code = mysql_escape_string($_POST['postal_code']);

  $query = 'INSERT INTO `address_list` (`full_name`, `address_line1`, `address_line2`, `city`, `region`, `zip`) '
    . "VALUES ('$full_name', '$address_line1', '$address_line2', '$city', '$region', '$zip_code');";

  mysql_query($query, $db);
  mysql_close($db);

  header('Location: http://abbyandpaul.us/thanks/');
?>
