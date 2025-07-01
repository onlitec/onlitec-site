<?php
/*
Template Name: Serviço Detalhe
*/
get_header(); ?>
<section class="container mx-auto py-16">
  <h1 class="text-4xl font-bold mb-6"><?php the_title(); ?></h1>
  <article class="prose max-w-none">
    <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
  </article>
  <a href="<?php echo home_url('/contato') ?>" class="inline-block mt-8 px-6 py-3 bg-blue-600 text-white rounded">Solicitar Orçamento</a>
</section>
<?php get_footer(); ?>
