<?php
require_once "start-html.php";
?>

  <section class="text-center py-12">
    <h2 class="text-4xl font-bold mb-2">Todos os Produtos</h2>
    <p class="text-gray-600">Confira nossa seleção de produtos de tecnologia</p>
  </section>

  
  <section class="max-w-7xl mx-auto px-4 pb-16">
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

      <?php foreach($productsList as $product): ?>
      <div class="bg-white shadow-md rounded-xl p-4 flex flex-col">
        <img src="<?= $product->getImagemFormatada() ?>" alt="<?= $product->getImagem() ?>" class="rounded mb-4 w-full h-1/2 object-cover">
        <h3 class="text-lg font-bold mb-1"><?= $product->getNome() ?></h3>
        <p class="text-gray-600 text-sm mb-2"><?= $product->getDescricao() ?></p>
        <span class="text-blue-600  font-bold text-3xl"><?= $product->getPrecoFormatado() ?></span>
        <a href="./product?id_prod=<?=$product->getId()?>" 
        class="text-white bg-blue-700 text-center m-4 p-2 rounded-2xl font-bold text-lg hover:bg-blue-950 hover:transition ">Ver Mais
        </a>
      </div>
        <?php endforeach; ?>

    </div>
  </section>

<?php
require_once "end-html.php";
?>
