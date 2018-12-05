<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title> HOLA  </title>
	<meta name="author" content="Matias Salinas" />
    <meta name="description" content="pagina ejercicio 004 bootcamp frontend" />
    <meta name="keywords"  content="Desafio, desafio latam, ejercicio, frontend" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu' ) ); ?>
<?php } ?>