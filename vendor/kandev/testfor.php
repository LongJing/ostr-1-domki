<?php
// test for in array
//

date_default_timezone_set('Europe/Warsaw');
$current_month =  date("n");

$cal2 = '{
  "styczen":{"2":3,"7":7,"10":20,"28":30},
  "luty":{"2":3,"5":5,"10":20},
  "marzec":{"9":18},
  "lipiec":{"1":31},
  "sierpień":{"3":21}
}';

$months = array(
      'styczeń'=>31,'luty'=>28,'marzec'=>31,
      'kwiecień'=>30,'maj'=>31, 'czerwiec'=>30,
      'lipiec'=>31,'sierpień'=>31,'wrzesień'=>30,
      'październik'=>31,'listopad'=>30,'grudzień'=>31
);

$dic_months = array(
  1=>'styczeń', 2=>'luty',3=>'marzec',4=>'kwieceń',5=>'maj',6=>'czerwiec',7=>'lipiec',8=>'sierpień',9=>'wrzesień',10=>'październik',11=>'listopad',12=>'grudzień'
);


$mc = 12 - $current_month; //  $mc - number month to end of year // old way 13 months (+1 for current)
echo $mc . "<br />\n";

$newOrder = array();
$nkey= 1;
for($i=$current_month; $i<=12; $i++) { // $i = 5 change to $i = $current_month
  $newOrder[$nkey++] = $dic_months[$i];
}
foreach($dic_months as $key=>$val) {
  $newOrder[] = $val;
  if( $key == $current_month-1) break;
}

echo "new order:";
print_r($newOrder);
echo "<br />\n";

/*
while( count($newOrder) < 6 ) {
    array_push($newOrder, )
}

* obcina nadmiar miesiecy - nie potrzebne!
while (count($newOrder) > 6 ) {
  array_pop($newOrder);
}
*/


/*
$new_months = array_slice($dic_months, $current_month-1, $mc); // not work test
echo "<br />\n";
echo count($new_months);
echo "<br />\n";
print_r($new_months);
*/
echo "<br />\n";


$jcalendar = (json_decode($cal2, true));
/*
for($i = $current_month; $i <= $current_month+6; $i++) {
  // echo $i;
  echo $dic_months[$i];
  if( array_key_exists( $dic_months[$i], $jcalendar )) {
    echo "<strong>jest book</strong>";  // <---------------------- tu koniec
  }

  if($i >= 12) break;
}
*/
echo "<br />\n";

foreach( $months as $month=>$days) { // tu przykombinowac z newOrder, teraz uklada wedlug kolejnsci array months

  // ORG:
  //$key_month = array_search($month, $dic_months);
  $key_month = array_search($month, $newOrder);

  /*
  if( $key_month < $current_month ) {
    // echo $key_month;
    continue ;
  }
  */

  echo "\t\t$month\n" ;

  if( array_key_exists( $month, $jcalendar )) {
    for($i=1; $i<=$days; $i++) {
      if( array_key_exists($i, $jcalendar[$month]  ) ) {
        echo ' <span class="bookdays"><strong>';
        $j = $i;
        for($j; $j <= $jcalendar[$month][$i]; $j++) {
            echo ' ' . $j . ' ';
            //$i++;
        }
        echo "</strong></span>";
        // echo $j;
        $i = $jcalendar[$month][$i]  ;

      } else {
        echo ' ' . $i . ' ';
      }
    }
    echo "<br />";
  } else {

    echo "\t\t" . '<span class="freedays">';
    for($i=1; $i<=$days; $i++) {
      echo $i . ' ';
    }
    echo '</span><br />';
  }
}
?>
