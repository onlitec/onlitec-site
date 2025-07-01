<?php
/**
 * Template Name: Serviço - Automação & IA
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Automação e Inteligência Artificial da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v2.25m0 10.5v2.25M16.5 12h2.25M4.5 12h2.25M18.364 5.636l-1.591 1.591M7.227 16.773l-1.591 1.591M18.364 18.364l-1.591-1.591M7.227 7.227L5.636 5.636" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Automação &amp; IA</h1>
      <p class="max-w-2xl text-lg text-gray-600">Acelere processos e inove com Robotic Process Automation (RPA) e Inteligência Artificial.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      A Onlitec entrega soluções de <strong>RPA</strong> com UiPath e Automation Anywhere, além de projetos de <strong>Machine Learning</strong>, <em>Computer Vision</em> e <em>Natural Language Processing</em> utilizando AWS, Azure e Google AI. Desenvolvemos <em>chatbots</em> cognitivos, motores de recomendação e modelos preditivos. Segundo McKinsey 2024, empresas que adotam automação inteligente obtêm aumento de produtividade de até 40% e ROI em menos de 12 meses.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-robot"></i></span><span><strong>Eficiência:</strong> elimina tarefas repetitivas.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-chart-line"></i></span><span><strong>Escalabilidade:</strong> processos 24/7 sem aumentar headcount.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-bullseye"></i></span><span><strong>Precisão:</strong> redução de erros humanos.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-lightbulb"></i></span><span><strong>Inovação:</strong> insights preditivos para decisões estratégicas.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Processamento de Faturas:</strong> RPA integrado ao ERP reduz tempo de lançamento em 85%.</p>
      <p><strong>Manutenção Preditiva:</strong> modelos ML diminuem falhas de equipamento em 30%.</p>
      <p><strong>Chatbot de Atendimento:</strong> suporte com NLP que resolve 70% das solicitações sem intervenção humana.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Data Scientists certificados e experiência em modelos de larga escala.</li>
      <li>Parcerias com UiPath, AWS AI Services e Google Cloud AI.</li>
      <li>Abordagem de entrega ágil com provas de conceito em 3 semanas.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaAI" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaAI');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
