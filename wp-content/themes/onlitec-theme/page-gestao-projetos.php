<?php
/**
 * Template Name: Serviço - Gestão de Projetos de TI
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Gestão de Projetos de TI da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h.01M12 12h.01M15 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Gestão de Projetos de TI</h1>
      <p class="max-w-2xl text-lg text-gray-600">Entrega de projetos dentro do prazo, escopo e orçamento por meio de metodologias ágeis e tradicionais.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      A Onlitec atua como <strong>PMO</strong> para projetos de infraestrutura, desenvolvimento de software e transformação digital, utilizando <strong>PMBOK 7ª edição</strong>, <em>Scrum</em> e <em>PRINCE2</em>. Definimos <em>KPIs</em>, matriz RACI e gerenciamos riscos, comunicação e procurement. Ferramentas como Jira, MS Project e Monday.com sustentam a governança e visibilidade de <em>sprints</em>, cronogramas e custos. Segundo PMI Pulse of the Profession 2025, organizações com gestão de projetos madura têm 2x mais chance de cumprir objetivos de negócio. Garantimos entregas iterativas, <em>stakeholder engagement</em> e controle de mudanças.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-clock"></i></span><span><strong>Prazo garantido:</strong> planejamento detalhado e gestão de cronograma.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-dollar-sign"></i></span><span><strong>Controle de custos:</strong> acompanhamento de orçamento e <em>earned value</em>.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-sitemap"></i></span><span><strong>Alinhamento estratégico:</strong> projetos ligados aos OKRs da empresa.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-users"></i></span><span><strong>Engajamento das partes:</strong> comunicação efetiva com stakeholders.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Data Center Migration:</strong> relocação de 100 servidores sem downtime não planejado.</p>
      <p><strong>ERP roll-out:</strong> implementação global em 8 países, dentro do budget.</p>
      <p><strong>Programa DevOps:</strong> adoção de CI/CD em 10 squads, reduzindo tempo de release em 85%.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Gerentes de projeto certificados PMP, PMI-ACP e PRINCE2 Practitioner.</li>
      <li>Dashboard em tempo real para C-level via Power BI.</li>
      <li>Metodologia híbrida adaptada ao contexto do cliente.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaProj" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaProj');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
