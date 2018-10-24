<?php

require_once __DIR__.'/../../config/config.php';
$file_name = pathinfo(basename(__FILE__), PATHINFO_FILENAME);

$content = <<<EOT

    <h1>Posts</h1>

    $site_title

EOT;

require_once __DIR__.'/../layouts/app.php';