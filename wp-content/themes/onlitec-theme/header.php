<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<a href="#mainContent" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 bg-blue-600 text-white p-2 rounded">Pular para conteúdo</a>

<!-- Top bar -->
<div class="bg-blue-900 text-white text-sm">
  <div class="container mx-auto flex justify-between items-center py-1 px-4">
    <div class="flex items-center gap-4">
      <span><i class="fas fa-phone-alt mr-1"></i> +55 11 4000-1234</span>
      <span><i class="fas fa-envelope mr-1"></i> contato@onlitec.com</span>
    </div>
    <div class="hidden md:flex items-center gap-4">
      <a href="#" class="hover:underline">Help Center</a>
      <span>|</span>
      <a href="#" class="hover:underline">Privacy Policy</a>
      <span>|</span>
      <a href="#" class="hover:underline">Sitemap</a>
    </div>
  </div>
</div>

<header class="bg-white shadow">
  <div class="container mx-auto flex items-center justify-between p-4">
    <a href="<?= home_url() ?>" class="text-2xl font-bold text-blue-800">Onlitec<span class="text-gray-600"> TI</span></a>
    <div class="flex items-center gap-6">
      <button id="navToggle" class="lg:hidden text-2xl text-blue-800 focus:outline-none">
        <i class="fas fa-bars"></i>
      </button>
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_id'        => 'primaryNav',
          'menu_class'     => 'hidden lg:flex flex-col lg:flex-row space-y-2 lg:space-y-0 lg:space-x-6'
        ]);
      ?>
      <a href="<?= esc_url( home_url('/contato') ); ?>" class="hidden lg:inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-5 rounded shadow">
        Let's get started
      </a>
    </div>
  </div>
</header>
<?php if (!is_front_page()) { get_template_part('template-parts/hero'); } ?>
<main id="mainContent">
