<?php
require_once __DIR__ . "/start-html.php";
?>
  <body class="bg-gray-100 flex min-h-screen">
  <!-- Sidebar -->
  <aside class="w-64 bg-white shadow-lg min-h-screen hidden md:block">
    <div class="p-6 border-b">
      <h2 class="text-2xl font-bold text-gray-800">Painel Admin</h2>
    </div>
    <nav class="mt-4 space-y-2">
      <a href="/admin/dashboard" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">📊 Dashboard</a>
      <a href="/list-client" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">👤 Clientes</a>
      <a href="/list-product-admin" class="block px-6 py-3 text-blue-600 font-semibold bg-gray-100 rounded-r-full">🛒 Produtos</a>
      <a href="/solicits" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">📦 Solicitações</a>
      <a href="/admin/configuracoes" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">⚙️ Configurações</a>
    </nav>
  </aside>

      <!-- Modal de Confirmação -->
      <div id="modal-confirmacao" class="fixed inset-0 z-50 hidden">
        <!-- Fundo escuro -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Conteúdo do modal -->
        <div class="relative z-10 flex items-center justify-center h-full">
          <div class="bg-white rounded-xl shadow-lg p-6 max-w-sm w-full text-center">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Tem certeza que deseja excluir?</h2>
            <p class="text-gray-600 mb-6">Essa ação não pode ser desfeita.</p>
            <div class="flex justify-center space-x-4">
              <button id="cancelarModal" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancelar</button>
              <a id="confirmarExclusao" href="#" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Excluir</a>
            </div>
          </div>
        </div>
      </div>


  <main class="flex-1 p-8">
    <h1 class="text-3xl font-bold text-gray-700 mb-6 text-center">Painel de Produtos</h1>

    <div class="overflow-x-auto">
      <table class="min-w-full bg-white shadow-md rounded-xl overflow-hidden">
        <thead class="bg-gray-200 text-gray-700 text-left">
          <tr>
            <th class="py-3 px-6">ID produto</th>
            <th class="py-3 px-6">Nome</th>
            <th class="py-3 px-6">Preço</th>
            <th class="py-3 px-6">Categoria</th>
            <th class="py-3 px-6">Quantidade</th>
            <th class="py-3 px-6 text-center">Ações</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <?php foreach ($produtos as $produto): ?>
            <tr class="hover:bg-gray-50">
              <td name="idProd" value="<?= $produto->getId() ?>" class="py-3 px-6"><?= $produto->getId() ?></td>
              <td class="py-3 px-6"><?= $produto->getNome() ?></td>
              <td class="py-3 px-6"><?= $produto->getPrecoFormatado() ?></td>
              <td class="py-3 px-6"><?= $produto->getCategoria() ?></td>
              <td class="py-3 px-6"><?= $produto->getQuantidade() ?></td>

              <td class="py-3 px-6 text-center">
                <a href="edit-product?id_prod=<?= $produto->getId() ?>" class="text-blue-600 hover:underline mr-4">Editar</a>
                <button 
                name="btn-excluir" class="text-red-600 hover:underline" data-id="<?= $produto->getId() ?>">Excluir</button>
          
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="mt-6 text-center">
      <a href="/cadaster-product" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700">
        + Adicionar Produto
      </a>
      <form action="gera-pdf" method="post">
        <button type="submit" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 m-8">
          Imprimir relatório PDF
        </button>
      </form>
    </div>
  </main>

  <script src="/JS/DeleteProdModal.js"></script>
<?php 

require_once __DIR__ . "/end-html.php";

?>


