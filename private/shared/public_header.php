<!doctype html>

<html lang="en">
  <head>
    <title>Cars Database <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
  </head>

  <body>

    <header>
      <h1>
        <a href="<?php echo url_for('/index.php'); ?>">
          <img class="car-icon" src="<?php echo url_for('/images/car.svg') ?>" /><br />
          Cars Database
        </a>
      </h1>
    </header>
