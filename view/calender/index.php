<?php

foreach ($data as $birthday) {
  if($month != $birthday['month']){
      $month = $birthday['month'];
      echo '<h1>' . date('F', mktime(0,0,0,$month,10)) . '</h1>';
    }
  if ($day != $birthday['day']){
      $day = $birthday['day'];
      echo '<h2>' . $day . '</h2>';
        }
      $person = $birthday['person'];
      $person = $birthday['person'];
      $id = $birthday['id'];
      $year = $birthday['year'];
      echo "<p>";
      echo "<a href='".URL."calender/editThis/".$id."'>".$person."</a>";
      echo "</a>"."($year)";
      echo '<a href="'.URL.'calender/deleteThis/'. $id.'">x</a>'.'</p>';
      $currentYear = 2018;
  }
    ?>
 <p><a href="<?URL?>calender/create">Click here to add a birthday!</a></p>
