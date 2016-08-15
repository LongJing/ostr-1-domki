<?php


// check exists calednar file
// load calendar file
// read file
// prepare calendar html
// return calendar html
//
/*
$arr = array ('a'=> array('a1'=>'test 1', 'a2'=>'test2'),'b'=>2,'c'=>3,'d'=>4,'e'=>5);
echo json_encode($arr);

$bookedDays = array( 'styczen' => array(2=>3, 5=>5, 10=>20) );
echo json_encode($bookedDays);

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
*/

/*
$cal3 = '{
  "styczen":{2,3,4,5,10,11,12,18,19,20}
}';
$cal4 = '{
  "styczen":{"1":2,"2":3,"3":4}
}';
*/
// echo "<pre>";
// var_dump(json_decode($json));
//var_dump(json_decode('{"styczen":{"2":3,"5":5,"10":20}}'));
// echo "jcalendar:<br />\n";

// print_r($jcalendar);
// echo "</pre>";

$cal2 = '{
  "styczen":{"2":3,"7":7,"10":20,"28":30},
  "luty":{"2":3,"5":5,"10":20},
  "marzec":{"9":18},
  "lipiec":{"1":31}
}';

// $jcalendar = (json_decode($cal2, true));

require_once("json-loader.php");
$jcalendar = (json_decode($booked_json, true));

if( $jcalendar == FALSE ) {
  $jcalendar = array('empty'=>array('1'=>'0'));
}

$months = array(
      'styczen'=>31,'luty'=>28,'marzec'=>31,
      'kwiecień'=>30,'maj'=>31, 'czerwiec'=>30,
      'lipiec'=>31,'sierpien'=>31,'wrzesien'=>30,
      'październik'=>31,'listopad'=>30,'grudzień'=>31
);

$html  = '<div class="col-lg-2">' . "\n";

foreach( $months as $month=>$days) {
  echo "\n" . '<div class="col-lg-2">' . "\n";
  echo "\t\t<strong>" . $month . "</strong>\n" ;
  echo '</div>' . "\n";

  echo '<div class="col-lg-10">' . "\n";


  if( array_key_exists( $month, $jcalendar )) {
    // echo "jest: " . $month . "<br />\n"; // <----------- debug
    echo "\t\t" . '<span class="freedays">';
    for($i=1; $i<=$days; $i++) {
      // echo "i: " . $i . "<br />\n";
      //print_r($jcalendar->$month);

      //echo "db: " . $jcalendar->$month[$i];
      if( array_key_exists($i, $jcalendar[$month]  ) ) {
          //echo "start: " . $i . " stop: " . $jcalendar[$month][$i];

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
    echo '</span>';
    echo "\n</div>\n";
    /*
    foreach( $jcalendar->$month as $key=>$val  ) {
      echo "key: " . $key . " val: " . $val;
    }
    */
  } else {

    echo "\t\t" . '<span class="freedays">';
    for($i=1; $i<=$days; $i++) {
      echo $i . ' ';
    }
    echo '</span>';
    echo "\n</div>\n";

  }


}
/*
foreach( $jcalendar as $month_name=>$arr_reserv )
{
  $html .= "<strong>" . $month_name . "</strong>\n";
  $html .= "</div>\n" . '<div class="col-lg-10">' . "\n" . '<span class="freedays">';

}
echo $html;
*/




 ?>
