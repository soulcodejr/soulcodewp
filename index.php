<?php get_header();?>
<h1>Olá, Teste</h1>

<!-- Content -->
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		the_title();
		the_content();
	}
}
?>
<!-- Content -->

<?php get_footer();?>