<?php
/**
 * Template Name: Serviço - Backup & Recuperação de Desastres
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Backup & Recuperação de Desastres da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Backup & Recuperação de Desastres</h1>
      <p class="max-w-2xl text-lg text-gray-600">Proteja dados críticos e garanta continuidade de negócios com planos robustos de DR.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      A Onlitec oferece soluções completas de <strong>Backup e Recuperação de Desastres (DR)</strong> on-premises, em nuvem e híbridas. Implementamos políticas baseadas no modelo <strong>3-2-1-1-0</strong> (3 cópias, 2 mídias, 1 off-site, 1 imutável, 0 erros verificados) com ferramentas líderes como <em>Veeam</em>, <em>Commvault</em> e <em>Azure Backup</em>. Integramos replicação contínua, snapshots e <em>air-gap</em> para proteção contra ransomware. De acordo com Data Protection Trends 2025, empresas com DRaaS reduzem em 43% o tempo médio de recuperação. Nossos especialistas criam runbooks, realizam testes de restauração trimestrais e definem RPO/RTO aderentes a requisitos de negócio.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-shield-alt"></i></span><span><strong>Proteção anti-ransomware:</strong> backups imutáveis e validação automática.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-history"></i></span><span><strong>RTO reduzido:</strong> failover orquestrado em minutos.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-cloud"></i></span><span><strong>DRaaS escalável:</strong> recuperação em nuvem sob demanda.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-check"></i></span><span><strong>Conformidade:</strong> auditoria e relatórios para ISO 27001 e LGPD.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Recuperação de ransomware:</strong> restauração de 100 TB em 6 horas com Veeam SureBackup.</p>
      <p><strong>Estratégia multi-nuvem:</strong> replicação de VMs VMware para Azure Site Recovery.</p>
      <p><strong>Backup de SaaS:</strong> proteção de dados Microsoft 365 com retenção de 10 anos.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Equipe certificada Veeam VMCE, AWS Backup Specialty.</li>
      <li>Laboratório de testes de DR dedicado para validação periódica.</li>
      <li>Monitoramento 24/7 com alertas proativos de falha de jobs.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaBackup" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaBackup');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
