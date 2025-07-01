<?php
/**
 * Template Name: Serviço - Infraestrutura de TI
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Infraestrutura de TI da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75M3 6h18M4.5 18H19.5a1.5 1.5 0 001.5-1.5V9.75a1.5 1.5 0 00-1.5-1.5H4.5a1.5 1.5 0 00-1.5 1.5V16.5A1.5 1.5 0 004.5 18z" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Infraestrutura de TI</h1>
      <p class="max-w-2xl text-lg text-gray-600">Soluções completas para modernizar, gerenciar e proteger a base tecnológica da sua empresa.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      A Onlitec Soluções em T.I oferece serviços de <strong>Infraestrutura de TI</strong> que abrangem desde o data center até o endpoint. Implementamos servidores físicos e virtuais altamente disponíveis, redes de alto desempenho com tecnologias <em>SD-WAN</em> e soluções de armazenamento definidas por software. Nossos especialistas utilizam padrões de <em>hyperconverged infrastructure</em> (HCI) e automação para reduzir complexidade operacional e aumentar a agilidade. Monitoramos continuamente a saúde dos ativos através de plataformas AIOps e aplicamos práticas baseadas em <em>ITIL</em> e <em>DevOps</em> para garantir qualidade e velocidade na entrega. Seguimos recomendações de fabricantes líderes como Cisco, Dell, HPE e VMware para projetar arquiteturas resilientes e sustentáveis.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-server"></i></span><span><strong>Alta disponibilidade:</strong> ambientes tolerantes a falhas com SLA de 99,99%.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-tachometer-alt"></i></span><span><strong>Performance otimizada:</strong> redes 10/40/100 GbE e storage NVMe para workloads críticos.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-tools"></i></span><span><strong>Gerenciamento proativo:</strong> monitoramento 24/7 e automação de correções.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-leaf"></i></span><span><strong>Eficiência energética:</strong> consolidação de servidores reduz consumo em até 40%.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Atualização de data center legado:</strong> migração de 200 servidores físicos para cluster VMware HCI, diminuindo o espaço ocupado em 60%.</p>
      <p><strong>Implementação de SD-WAN:</strong> interligação de filiais com priorização de aplicações críticas, aumentando a produtividade em 25%.</p>
      <p><strong>Virtual Desktop Infrastructure:</strong> entrega de desktops virtuais seguros para equipe remota, reduzindo custos de suporte.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Equipe certificada Cisco, VMware e Red Hat.</li>
      <li>Metodologia de implantação rápida baseada em automação Ansible.</li>
      <li>Contratos de suporte flexíveis com monitoramento proativo 24/7.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaInfra" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaInfra');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
