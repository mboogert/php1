<?php
  print "<body style='background-color:red'>";
  header("Refresh:1");
  print $_SERVER['SERVER_NAME'];
  print "\n";
  print $_SERVER['HTTP_HOST'];
  print "\n";
  print $_SERVER['SERVER_ADDR'];
?>
