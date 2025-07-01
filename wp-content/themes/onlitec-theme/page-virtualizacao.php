<?php
/**
 * Template Name: Serviço - Virtualização & Contêineres
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Virtualização e Contêineres da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5h18M5.25 10.5h13.5M7.5 13.5h9M9.75 16.5h4.5M12 19.5h0" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Virtualização & Contêineres</h1>
      <p class="max-w-2xl text-lg text-gray-600">Infraestruturas flexíveis e eficientes com VMware, Hyper-V, KVM, Docker e Kubernetes.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      A Onlitec projeta, implementa e gerencia ambientes de <strong>virtualização de servidores, desktops e contêineres</strong> que proporcionam alta disponibilidade e otimização de recursos. Trabalhamos com VMware vSphere, Microsoft Hyper-V, Proxmox e soluções de <em>container orchestration</em> baseadas em <strong>Kubernetes e OpenShift</strong>. Adotamos práticas de <em>Infrastructure as Code</em> e <em>GitOps</em> para provisionamento rápido e consistente. Conforme o relatório Flexera 2025, 92% das empresas utilizam contêineres em produção para ganhar agilidade. Nosso serviço abrange <em>capacity planning</em>, hardening de hosts, <em>service mesh</em> e integração com CI/CD para entregas contínuas.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-expand"></i></span><span><strong>Escalabilidade:</strong> crescimento dinâmico sem downtime.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-dollar-sign"></i></span><span><strong>Redução de CapEx:</strong> melhor aproveitamento de hardware.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-shipping-fast"></i></span><span><strong>Agilidade DevOps:</strong> pipelines integrados para deploy em minutos.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-sync-alt"></i></span><span><strong>Portabilidade:</strong> contêineres executam em qualquer nuvem ou on-prem.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Cluster Kubernetes:</strong> implantação HA para 200 microserviços com autoscaling.</p>
      <p><strong>VDI:</strong> desktops virtuais para 500 usuários remotos, reduzindo custos de hardware em 40%.</p>
      <p><strong>Modernização de monólito:</strong> refatoração de aplicação legacy para contêineres, melhorando tempo de release em 80%.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Engenheiros certificados VCP-DCV, CKA e RHCSA.</li>
      <li>Monitoramento Prometheus/Grafana com alertas proativos.</li>
      <li>Plano de capacidade e otimização de licenças VMware.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaVirt" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaVirt');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
