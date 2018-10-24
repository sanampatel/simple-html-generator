<?php
    // Final step to write in HTML file Do not wories regading this
    file_put_contents(__DIR__ . '/../' . PUBLIC_PATH . '' . $file_name . '.html', ob_get_contents());
    ob_end_flush();
