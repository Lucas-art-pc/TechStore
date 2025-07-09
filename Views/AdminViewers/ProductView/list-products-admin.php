<?php
require_once __DIR__ . "/start-html.php";
?>


  <!-- Sidebar -->
  <aside class="w-64 bg-white shadow-lg min-h-screen hidden md:block">
    <div class="p-6 border-b">
      <h2 class="text-2xl font-bold text-gray-800">Painel Admin</h2>
    </div>
    <nav class="mt-4 space-y-2">
      <a href="/admin/dashboard" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">📊 Dashboard</a>
      <a href="/admin/clientes" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">👤 Clientes</a>
      <a href="/admin/produtos" class="block px-6 py-3 text-blue-600 font-semibold bg-gray-100 rounded-r-full">🛒 Produtos</a>
      <a href="/admin/pedidos" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">📦 Pedidos</a>
      <a href="/admin/configuracoes" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">⚙️ Configurações</a>
    </nav>
  </aside>

  <!-- Main content -->
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
              <td class="py-3 px-6"><?= $produto->getId() ?></td>
              <td class="py-3 px-6"><?= $produto->getNome() ?></td>
              <td class="py-3 px-6"><?= $produto->getPrecoFormatado() ?></td>
              <td class="py-3 px-6"><?= $produto->getCategoria() ?></td>
              <td class="py-3 px-6"><?= $produto->getQuantidade() ?></td>

              <td class="py-3 px-6 text-center">
                <a href="edit-product?id_prod=<?= $produto->getId() ?>" class="text-blue-600 hover:underline mr-4">Editar</a>
                <a href="delete-product?id_prod=<?= $produto->getId() ?>" class="text-red-600 hover:underline">Excluir</a>
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

<?php 

require_once __DIR__ . "/end-html.php";
