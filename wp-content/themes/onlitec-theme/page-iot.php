<?php
/**
 * Template Name: Serviço - Internet das Coisas (IoT)
 * Template Post Type: page
 * Description: Página detalhada para o serviço de IoT da Onlitec.
 */
get_header();
?>

<main class="pt-24 pb-16 bg-gray-50 text-gray-800">
  <!-- Hero Section -->
  <section class="container mx-auto px-4 text-center">
    <div class="flex flex-col items-center gap-6">
      <div class="w-20 h-20 flex items-center justify-center rounded-full bg-blue-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75V17.25M6.75 12H17.25" />
        </svg>
      </div>
      <h1 class="text-4xl font-bold text-blue-900">Internet das Coisas (IoT)</h1>
      <p class="max-w-2xl text-lg text-gray-600">Conecte dispositivos, colete dados em tempo real e otimize operações com soluções IoT ponta a ponta.</p>
    </div>
  </section>

  <!-- Description -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Descrição do Serviço</h2>
    <p class="leading-7 text-justify">
      A Onlitec integra sensores, gateways e plataformas em nuvem (AWS IoT Core, Azure IoT Hub, Google Cloud IoT) para monitorar ativos, automatizar processos e gerar insights analíticos. Implementamos protocolos MQTT, LoRaWAN e OPC-UA, além de aplicar Edge Computing com Kubernetes e K3s. Estudos da Gartner 2025 apontam que projetos IoT reduzem custos operacionais em média 17% no primeiro ano.
    </p>
  </section>

  <!-- Benefits -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Benefícios</h2>
    <ul class="grid md:grid-cols-2 gap-6 list-none">
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-satellite-dish"></i></span><span><strong>Visibilidade:</strong> telemetria em tempo real de ativos.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-tools"></i></span><span><strong>Manutenção preditiva:</strong> reduz paradas não programadas.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-leaf"></i></span><span><strong>Eficiência energética:</strong> otimização de consumo.</span></li>
      <li class="flex gap-3"><span class="text-blue-600"><i class="fas fa-shield-alt"></i></span><span><strong>Segurança:</strong> dispositivos autenticados e dados criptografados.</span></li>
    </ul>
  </section>

  <!-- Use Cases -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Casos de Uso</h2>
    <div class="space-y-4">
      <p><strong>Smart Factory:</strong> OEE aumentado em 20% com sensores industriais.</p>
      <p><strong>Agricultura 4.0:</strong> irrigação automática reduz consumo de água em 30%.</p>
      <p><strong>Cidade Inteligente:</strong> gestão de iluminação pública economiza 40% de energia.</p>
    </div>
  </section>

  <!-- Differentials -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl">
    <h2 class="text-2xl font-semibold mb-4">Diferenciais da Onlitec</h2>
    <ul class="list-disc ml-6 space-y-2">
      <li>Parcerias com fabricantes de hardware líderes (STMicro, Nordic).</li>
      <li>Equipe certificada em AWS IoT Specialty.</li>
      <li>Laboratório de prototipagem rápida para POCs em 2 semanas.</li>
    </ul>
  </section>

  <!-- CTA -->
  <section class="container mx-auto mt-12 px-4 max-w-5xl text-center">
    <button id="ctaIoT" class="mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded shadow-lg transition-colors">Solicite um Orçamento</button>
  </section>
</main>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('ctaIoT');
    if (btn) {
      btn.addEventListener('click', () => {
        window.location.href = '<?php echo esc_url( home_url( '/contato' ) ); ?>';
      });
    }
  });
</script>

<?php get_footer(); ?>
