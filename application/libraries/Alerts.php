<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Alerts {

    public function launch($message,$class)
    {
            echo "<div class='alert ".$class."'>
                ".$message."
            </div>";   
    }
}