<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>IshidaKazuki Webportfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=<?php echo get_template_directory_uri(); ?>/assets/css/style.css">


	<!-- GoogleFonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,300;1,400&family=Sawarabi+Gothic&display=swap" rel="stylesheet">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-V1GLWZW86W"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-V1GLWZW86W');
	</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
		<header>
				<div class="headertitle">
					<p>WebPortfolio</p>
					<h1><a href="<?php echo esc_url( home_url());//ホームのURL" ?>"> Ishida Kazuki </a></h1>
				</div>
