<?php
/**
 * Template Name: Serviço - DevOps & Automação
 * Template Post Type: page
 * Description: Página detalhada para o serviço de DevOps e Automação da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955a.75.75 0 011.06 0L21.75 12l-9.486 9.486a.75.75 0 01-1.06 0L2.25 12z" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">DevOps &amp; Automação</h1>
      <p class="max-w-2xl text-lg text-gray-600">Velocidade e qualidade em entregas contínuas com pipelines CI/CD e infraestrutura como código.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      Implementamos cultura e práticas <strong>DevOps</strong> completas: <em>Continuous Integration</em>, <em>Continuous Delivery</em>, <em>Infrastructure as Code</em> e observabilidade. Utilizamos Jenkins, GitLab CI, GitHub Actions, Terraform, Ansible e Kubernetes para automatizar compilação, testes e deploy. Segundo DORA 2024, equipes elite de DevOps realizam mais de 100 implantações por dia com <em>lead time</em> inferior a 1 hora. Nossos especialistas mapeiam processos, definem KPIs (Deployment Frequency, MTTR) e criam pipelines seguros (DevSecOps).
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-rocket"></i></span><span><strong>Agilidade:</strong> releases diários sem interrupção.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-shield-alt"></i></span><span><strong>Segurança:</strong> DevSecOps com <em>shift-left</em> em testes.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-code-branch"></i></span><span><strong>Escalabilidade:</strong> clusters Kubernetes autoescaláveis.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-sync-alt"></i></span><span><strong>Consistência:</strong> IaC elimina deriva de configuração.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Pipeline Multicloud:</strong> deploy automático em AWS e Azure com Terraform.</p>
      <p><strong>Blue/Green Deployment:</strong> atualização zero-downtime de plataforma de e-commerce.</p>
      <p><strong>Observabilidade:</strong> stack Prometheus + Grafana reduz MTTR em 60%.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Engenheiros certificados CKA, Terraform Associate e GitLab CI.</li>
      <li>Adoção de Value Stream Mapping para otimizar fluxo de trabalho.</li>
      <li>Pacotes de automação pré-construídos para rápida adoção.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaDevOps" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaDevOps');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
