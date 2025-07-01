<?php
/**
 * Template Name: Serviço - Suporte Técnico e Help Desk
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Suporte Técnico e Help Desk da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75v4.5m0 6v.008h.008V17.25H12z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12a9.75 9.75 0 1119.5 0 9.75 9.75 0 01-19.5 0z" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Suporte Técnico & Help Desk</h1>
      <p class="max-w-2xl text-lg text-gray-600">Atendimento rápido e especializado para manter seus usuários e sistemas sempre produtivos.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      O serviço de <strong>Suporte Técnico e Help Desk</strong> da Onlitec fornece assistência de primeiro, segundo e terceiro níveis para ambientes Windows, Linux, macOS e aplicativos corporativos. Utilizamos plataformas ITSM baseadas em <em>ServiceNow</em> e <em>Freshservice</em> para gerenciamento de incidentes, problemas e solicitações de serviço. Nossos atendimentos seguem práticas <strong>ITIL 4</strong> e contam com <em>chatbots</em> alimentados por IA generativa para resolução de dúvidas comuns 24/7. Relatório HDI Support Center Practices 2024 mostra que a automação de tickets pode reduzir em 30% o tempo médio de resolução (MTTR). Oferecemos suporte remoto seguro, visitas on-site e produção de base de conhecimento personalizada.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-headset"></i></span><span><strong>Disponibilidade 24/7:</strong> atendimento contínuo para usuários em qualquer fuso horário.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-stopwatch"></i></span><span><strong>MTTR reduzido:</strong> resolução rápida com base em scripts e automação.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-file-alt"></i></span><span><strong>Base de conhecimento:</strong> documentação atualizada para autoatendimento.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-smile"></i></span><span><strong>Satisfação do usuário:</strong> CSAT superior a 95% em 2024.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Onboarding de colaboradores:</strong> preparação de equipamentos e contas em menos de 2 horas.</p>
      <p><strong>Suporte remoto seguro:</strong> resolução de falhas de VPN e impressão em usuários home office.</p>
      <p><strong>Auditoria de licenças:</strong> inventário automatizado reduzindo riscos de compliance.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Equipe certificada HDI-SCA, CompTIA A+ e Microsoft MCP.</li>
      <li>Chatbot com IA generativa integrado ao portal de chamados.</li>
      <li>Relatórios mensais de SLA, tendência e satisfação.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaSupport" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaSupport');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
