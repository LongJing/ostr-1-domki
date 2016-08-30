<?php

/**
 * @desc prepare file with booked days
 */
class JsonLoader
{
    /**
     * @desc path to dir with json files with booked days (reserations)
     */
    const PATH_DIR_JSON = '../../reservations';
    private $_filename;
    private $_path_file;
    private $_loaded_file;

    public function __construct( $filename )
    {

      // filter_input ?
      $this->_filename = $filename;
      $this->_path_file = self::PATH_DIR_JSON . "/" . $this->_filename;

      //echo $this->_path_file;
      // $this->validFile();
      $this->_loaded_file = file_get_contents( $this->_path_file );

      // print_r( $this->_loaded_file );

    }
    private function validFile()
    {
      // if file exists
      // if file is readble
    }
    public function getLoadedData()
    {
      return $this->_loaded_file;
    }
}
// test class
$loader1 = new JsonLoader('domek1.json');
// echo $loader1->getLoadedFile();
$ob2 = new JsonLoader('domek2.json');

$domek1 = new Booking( $loader1 );

/* ---------------- */

class Booking
{
  public $res_json_file; // reservations file json
  private $_current_month;
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
    print_r( $this->_jcalendar ); // finish here, evrthg workin ok
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
  private function setRestMonth()
  {
    $this->_rest_month = 12 - $this->_current_month;
  }
  private function setNewOrderMonths()
  {
    // setup val for first key in array
    $nkey= 1;
    for($i=$this->_current_month; $i<=12; $i++) { // $i = 5 change to $i = $current_month
      $this->_new_order_months[$nkey++] = $this->_dic_months[$i];
    }
    foreach($this->_dic_months as $key=>$val) {
      $this->_new_order_months[] = $val;
      if( $key == $this->_current_month-1) break;
    }
    // print_r( $this->_new_order_months);  // ok

  }

//  $current_month =  date("n");

}





/* end of file */
