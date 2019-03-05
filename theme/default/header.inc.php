
<meta charset="utf-8">

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ua" > <!--<![endif]-->
<head>
<meta charset="utf-8">
  <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php get_theme_url(); ?>/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/build/css/application.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">


	   
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/assets/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

	<?php get_i18n_header(); ?>

</head> 
<body id="<?php get_page_slug(); ?>" >
	<!-- site header -->
	<header>

		<div class="language-items ">


			<div class="language-item l_en">
				<a href="<?php echo htmlspecialchars(return_i18n_setlang_url('en'));?>">eng
				</a>
				</div>
				<div class="language-item l_ru">
				<a href="<?php echo htmlspecialchars(return_i18n_setlang_url('ru'));?>">ru
				</a>
				</div>
				<div class="language-item l_ua">
				<a href="<?php echo htmlspecialchars(return_i18n_setlang_url('ua'));?>">ua	
				</a>
				</div>
			</div>		
			<ul class="menu">
				<?php get_i18n_navigation(return_page_slug(),0,99, I18N_SHOW_MENU); ?>
			</ul>
  </header>