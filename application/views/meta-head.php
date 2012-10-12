<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo base_url();?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=750">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css');?>">
<!--	<link rel="stylesheet" type="text/css" href="--><?php //echo base_url('css/bootstrap-responsive.min.css');?><!--">-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css');?>">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo base_url('js/libs/h5bp/jquery-1.8.0.min.js');?>"><\/script>')</script>
	<script src="/js/libs/greensock-v12-js/src/minified/TweenMax.min.js"></script>
	<script src="/js/libs/greensock-v12-js/src/minified/TimelineMax.min.js"></script>
    <script src="http://js.pusher.com/1.12/pusher.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        // Enable pusher logging - don't include this in production
        Pusher.log = function (message) {
            if (window.console && window.console.log) window.console.log(message);
        };

        // Flash fallback logging - don't include this in production
        WEB_SOCKET_DEBUG = true;


    </script>
	<script src="/js/main.js"></script>
</head>