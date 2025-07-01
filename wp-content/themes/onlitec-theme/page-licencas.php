<?php
/**
 * Template Name: Serviço - Gerenciamento de Licenças
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Gerenciamento de Licenças da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75A2.25 2.25 0 0014.25 4.5h-4.5A2.25 2.25 0 007.5 6.75v3.75m9 3V17.25A2.25 2.25 0 0114.25 19.5h-4.5A2.25 2.25 0 017.5 17.25v-3.75m9 0h-9" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Gerenciamento de Licenças</h1>
      <p class="max-w-2xl text-lg text-gray-600">Controle de ativos de software para reduzir custos e garantir compliance.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      O <strong>Gerenciamento de Licenças</strong> da Onlitec abrange inventário, otimização e renovação de contratos de software (Microsoft, Adobe, Autodesk, Oracle e SaaS). Utilizamos plataformas <em>Software Asset Management (SAM)</em> como Flexera, Snow e Microsoft SCCM, combinadas a processos ITIL para evitar <strong>non-compliance</strong> e multas. Segundo IDC 2024, empresas maduras em SAM economizam em média 25% no gasto anual de licenciamento. Realizamos auditorias, consolidação de contratos e negociação com fornecedores para maximizar ROI.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-balance-scale"></i></span><span><strong>Conformidade:</strong> evita penalidades de auditoria.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-piggy-bank"></i></span><span><strong>Redução de custos:</strong> elimina licenças ociosas e duplicadas.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-chart-bar"></i></span><span><strong>Visibilidade:</strong> dashboards em tempo real de consumo.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-sync-alt"></i></span><span><strong>Processos automatizados:</strong> renovações programadas e alertas.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Auditoria Microsoft:</strong> regularização de 2.000 estações com economia de R$ 1,2 milhão.</p>
      <p><strong>Consolidação Adobe:</strong> migração para plano VIP, reduzindo 18% de custos.</p>
      <p><strong>Gestão SaaS:</strong> identificação de 300 licenças não utilizadas em CRM, gerando savings anuais.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Especialistas certificados ISO 19770 (SAM).</li>
      <li>Negociação direta com fabricantes para descontos.</li>
      <li>Relatórios executivos e recomendações de otimização contínua.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaLic" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaLic');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
