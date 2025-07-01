<?php
/**
 * Template Name: Serviço - Monitoramento & Observabilidade
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Monitoramento e Observabilidade da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75l2.25 2.25m8.25-2.25a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Monitoramento & Observabilidade</h1>
      <p class="max-w-2xl text-lg text-gray-600">Visibilidade completa de infraestrutura e aplicações com métricas, logs e tracing em tempo real.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      O serviço de <strong>Monitoramento & Observabilidade</strong> da Onlitec integra<strong> métricas, logs e traces</strong> para identificar proativamente gargalos e incidentes. Utilizamos Prometheus, Grafana, Loki, Elastic Stack e soluções de APM como New Relic e OpenTelemetry. Implementamos <em>SLOs</em>, alertas inteligentes com <em>machine learning</em> e painéis executivos. Segundo o State of DevOps 2024, organizações com observabilidade madura reduzem em 45% o MTTR. Atuamos desde a arquitetura de coleta até a capacitação de equipes para cultura de operação orientada a dados.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-bell"></i></span><span><strong>Detecção precoce:</strong> alertas em tempo real minimizam impacto ao usuário.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-chart-line"></i></span><span><strong>Insights de performance:</strong> análise detalhada de latência e uso de recursos.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-tools"></i></span><span><strong>Automação de RCA:</strong> correlação de eventos acelera diagnóstico.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-tachometer-alt"></i></span><span><strong>Melhoria contínua:</strong> feedback loop para times DevOps.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Dashboard de e-commerce:</strong> monitoramento de pedidos por segundo e taxa de erro 5xx.</p>
      <p><strong>Tracing distribuído:</strong> análise de latência entre microserviços em Kubernetes.</p>
      <p><strong>Capacity planning:</strong> projeção de crescimento de CPU/RAM com base em tendências de métricas.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Especialistas certificados Grafana and Elastic Observability.</li>
      <li>Integração com pipelines CI/CD para testes de performance.</li>
      <li>Serviço gerenciado 24/7 com SLA de alerta &lt; 60s.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaMon" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaMon');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
