<?php
/*
Template Name: Serviços
*/
get_header(); ?>
<section class="container mx-auto py-16">
  <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-12">Nossos Serviços</h2>
  <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3">
    <?php
      $services = new WP_Query([
        'post_type'      => 'page',
        'post_parent'    => get_queried_object_id(),
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC'
      ]);
      $i = 1;
      while ($services->have_posts()) : $services->the_post();
        $number = sprintf('%02d.', $i++);
    ?>
      <article class="group bg-white border rounded-xl p-6 flex flex-col items-center text-center shadow-sm hover:shadow-lg transition">
        <span class="text-blue-600 text-xl font-extrabold mb-4"><?= $number ?></span>
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium', ['class' => 'w-24 h-24 rounded-full object-cover mb-4']); ?>
        <?php else : ?>
          <div class="w-24 h-24 flex items-center justify-center rounded-full bg-blue-50 mb-4">
            <i class="fas fa-laptop-code text-blue-600 text-2xl"></i>
          </div>
        <?php endif; ?>
        <h3 class="font-semibold text-lg mb-4 leading-snug"><?php the_title(); ?></h3>
        <a href="<?php the_permalink(); ?>" class="mt-auto inline-flex items-center justify-center w-10 h-10 bg-blue-600 text-white rounded-full transition group-hover:translate-x-1">
          <i class="fas fa-arrow-right"></i>
        </a>
      </article>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>
<?php get_footer() ?>
