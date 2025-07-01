<?php
/**
 * Template Name: Serviço - Sistemas Operacionais
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Sistemas Operacionais da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <!-- Server icon -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75h16.5v4.5H3.75v-4.5zM3.75 15.75h16.5v4.5H3.75v-4.5z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 10.5h16.5" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 6h.008v.008H6.75V6zM6.75 18h.008v.008H6.75V18z" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Sistemas Operacionais</h1>
      <p class="max-w-2xl text-lg text-gray-600">Gerenciamento completo de ambientes Windows, Linux e macOS para máxima segurança e performance.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      A Onlitec Soluções em T.I oferece serviços especializados de administração, suporte e migração de <strong>Sistemas Operacionais</strong> corporativos. Atualizamos e aplicamos <em>patches</em> críticos em distribuições Linux (RHEL, Ubuntu, SUSE), Microsoft Windows Server e macOS, garantindo conformidade com políticas de segurança (<em>Zero-Trust</em>) e requisitos da <strong>LGPD</strong>. Automatizamos a configuração de servidores bare-metal, máquinas virtuais e hosts de containers usando <em>Ansible</em> e <em>Terraform</em>, reduzindo erros e tempo de provisionamento. Também realizamos auditorias de hardening seguindo benchmarks CIS 2024 e projetamos planos de migração entre versões (ex.: Windows Server 2012 → 2022) com downtime mínimo.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-shield-alt"></i></span><span><strong>Segurança reforçada:</strong> aplicação de patches e hardening contínuos.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-clock"></i></span><span><strong>Alta disponibilidade:</strong> gerenciamento de clusters e failover automático.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-sync-alt"></i></span><span><strong>Automação total:</strong> scripts IaC reduzem tempo de provisionamento em 50%.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-user-check"></i></span><span><strong>Suporte especializado:</strong> equipe com certificações RHCE, MCSA e Apple ACSP.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Migração de Windows Server:</strong> atualização de 80 servidores para Windows Server 2022 com downtime inferior a 30 minutos.</p>
      <p><strong>Padronização Linux:</strong> criação de imagens Golden Image Ubuntu para 500 hosts em ambiente de nuvem.</p>
      <p><strong>Hardening macOS:</strong> ajuste de políticas de segurança em 300 notebooks corporativos conforme CIS benchmarks.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Monitoramento em tempo real via Zabbix e Prometheus.</li>
      <li>Documentação completa e transferência de conhecimento para a equipe interna.</li>
      <li>Contratos flexíveis de suporte 8x5 ou 24x7.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaOS" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaOS');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
