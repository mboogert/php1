<?php

  echo "<body style='background-color:blue'>";
  header("Refresh:5");
  
  echo "SERVER_NAME = " . $_SERVER['SERVER_NAME'] . "</br>";
  echo "HTTP_HOST   = " . $_SERVER['HTTP_HOST'] . "</br>";
  echo "SERVER_ADDR = " . $_SERVER['SERVER_ADDR'] . "</br></br>";
  
  $time = microtime();
  $time = explode(' ', $time);
  $time = $time[1] + $time[0];
  $finish = $time;
  $total_time = round(($finish - $start), 4);
  echo 'Page generated in '.$total_time.' seconds.';

?>
