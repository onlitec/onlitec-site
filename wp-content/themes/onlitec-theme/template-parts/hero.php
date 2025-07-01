<?php
/**
 * Generic hero section for pages (excluding front page)
 * It displays featured image as background, page title, and breadcrumb.
 */
$bg = '';
if (has_post_thumbnail(get_queried_object_id())) {
  $bg = get_the_post_thumbnail_url(get_queried_object_id(), 'full');
}
?>
<section class="relative h-60 md:h-72 lg:h-80 flex items-center justify-center text-center">
  <?php if ($bg): ?>
    <img src="<?= esc_url($bg); ?>" alt="" loading="lazy" class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-blue-900/60"></div>
  <?php else: ?>
    <div class="absolute inset-0 bg-gradient-to-r from-blue-800 to-blue-600"></div>
  <?php endif; ?>
  <div class="relative z-10 text-white px-4">
    <h1 class="text-3xl md:text-4xl font-extrabold"><?= esc_html(get_the_title()); ?></h1>
    <?php if (!is_front_page()): ?>
      <nav class="mt-2 text-sm text-gray-200 space-x-1">
        <a href="<?= esc_url(home_url('/')); ?>" class="hover:underline">Home</a>
        <span>/</span>
        <span><?= esc_html(get_the_title()); ?></span>
      </nav>
    <?php endif; ?>
  </div>
</section>
