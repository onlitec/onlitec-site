<?php
/*
Template Name: Clientes
*/
get_header(); ?>
<section class="container mx-auto py-16">
  <h1 class="text-4xl font-bold mb-6">Nossos Clientes</h1>
  <div class="grid md:grid-cols-3 gap-8 mb-8">
    <div class="p-4 border rounded text-center">Varejo Brasil</div>
    <div class="p-4 border rounded text-center">Indústria Tech</div>
    <div class="p-4 border rounded text-center">Saúde Global</div>
  </div>
  <div class="space-y-6">
    <blockquote class="p-6 border rounded">“O projeto foi entregue no prazo…”<footer>— Carlos, CTO da Varejo Brasil</footer></blockquote>
    <blockquote class="p-6 border rounded">“A performance melhorou 40%…”<footer>— Ana, Gerente de TI da Indústria Tech</footer></blockquote>
  </div>
  <a href="<?php echo home_url('/contato') ?>" class="inline-block mt-8 px-6 py-3 bg-blue-600 text-white rounded">Fale conosco</a>
</section>
<?php get_footer() ?>
