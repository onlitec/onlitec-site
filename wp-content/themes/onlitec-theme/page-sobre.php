<?php
/*
Template Name: Sobre
*/
get_header(); ?>
<section class="container mx-auto py-16">
  <h1 class="text-4xl font-bold mb-6">Sobre a Onlitec Soluções em T.I</h1>
  <p>Fundada em 2010, a Onlitec é referência em soluções de TI no Brasil.</p>
  <h2 class="text-2xl font-semibold mt-8">Missão, Visão e Valores</h2>
  <ul class="list-disc ml-6 mt-4">
    <li>Inovação</li>
    <li>Confiabilidade</li>
    <li>Foco no cliente</li>
  </ul>
  <a href="<?php echo home_url('/contato') ?>" class="inline-block mt-8 px-6 py-3 bg-blue-600 text-white rounded">Entre em contato</a>
</section>
<?php get_footer() ?>
