<?php

   require_once __DIR__.'/../config/config.php';

   $app_path   = __DIR__.'/../app/pages/';
   $files_list = scandir($app_path);
   // print_r($files_list);
   foreach ($files_list as $key => $value) {
      $info = new SplFileInfo($value);
      if($info->getExtension() == 'php') {
         echo "Compiling : " . $value . " to " . $info->getBasename('.php') .".html \n <br />";
         exec('php ' . $app_path . '' .$value);
         // sleep(1);
      }
   }

   echo "\n <br />Finished!";