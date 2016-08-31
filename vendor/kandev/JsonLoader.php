<?php

/**
 * @desc prepare file with booked days
 */
class JsonLoader
{
    /**
     * @desc path to dir with json files with booked days (reserations)
     */
    const PATH_DIR_JSON = './reservations';
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
// $loader1 = new JsonLoader('domek1.json');
// echo $loader1->getLoadedFile();
// $loader2 = new JsonLoader('domek2.json');
