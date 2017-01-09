<?php
error_reporting(E_ERROR);
class Booking
{
  public $res_json_file; // reservations file json
  private $_current_month;
  private $_current_year;
  private $_months_days = array(
        'styczeń'=>31,'luty'=>28,'marzec'=>31,
        'kwiecień'=>30,'maj'=>31, 'czerwiec'=>30,
        'lipiec'=>31,'sierpień'=>31,'wrzesień'=>30,
        'październik'=>31,'listopad'=>30,'grudzień'=>31
  );
  private $_dic_months = array(
    1=>'styczeń', 2=>'luty',3=>'marzec',4=>'kwiecień',5=>'maj',6=>'czerwiec',7=>'lipiec',8=>'sierpień',9=>'wrzesień',10=>'październik',11=>'listopad',12=>'grudzień'
  );

  // $mc = 12 - $current_month;
  // $mc - number month to end of year // old way 13 months (+1 for current)
  // $mc = $_rest_month
  private $_rest_month;

  // setup new order in array, current month will be at first key in array
  private $_new_order_months = array();

  // decode json file
  private $_jcalendar;

  function __construct( JsonLoader $jsonfile )
  {

    $this->setDefaultTimezone();
    $this->setCurrentMonth();
    $this->setRestMonth();
    $this->setNewOrderMonths();

    // $this->res_json_file = $jsonfile->getLoadedFile(); // work ok
    // print_r($this->res_json_file);

    $this->res_json_file = $jsonfile;
    // print_r($this->res_json_file->getLoadedFile());

    // convert decode data from json file
    $this->_jcalendar = (json_decode($this->res_json_file->getLoadedData(), true));
    // print_r( $this->_jcalendar );
  }

  private function setDefaultTimezone( $timezone = 'Europe/Warsaw' )
  {
      date_default_timezone_set( $timezone );
  }

  private function setCurrentMonth( $month = null )
  {
      if( null === $month ) {
          $this->_current_month = date("n");
      } else {
        $this->_current_month = $month;
      }

  }
  private function setCurrentYear( $year = null )
  {
      if( null === $year ) {
          $this->_current_year = date("Y");
      } else {
        $this->_current_year = $year;
      }

  }
  private function setRestMonth()
  {
    $this->_rest_month = 12 - $this->_current_month;
    // echo "rest month: " . $this->_rest_month; -- OK
  }
  private function setNewOrderMonths()
  {
    // setup val for first key in array
    $nkey= 1;
    //echo "curr month: " . $this->_current_month;
    for($i=$this->_current_month; $i<=12; $i++) { // $i = 5 change to $i = $current_month
      $this->_new_order_months[$nkey++] = $this->_dic_months[$i];
    //  echo "i: " . $i . "<br />";
    }
    // echo "new order aft for: " . count($this->_new_order_months);
    // echo "<br />_dic_months: " . count($this->_dic_months) . "<br />";
    foreach($this->_dic_months as $key=>$val) {
      if( $key == 1 ) break;
      // echo "<br />key: " . $key . " val: " . $val . "<br />";
      $this->_new_order_months[] = $val;
      // echo " new order month val: " . $this->_new_order_months[$key];

      if( $key == $this->_current_month-1) break;
    }
     //print_r( $this->_new_order_months);  // ok

  }
  /**
   * Finish here, evrthg workin ok
   * Change echo to var $html and return val of this var TODO
   * @return [type] [description]
   */
  public function generateHTML()
  {
    /*
    echo "<br />_new_order_months: " . count($this->_new_order_months);
    echo "<pre>";
      var_dump($this->_new_order_months);
    echo "</pre>";
    */
    foreach( $this->_new_order_months as $mkey=>$mval) {
      echo "<div class='col-lg-2'>" . "\n";
      echo "\t\t" . "$mval\n" ;
      /*
      if( $mkey > $this->_rest_month+1 ) {
          echo "\t\t" . $this->_current_year . " " . "$mval\n" ;
      } else {
          echo "\t\t" . $this->_current_year+1 . " " . "$mval\n" ;
      }
      */

      echo "</div>\n";
      if( array_key_exists( $mval, $this->_jcalendar )) {

        echo '<div class="col-lg-10">' . "\n";
        echo '<span class="freedays">' . "\n";

        for($i=1; $i<=$this->_months_days[$mval]; $i++) {
          if( array_key_exists($i, $this->_jcalendar[$mval]  ) ) {
            echo ' <span class="bookdays"><strong>';
            $j = $i;
            for($j; $j <= $this->_jcalendar[$mval][$i]; $j++) {
                echo ' ' . $j . ' ';
                //$i++;
            }
            echo "</strong></span>";
            // echo $j;
            $i = $this->_jcalendar[$mval][$i]  ;

          } else {
            echo ' ' . $i . ' ';
          }
        }
        echo "</span>\n";
        echo "\n</div>\n";
      } else {
        echo '<div class="col-lg-10">' . "\n";
        echo "\t\t" . '<span class="freedays">';
        for($i=1; $i<=$this->_months_days[$mval]; $i++) {
          echo $i . ' ';
        }
        echo "</span>\n";
        echo "\n</div>\n";
      }

    }
  }

//  $current_month =  date("n");

}
/* test
$domek1 = new Booking( $loader1 );
$domek2 = new Booking( $loader2 );
$domek1->generateHTML();
$domek2->generateHTML();
*/



/* end of file */
