<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="row">
			<div class="col-md-9 col-12">
				<?php
				if (empty(get_post_meta(get_the_ID(), 'blog_id', true))){
					$blog_id = "IDなし";
				}else{
					$blog_id = "｜IDは".get_post_meta(get_the_ID(), 'blog_id', true);
				}
				?>
				<h1><?php the_title(); ?><?php echo $blog_id; ?></h1>
				<p><?php echo get_post_meta(get_the_ID(), 'blog_memo', true); ?></p>
			</div>
			<div class="col-md-3 col-12">
				<?php dynamic_sidebar( 'right-sidebar' ); ?>
			</div>
		</div><!-- .row -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
