<?php
/**
 * Template Name: Serviço - Nuvem
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Nuvem da Onlitec.
 */
get_header();
?>

<!-- Main Content -->
<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <!-- Icon -->
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <!-- Cloud icon (Heroicons) -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75a4.5 4.5 0 004.5 4.5h11.25a4.5 4.5 0 00.57-8.963 6.75 6.75 0 10-12.657 0A4.502 4.502 0 002.25 15.75z" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Serviços de Nuvem</h1>
      <p class="max-w-2xl text-lg text-gray-600">Soluções escaláveis para otimizar sua infraestrutura na nuvem com alta disponibilidade, segurança e redução de custos.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      Na Onlitec Soluções em T.I, oferecemos um portfólio completo de Serviços de Nuvem que englobam <strong>Infraestrutura como Serviço (IaaS)</strong>, <strong>Plataforma como Serviço (PaaS)</strong> e <strong>Software como Serviço (SaaS)</strong>. Trabalhamos com os principais provedores do mercado – AWS, Microsoft Azure e Google Cloud – para entregar ambientes <em>multi-nuvem</em> ou híbridos que proporcionam flexibilidade, performance e economia. Nossos especialistas utilizam práticas de <em>FinOps</em> para otimizar custos e implementam arquiteturas <em>serverless</em> e <em>containers</em> (Kubernetes) para acelerar o <em>time-to-market</em> das suas aplicações. A recuperação de desastres e a alta disponibilidade são garantidas por zonas de disponibilidade distribuídas globalmente e políticas de <em>backup</em> automatizadas.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3">
        <span class="text-blue-600"><i class="fas fa-chart-line"></i></span>
        <span><strong>Escalabilidade sob demanda:</strong> ajuste recursos em minutos conforme a necessidade.</span>
      </li>
      <li class="flex gap-3">
        <span class="text-blue-600"><i class="fas fa-wallet"></i></span>
        <span><strong>Redução de custos:</strong> modelo pay-as-you-go elimina gastos de capital em hardware.</span>
      </li>
      <li class="flex gap-3">
        <span class="text-blue-600"><i class="fas fa-shield-alt"></i></span>
        <span><strong>Segurança reforçada:</strong> criptografia, IAM granular e conformidade com LGPD/GDPR.</span>
      </li>
      <li class="flex gap-3">
        <span class="text-blue-600"><i class="fas fa-sync-alt"></i></span>
        <span><strong>Recuperação de desastres:</strong> backups georreplicados e failover automático.</span>
      </li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Migração de e-commerce:</strong> transferência de servidores legados para AWS, reduzindo custos operacionais em 35% e aumentando a disponibilidade para 99,99%.</p>
      <p><strong>Análise de dados em tempo real:</strong> implementação de pipelines serverless no Google Cloud para processar milhões de eventos IoT por hora.</p>
      <p><strong>Ambiente Dev/Test on-demand:</strong> provisionamento automático de ambientes de teste no Azure, acelerando ciclos de desenvolvimento em 40%.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Suporte especializado 24/7 com equipe certificada (AWS, Azure, GCP).</li>
      <li>Consultoria personalizada de arquitetura e governança em nuvem.</li>
      <li>Integração contínua com ferramentas de monitoramento e FinOps.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaButton" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">
      Solicite um Orçamento
    </button>
  </section>
</main>

<!-- Simple React component for CTA interaction -->
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaButton');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
