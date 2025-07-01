<?php
/**
 * Template Name: Serviço - Cibersegurança
 * Template Post Type: page
 * Description: Página detalhada para o serviço de Cibersegurança da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 9.75c0 7.125 7.5 10.5 7.5 10.5s7.5-3.375 7.5-10.5a7.5 7.5 0 10-15 0z" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Cibersegurança</h1>
      <p class="max-w-2xl text-lg text-gray-600">Proteção abrangente para seus dados e sistemas, alinhada aos mais altos padrões de segurança.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      Com a rápida evolução das ameaças digitais, a Onlitec Soluções em T.I oferece serviços de <strong>Cibersegurança</strong> que abrangem <em>consultoria, implementação e monitoramento</em>. Atuamos com frameworks <strong>NIST 2.0</strong> e práticas <em>Zero Trust</em>, integrando soluções de <strong>XDR, SASE e MFA</strong>. Nossas equipes conduzem avaliações de vulnerabilidade, <em>penetration tests</em> e implementação de firewalls de próxima geração (NGFW). Utilizamos plataformas de <strong>Security Information and Event Management (SIEM)</strong> para detecção de ameaças em tempo real e resposta a incidentes. De acordo com o relatório IBM Cost of a Data Breach 2024, organizações que implementam XDR reduzem o tempo de contenção em 50%. Garanta compliance com <strong>LGPD/GDPR</strong> e proteja a reputação do seu negócio.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-lock"></i></span><span><strong>Redução de riscos:</strong> mitigação proativa de ameaças internas e externas.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-balance-scale"></i></span><span><strong>Conformidade:</strong> atendimento a LGPD/GDPR e outras normas setoriais.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-clock"></i></span><span><strong>Resposta ágil:</strong> SOC 24/7 com SLA de 15 minutos para incidentes críticos.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-eye"></i></span><span><strong>Visibilidade total:</strong> dashboards em tempo real sobre postura de segurança.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Auditoria de LGPD:</strong> mapeamento de dados pessoais e implementação de controles para conformidade.</p>
      <p><strong>Implantação de NGFW:</strong> substituição de firewalls legados por solução de próxima geração com inspeção SSL.</p>
      <p><strong>SOC MDR:</strong> detecção e resposta gerenciada para e-commerce, reduzindo falsos positivos em 60%.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Equipe certificada CISSP, CISM e ISO 27001.</li>
      <li>SOC próprio com monitoramento contínuo e threat intelligence.</li>
      <li>Planos de resposta a incidentes customizados por segmento.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaCyber" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaCyber');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
