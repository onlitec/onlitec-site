<?php
/**
 * Template Name: Serviço - Treinamentos e Workshops
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Treinamentos e Workshops da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 14.25l3.75 2.25L12 18.75m0-4.5l-3.75 2.25L12 18.75m9-6.75v10.5a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 22.5V12m9 0L3 7.5m18 4.5L12 7.5m0 0V3" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Treinamentos e Workshops</h1>
      <p class="max-w-2xl text-lg text-gray-600">Capacite sua equipe com programas práticos e atualizados nas principais tecnologias de mercado.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      Nossos <strong>Treinamentos e Workshops</strong> cobrem desde fundamentos de computação em nuvem, DevOps e segurança cibernética até frameworks ágeis como Scrum e Kanban. Instrutores certificados AWS, Azure, Linux Foundation e PMI conduzem turmas <em>in company</em> ou remotas com laboratórios hands-on. Estudos da LinkedIn Learning 2024 indicam que empresas que investem em capacitação aumentam retenção de talentos em 23%. Oferecemos trilhas personalizadas, materiais em português e avaliação de conhecimento pré e pós-curso para medir ROI.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-graduation-cap"></i></span><span><strong>Aprendizado prático:</strong> laboratórios reais e desafios.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-certificate"></i></span><span><strong>Certificação:</strong> preparação para exames oficiais.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-users"></i></span><span><strong>Engajamento:</strong> dinâmicas colaborativas e gamificação.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-chart-line"></i></span><span><strong>Performance:</strong> aumento de produtividade pós-treinamento.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Bootcamp DevOps:</strong> 40 horas de labs Kubernetes e CI/CD para time de engenharia.</p>
      <p><strong>Workshop LGPD:</strong> sensibilização de 200 colaboradores sobre proteção de dados.</p>
      <p><strong>Trilha Cloud AWS:</strong> preparação para o exame Solutions Architect Associate com 90% de aprovação.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Instrutores com experiência de campo e didática comprovada.</li>
      <li>Conteúdo atualizado continuamente conforme tendências.</li>
      <li>Acesso a sandbox pós-curso por 30 dias para prática adicional.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaTrain" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaTrain');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
