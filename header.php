<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="generator" content="Anchor CMS" />

  <title><?php echo page_title(); ?> | <?php echo site_name(); ?></title>

  <link href="<?php echo theme_url('css/theme.min.css'); ?>"  rel="stylesheet" media="screen" type="text/css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.ico'); ?>" type="image/x-icon" />

  <!-- Add per-post CSS -->
  <?php if(article_css()): ?>
  <style><?php echo article_css(); ?></style>
<?php endif; ?>

<!-- Add per-post JS -->
<?php if(article_js()): ?>
<script><?php echo article_js(); ?></script>
<?php endif; ?>
</head>

<body>
  <div class="wrapper">

  <header>
    <div class="row">
        <div class="logo primary-bg u-pull-left">
          <a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
        </div>
        <div class="u-pull-left tagline primary-txt">
          <small><?php echo site_description(); ?></small>
        </div>
        <div class="u-pull-right nav-menu">
          <a class="to_nav" href="#primary_nav"><i class="fa fa-bars"></i></a>
        </div>
      </div>
    </header>
