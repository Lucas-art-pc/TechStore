<?php
require_once "start-html.php";
?>

  <!-- DETALHES DO PRODUTO -->
  <main class="max-w-5xl mx-auto p-8 mt-10 bg-white shadow-xl rounded-xl my-40">
    <div class="grid md:grid-cols-2 gap-8 items-start my-20">
      
      <!-- Imagem -->
      <img src="<?= $product->getImagemFormatada() ?>" alt="Imagem do Produto" class="w-full max-w-xl h-[400px]  rounded-2xl shadow-lg mx-auto">
      <!-- Informações -->
      <div>
        <h2 class="text-3xl font-bold mb-4"><?= $product->getNome() ?></h2>
        <p class="text-gray-600 mb-6">
          <?= $product->getDescricao() ?>
        </p>
        <span class="text-2xl font-bold text-blue-600 mb-4 block"><?= $product->getPrecoFormatado() ?></span>
        <span class="text-lg font-bold text-gray-500 block">Em dólar:</span>
        <span class="text-2xl font-bold text-blue-700 block"><?= $product->getPrecoDolar() ?></span>
        <button class="mt-4 bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
          Adicionar ao Carrinho
        </button>
      </div>
    </div>
  </main>

<?php
require_once "end-html.php";

?>