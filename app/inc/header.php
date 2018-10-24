<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= isset($page_title) ?: $page_title = $site_title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Meta tags, keep only those which required -->
    <meta name="description" content="<?= isset($page_description) ?: $page_description = $site_description; ?>">
    <meta name="image" content="<?= isset($page_image) ?: $page_image = $site_image; ?>">

    <!-- Schema.org for Google -->
    <meta itemprop="name" content="<?= isset($page_title) ?: $page_title = $site_title; ?>">
    <meta itemprop="description" content="<?= isset($page_description) ?: $page_description = $site_description; ?>">
    <meta itemprop="image" content="<?= isset($page_image) ?: $page_image = $site_image; ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="<?= isset($page_description) ?: $page_description = $site_description; ?>">
    <meta name="twitter:title" content="<?= isset($page_title) ?: $page_title = $site_title; ?>">
    <meta name="twitter:description" content="<?= isset($page_description) ?: $page_description = $site_description; ?>">
    <meta name="twitter:site" content="<?= isset($page_url) ?: $page_url = $site_url; ?>">
    <meta name="twitter:creator" content="<?= isset($page_author) ?: $page_author = $site_author; ?>">
    <meta name="twitter:image:src" content="<?= isset($page_image) ?: $page_image = $site_image; ?>">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="<?= isset($page_title) ?: $page_title = $site_title; ?>">
    <meta name="og:description" content="<?= isset($page_description) ?: $page_description = $site_description; ?>">
    <meta name="og:image" content="<?= isset($page_image) ?: $page_image = $site_image; ?>">
    <meta name="og:url" content="<?= isset($page_url) ?: $page_url = $site_url; ?>">
    <meta name="og:site_name" content="<?= isset($page_title) ?: $page_title = $site_title; ?>">
    <meta name="fb:admins" content="<?= isset($page_title) ?: $page_title = $site_title; ?>">
    <meta name="og:type" content="<?= isset($page_fbusername) ?: $page_fbusername = $site_fbusername; ?>">

    <!-- Replace with your frontend framework -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/css/uikit.min.css" />
    <link rel="stylesheet" href="<?= $site_url."/css/style.css" ?>" />

    <style type="text/css">
      /* Add Custom CSS Here! */
   </style>

</head>
<body>
