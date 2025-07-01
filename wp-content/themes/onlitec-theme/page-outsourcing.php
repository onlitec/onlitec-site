<?php
/**
 * Template Name: Serviço - Manutenção e Outsourcing
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Manutenção e Outsourcing de TI da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m-6 0h6v6" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Manutenção e Outsourcing</h1>
      <p class="max-w-2xl text-lg text-gray-600">Garanta operação contínua e especializada da sua infraestrutura de TI com equipes dedicadas.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      A Onlitec oferece <strong>outsourcing de TI</strong> completo: suporte N1-N3, administração de servidores, rede e aplicações, além de <em>field service</em>. Modelos <em>Time & Material</em> ou <em>Managed Services</em> com SLAs de até 99,9% de disponibilidade. Ferramentas ITSM (ServiceNow, GLPI) e monitoramento proativo (Zabbix, Datadog) garantem visibilidade e resposta rápida. Segundo ISG 2024, empresas que terceirizam infraestrutura reduzem custos operacionais em 18% e melhoram foco no core business.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-headset"></i></span><span><strong>Suporte 24/7:</strong> equipe dedicada de especialistas.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-chart-pie"></i></span><span><strong>Previsibilidade de custos:</strong> contratos mensais fixos.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-user-shield"></i></span><span><strong>Governança:</strong> processos ITIL e ISO 20000.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-sync-alt"></i></span><span><strong>Escalabilidade:</strong> rápido ajuste de headcount conforme demanda.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Service Desk Global:</strong> atendimento em 3 idiomas com CSAT 94%.</p>
      <p><strong>Projeto Roll-out Windows 11:</strong> upgrade de 2.500 máquinas sem impacto na operação.</p>
      <p><strong>Administração SAP Basis:</strong> redução de incidentes críticos em 40%.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Profissionais certificados ITIL, MCSA, CCNA, RHCSA.</li>
      <li>Central de serviços própria em data center Tier III.</li>
      <li>Relatórios mensais de indicadores e melhoria contínua.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaOut" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaOut');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
