<?php
/*
Template Name: Soluções Tecnológicas
*/
get_header(); ?>
<section class="container mx-auto py-16">
  <h1 class="text-4xl font-bold mb-6">Soluções Tecnológicas da Onlitec</h1>
  <div class="grid md:grid-cols-2 gap-8">
    <div>
      <h2 class="text-2xl font-semibold">Transformação Digital</h2>
      <p>Automação de processos com RPA.</p>
    </div>
    <div>
      <h2 class="text-2xl font-semibold">IoT para Indústrias</h2>
      <p>Integração e monitoramento de dispositivos.</p>
    </div>
    <div>
      <h2 class="text-2xl font-semibold">IA & ML</h2>
      <p>Análise de dados com machine learning.</p>
    </div>
    <div>
      <h2 class="text-2xl font-semibold">Modernização de Infra</h2>
      <p>Atualização de infraestruturas legadas.</p>
    </div>
  </div>
  <a href="<?php echo home_url('/contato') ?>" class="inline-block mt-8 px-6 py-3 bg-blue-600 text-white rounded">Consulte um especialista</a>
</section>
<?php get_footer() ?>
