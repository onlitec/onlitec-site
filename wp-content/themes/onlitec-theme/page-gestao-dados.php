<?php
/**
 * Template Name: Serviço - Gestão de Dados e BI
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Gestão de Dados e Business Intelligence da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18M3 9h18M3 15h18M3 21h18" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Gestão de Dados e BI</h1>
      <p class="max-w-2xl text-lg text-gray-600">Transforme dados brutos em insights acionáveis para decisões estratégicas.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      Implementamos <strong>Data Warehouses</strong>, <strong>Data Lakes</strong> e pipelines de <em>ETL/ELT</em> em plataformas como Snowflake, AWS Redshift e Azure Synapse. Aplicamos governança (DCAM), qualidade de dados e modelagem <em>star schema</em>. Dashboards em Power BI, Tableau e Looker proporcionam visualização em tempo real. Conforme Gartner 2024, empresas <em>data-driven</em> ampliam a margem operacional em 22%. A Onlitec alinha dados a KPIs de negócio, garantindo segurança (LGPD) e escalabilidade.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-database"></i></span><span><strong>Centralização:</strong> dados integrados em único repositório confiável.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-shield-alt"></i></span><span><strong>Compliance:</strong> aderência a LGPD e ISO 27001.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-chart-pie"></i></span><span><strong>Insights rápidos:</strong> dashboards self-service.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-brain"></i></span><span><strong>Analytics avançado:</strong> suporte a IA e Machine Learning.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Retail Analytics:</strong> previsão de demanda com 95% de acurácia.</p>
      <p><strong>Customer 360°:</strong> consolidação de 10 fontes para segmentação de marketing.</p>
      <p><strong>Financial Reporting:</strong> fechamento contábil 50% mais rápido.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Equipe com certificações SnowPro, AWS Data Analytics e Microsoft DP-500.</li>
      <li>Framework de implantação ágil em 4 semanas.</li>
      <li>Metodologia <em>DataOps</em> para melhoria contínua.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaData" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaData');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
