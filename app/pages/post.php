<?php

require_once __DIR__.'/../../config/config.php';
$file_name = pathinfo(basename(__FILE__), PATHINFO_FILENAME);

$page_title = "My New Blog";
$body       = <<<EOT

<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

EOT;

$content = <<<EOT

<section class="uk-section uk-section-muted uk-padding-remove-bottom">
    <div class="uk-container uk-container-small">
        <h1 class="uk-heading-primary">$page_title</h1>
        <p>$body</p>
    </div>
</section>

EOT;

require_once __DIR__.'/../layouts/app.php';