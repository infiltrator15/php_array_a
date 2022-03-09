
<?php
    $array = array("Marvin", "Marco", "Marvin","Marco","Marco","Marvin","Christian");
    $occurence = array_count_values($array);
    krsort($occurence);
    $array2 = array_keys($occurence);
    echo "Most number of occurence is:"." ".$array2[1];
  ?>