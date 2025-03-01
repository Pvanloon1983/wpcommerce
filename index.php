<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP Commerce
 */

get_header();
?>
<div class="content-area">
  <main>
    <section class="slider">
      <div class="container">
        <div class="row">
          Slider
        </div>
      </div>
    </section>
    <section class="slider">
      <div class="container">
        <div class="row">
          Popular Products
        </div>
      </div>
    </section>
    <section class="slider">
      <div class="container">
        <div class="row">
          New Arrivals
        </div>
      </div>
    </section>
    <section class="slider">
      <div class="container">
        <div class="row">
          Deal of the Week
        </div>
      </div>
    </section>
    <section class="slider">
      <div class="container">
        <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
          <h2><?php the_title(); ?></h2>
          <div><?php the_content(); ?></div>
        </article>
        <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </div>
      </div>
    </section>
  </main>
</div>
<?php get_footer(); ?>