<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <?php if(is_home()) { ?><meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php } ?><title><?php if(function_exists('show_wp_title')){show_wp_title();} ?></title>
    <link rel="shortcut icon" href="<?php site_icon_url(); ?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/init.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/single.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/text.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/author.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/searchform.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/iconfont/iconfont.css">
    <script src="<?php echo get_template_directory_uri(); ?>/static/js/jquery.min.js"></script>
</head>
<body>