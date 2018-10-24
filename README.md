# Simple HTML Generator
Simple static HTML files generator for Netlify, Github pages etc., written in PHP!

One of the simple html static page builder you'll find on entire internet. ;-) (For me atleast, made in 1 day!)

### Getting Started
``` Index.php ```
Used for adding routes to your page, this is the entry point to your app.

Sample router can be added as.
```php
$router->get('post', 'app/post');
```

``` Config.php ```
Use for all the site related configration and varible intilizations

### Custom HTML variable can be defined by PHP heredocs

```php
$custom_html = <<<EOA
    <p>You can write html here!</p>
EOA;
```

``` /app/pages ```
Here where all your PHP logic goes, here is the place where you can add your pages as well.

Defualt
- home page
- post page

### Adding new page

```php
<?php
require_once __DIR__.'/../../config.php';
$file_name = pathinfo(basename(__FILE__), PATHINFO_FILENAME);

$content = <<<EOT
    // Your HTML content will go here! With your config file varible still accessible 
    <h1>$site_title</h1>
EOT;

require_once __DIR__.'/../app.php';
```

new pages can be made like about.php, contact.php

``` /app/inc ```
All php files which needed to be included are here

defualt files are
- header
- nav
- footer
 
## Compile assets

```sh
$ php run.php
```

Other way is you can directly compile individual file or visit file directly to browser!

All html pages will be stored in public directory also asset folder stores there. Pre-Builed netlify configration file is there to handle routes.

### TO-DO List
- Config folder for all configration files
- ```style.css``` and ```app.js``` additions as good way!