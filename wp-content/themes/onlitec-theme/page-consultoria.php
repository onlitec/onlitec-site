<?php
/**
 * Template Name: Serviço - Consultoria de TI
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Consultoria de TI da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.25 2.25a9 9 0 11-10.5-10.5 9 9 0 0110.5 10.5z" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Consultoria de TI</h1>
      <p class="max-w-2xl text-lg text-gray-600">Estratégias inovadoras para acelerar a transformação digital e gerar valor ao seu negócio.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      A Consultoria de TI da Onlitec orienta empresas em jornadas de <strong>transformação digital</strong>, alinhando tecnologia aos objetivos de negócio. Utilizamos abordagens <em>Lean</em> e modelos de maturidade COBIT 2019 para avaliar processos, identificar gaps e recomendar soluções. Nossos consultores elaboram <strong>roadmaps</strong> que abrangem adoção de nuvem, modernização de aplicações, automação e iniciativas de <em>Data & AI</em>. De acordo com pesquisa Gartner 2025, organizações guiadas por estratégia digital aumentam a receita em 20% em média. Atuamos desde a análise de TCO/ROI até a gestão da mudança, garantindo retorno mensurável e mitigação de riscos.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-lightbulb"></i></span><span><strong>Visão estratégica:</strong> planejamento de TI alinhado ao core business.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-chart-pie"></i></span><span><strong>Otimização de custos:</strong> identificação de ineficiências e redução de OPEX.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-project-diagram"></i></span><span><strong>Governança sólida:</strong> adoção de frameworks ITIL, COBIT e ISO 27001.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-users"></i></span><span><strong>Gestão da mudança:</strong> workshops e treinamento para equipes internas.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Plano Diretor de TI:</strong> elaboração de roadmap trienal para indústria automotiva com ROI previsto de 28%.</p>
      <p><strong>Assessment de Nuvem:</strong> migração de 150 workloads para modelo híbrido, economizando 35% de custos.</p>
      <p><strong>Programa DevOps:</strong> implantação de pipelines CI/CD em empresa financeira, reduzindo tempo de release de 30 dias para 3 horas.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Consultores certificados PMP, AWS Solutions Architect e ITIL Expert.</li>
      <li>Metodologias ágeis para entregas rápidas e iterativas.</li>
      <li>Métricas claras de sucesso e relatórios executivos.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaConsult" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Agende uma Consultoria</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaConsult');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
