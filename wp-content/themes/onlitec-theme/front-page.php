<?php get_header() ?>
<section class="h-screen bg-cover bg-center" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/images/banner.jpg')">
  <div class="h-full bg-black bg-opacity-50 flex items-center justify-center">
    <h1 class="text-white text-4xl md:text-6xl">Conheça Nossas Soluções</h1>
  </div>
</section>

<section class="container mx-auto py-16">
  <h2 class="text-3xl font-bold text-center mb-8">Nossos Serviços</h2>
  <div class="grid md:grid-cols-3 gap-8">
    <div class="p-6 border rounded"><h3 class="font-semibold">Serviços de Nuvem</h3><p>Hospedagem, armazenamento…</p></div>
    <div class="p-6 border rounded"><h3 class="font-semibold">Cibersegurança</h3><p>Auditorias, firewalls…</p></div>
    <div class="p-6 border rounded"><h3 class="font-semibold">Desenvolvimento</h3><p>Web, mobile, APIs…</p></div>
  </div>
</section>

<section class="bg-gray-50 py-16">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-4">Nossa Missão</h2>
    <p>Oferecer soluções de TI inovadoras e confiáveis para transformar negócios.</p>
  </div>
</section>

<section class="container mx-auto py-16">
  <h2 class="text-3xl font-bold text-center mb-8">Depoimentos</h2>
  <div class="grid md:grid-cols-2 gap-8">
    <blockquote class="p-6 border rounded">“Excelente serviço…”<footer>— João, Varejo Brasil</footer></blockquote>
    <blockquote class="p-6 border rounded">“Transformou nosso…”<footer>— Maria, Saúde Global</footer></blockquote>
  </div>
</section>
<?php get_footer() ?>
