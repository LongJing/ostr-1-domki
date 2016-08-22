<?php
// exec function
generateBookedDays('domek1');
echo "<br />\n";
generateBookedDays('domek2');

// def on function
function generateBookedDays( $jsonfile ) {

  $dir = '../../uploads';
  $filename = $jsonfile . '.json';
  $path = $dir . '/' . $filename;
  // get json data booked days; TODO seperate function to load file
  try {
      $booked_json = file_get_contents( $path );
  } catch(Message $e) {

  }
  $jcalendar = (json_decode($booked_json, true));

  date_default_timezone_set('Europe/Warsaw');
  $current_month =  date("n");

  // test booked days
  $cal2 = '{
    "styczen":{"2":3,"7":7,"10":20,"28":30},
    "luty":{"2":3,"5":5,"10":20},
    "marzec":{"9":18},
    "lipiec":{"1":31},
    "sierpień":{"3":21}
  }';

  // change name $months to $day_in_month
  $months = array(
        'styczeń'=>31,'luty'=>28,'marzec'=>31,
        'kwiecień'=>30,'maj'=>31, 'czerwiec'=>30,
        'lipiec'=>31,'sierpień'=>31,'wrzesień'=>30,
        'październik'=>31,'listopad'=>30,'grudzień'=>31
  );
  // original order months in year
  $dic_months = array(
    1=>'styczeń', 2=>'luty',3=>'marzec',4=>'kwiecień',5=>'maj',6=>'czerwiec',7=>'lipiec',8=>'sierpień',9=>'wrzesień',10=>'październik',11=>'listopad',12=>'grudzień'
  );


  /**
   * PREPARE CALENDAR ORDER
   */

  //  $mc - number month to end of year
  $mc = 12 - $current_month;

  // new array to month in new order; 12 months start from current month
  $newOrder = array();

  // key for current month in newOrder array
  $nkey= 1;

  // set newOrder array from current month to last month in year (december)
  for($i=$current_month; $i<=12; $i++) {
    $newOrder[$nkey++] = $dic_months[$i];
  }
  // add others first months to newOrder array
  foreach($dic_months as $key=>$val) {
    $newOrder[] = $val;
    if( $key == $current_month-1) break; // stop when find month before current month
  }


  /**
   * GENERATE HTML
   */

  foreach( $newOrder as $mkey=>$mval) {
    echo "\t\t$mval\n" ;

    if( array_key_exists( $mval, $jcalendar )) {
      for($i=1; $i<=$months[$mval]; $i++) {
        if( array_key_exists($i, $jcalendar[$mval]  ) ) {
          echo ' <span class="bookdays"><strong>';
          $j = $i;
          for($j; $j <= $jcalendar[$mval][$i]; $j++) {
              echo ' ' . $j . ' ';
              //$i++;
          }
          echo "</strong></span>";
          // echo $j;
          $i = $jcalendar[$mval][$i]  ;

        } else {
          echo ' ' . $i . ' ';
        }
      }
      echo "<br />";
    } else {

      echo "\t\t" . '<span class="freedays">';
      for($i=1; $i<=$months[$mval]; $i++) {
        echo $i . ' ';
      }
      echo '</span><br />';
    }

  }
} // end of function
?>
