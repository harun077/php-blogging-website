<?php
    class Config{
        protected $con;

        public function __construct(){
            // define("HOSTNAME","localhost");
            // define("USERNAME","root");
            // define("PASSWORD","");
            // define("DBNAME","blog");

           $this->con = new Mysqli("localhost","root","","blog");
           
        }
    }
?>