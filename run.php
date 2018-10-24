<?php

    require_once __DIR__.'/config.php';

    $app_path   = __DIR__.'/app/';
    $files_list = scandir($app_path, 1);

    // print_r($files_list);

    foreach ($files_list as $key => $value) {
        $info = new SplFileInfo($value);
        if($info->getExtension() == 'php') {
            echo "Compiling : " . $value . "\n";
            require $app_path . '' .$value;
        }
    }
    