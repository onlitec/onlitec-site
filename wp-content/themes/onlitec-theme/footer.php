</main>
<footer class="bg-blue-900 text-white py-10">
  <div class="container mx-auto grid md:grid-cols-3 gap-8 px-4">
    <div>
      <h3 class="text-xl font-bold mb-4">Onlitec TI</h3>
      <p>Transformamos tecnologia em resultados para o seu negócio.</p>
    </div>
    <div>
      <h4 class="font-semibold mb-3">Links rápidos</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="<?= home_url('/') ?>" class="hover:underline">Home</a></li>
        <li><a href="<?= home_url('/sobre') ?>" class="hover:underline">Sobre</a></li>
        <li><a href="<?= home_url('/servicos') ?>" class="hover:underline">Serviços</a></li>
        <li><a href="<?= home_url('/contato') ?>" class="hover:underline">Contato</a></li>
      </ul>
    </div>
    <div>
      <h4 class="font-semibold mb-3">Contato</h4>
      <p class="text-sm flex items-center"><i class="fas fa-phone-alt mr-2"></i> +55 11 4000-1234</p>
      <p class="text-sm flex items-center mt-2"><i class="fas fa-envelope mr-2"></i> contato@onlitec.com</p>
      <div class="flex space-x-3 mt-4 text-xl">
        <a href="#" class="hover:text-blue-300"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="hover:text-blue-300"><i class="fab fa-instagram"></i></a>
        <a href="#" class="hover:text-blue-300"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>
  </div>
  <?php wp_footer() ?>
</footer>
</body>
</html>
