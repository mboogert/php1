<?php

  print "<body style='background-color:red'>";
  header("Refresh:1");
  
  print "SERVER_NAME = " . $_SERVER['SERVER_NAME'] . "</br>";
  print "HTTP_HOST   = " . $_SERVER['HTTP_HOST'] . "</br>"
  print "SERVER_ADDR = " . $_SERVER['SERVER_ADDR'] . "</br></br>"
  
  $time = microtime();
  $time = explode(' ', $time);
  $time = $time[1] + $time[0];
  $finish = $time;
  $total_time = round(($finish - $start), 4);
  echo 'Page generated in '.$total_time.' seconds.';

?>
