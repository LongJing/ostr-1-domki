<?php


// check exists calednar file
// load calendar file
// read file
// prepare calendar html
// return calendar html
//

$arr = array ('a'=> array('a1'=>'test 1', 'a2'=>'test2'),'b'=>2,'c'=>3,'d'=>4,'e'=>5);
echo json_encode($arr);

$bookedDays = array( 'styczen' => array(2=>3, 5=>5, 10=>20) );
echo json_encode($bookedDays);

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
$cal2 = '{
  "styczen":{"2":3,"5":5,"10":20},
  "luty":{"2":3,"5":5,"10":20},
  "marzec":{"9":18}
}';

$cal3 = '{
  "styczen":{2,3,4,5,10,11,12,18,19,20},

}';

echo "<pre>";
// var_dump(json_decode($json));
//var_dump(json_decode('{"styczen":{"2":3,"5":5,"10":20}}'));
echo "jcalendar:<br />\n";
$jcalendar = (json_decode($cal2, true));
print_r($jcalendar);
echo "</pre>";

$months = array('styczen'=>31,'luty'=>28,'marzec'=>31,'czerwiec'=>30);

$html  = '<div class="col-lg-2">' . "\n";
// $html .=


foreach( $months as $month=>$days) {
  echo '<div class="col-lg-2">' . "\n";
  echo "<strong>" . $month . "</strong>" ;
  echo '</div>' . "\n";

  if( array_key_exists( $month, $jcalendar )) {
    // echo "jest: " . $month . "<br />\n"; // <----------- debug
    echo '<class="freedays">';

    for($i=1; $i<=$days; $i++) {
      // echo "i: " . $i . "<br />\n";
      //print_r($jcalendar->$month);

      //echo "db: " . $jcalendar->$month[$i];
      if( array_key_exists($i, $jcalendar[$month]  ) ) {
          //echo "start: " . $i . " stop: " . $jcalendar[$month][$i];

          echo ' <span class="bookdays">';
          $j = $i;
          for($j; $j <= $jcalendar[$month][$i]; $j++) {
              echo "J:" . $j;
          }
          echo "</span> ";
          continue ;
      } else {
          echo ' ' . $i . ' ';
      }
    }
    /*
    foreach( $jcalendar->$month as $key=>$val  ) {
      echo "key: " . $key . " val: " . $val;
    }
    */

  } else {

    echo '<class="freedays">';
    for($i=1; $i<=$days; $i++) {
      echo $i . ' ';
    }
    echo '</span>';

  }


}

foreach( $jcalendar as $month_name=>$arr_reserv )
{


  $html .= "<strong>" . $month_name . "</strong>\n";
  $html .= "</div>\n" . '<div class="col-lg-10">' . "\n" . '<span class="freedays">';



}
echo $html;








 ?>
