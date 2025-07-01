<?php
/**
 * Template Name: Serviço - Rede & Conectividade
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Rede e Conectividade da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0v-9a.75.75 0 01.75-.75z" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Rede & Conectividade</h1>
      <p class="max-w-2xl text-lg text-gray-600">Projetos de LAN, WAN, Wi-Fi e SD-WAN para garantir desempenho e segurança na comunicação.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      A Onlitec projeta, implementa e gerencia infraestruturas de <strong>rede corporativa</strong> de alta performance, abrangendo switching, routing, Wi-Fi 6/6E e soluções <em>Software-Defined WAN</em>. Trabalhamos com Cisco, Aruba, Fortinet e Mikrotik, aplicando segmentação baseada em <em>Zero Trust</em> e automação via Ansible. Segundo Forrester 2024, adoção de SD-WAN reduz custos de conectividade em até 30% e melhora disponibilidade. Oferecemos desde site survey wireless até otimização de QoS para aplicações críticas em tempo real.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-wifi"></i></span><span><strong>Alta disponibilidade:</strong> redes redundantes com failover automático.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-shield-alt"></i></span><span><strong>Segurança ponta-a-ponta:</strong> firewall de próxima geração e NAC.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-rocket"></i></span><span><strong>Desempenho otimizado:</strong> QoS para VoIP, vídeo e ERP.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-network-wired"></i></span><span><strong>Escalabilidade:</strong> SD-WAN para filial em minutos.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Wi-Fi corporativo:</strong> cobertura 802.11ax para 3.000 usuários em campus universitário.</p>
      <p><strong>SD-WAN multinuvem:</strong> interligação de AWS, Azure e datacenter on-prem.</p>
      <p><strong>Rede OT segura:</strong> segmentação de fábrica com protocolos industriais.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Equipe CCNP, NSE e CWNA certificada.</li>
      <li>Monitoramento NetBox + Grafana para visibilidade 24/7.</li>
      <li>Serviços de cabling certificação CAT6A e fibra.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaNetwork" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaNetwork');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
