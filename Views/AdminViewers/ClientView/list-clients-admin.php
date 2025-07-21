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
      <a href="/admin/clientes" class="block px-6 py-3 text-blue-600 font-semibold bg-gray-100 rounded-r-full">👤 Clientes</a>
      <a href="/list-product-admin" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">🛒 Produtos</a>
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
    <h1 class="text-3xl font-bold text-gray-700 mb-6 text-center">Painel de Clientes</h1>

    <div class="overflow-x-auto">
      <table class="min-w-full bg-white shadow-md rounded-xl overflow-hidden">
        <thead class="bg-gray-200 text-gray-700 text-left">
          <tr>
            <th class="py-3 px-6">ID Cliente</th>
            <th class="py-3 px-6">Cliente</th>
            <th class="py-3 px-6">CPF</th>
            <th class="py-3 px-6">Email</th>
            <th class="py-3 px-6">Endereço</th>
            <th class="py-3 px-6 text-center">Ações</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <?php foreach ($clientes as $cliente): ?>
            <tr class="hover:bg-gray-50">
              <td name="idProd" value="<?= $cliente->getIdCli() ?>" class="py-3 text-center"><?= $cliente->getIdCli() ?></td>
              <td class="py-3 px-6"><?= $cliente->getNomeCli() ?></td>
              <td class="py-3 px-6"><?= $cliente->getCpfCli() ?></td>
              <td class="py-3 px-6"><?= $cliente->getEmailCli() ?></td>
              <td class="py-3 px-2"><?= $cliente->getEnderecoCli() ?></td>

              <td class="py-3 px-2 text-center">
                <a href="edit-product?id_client=<?= $cliente->getIdCli() ?>" class="text-green-600 hover:underline mr-4">
                    Ver
                </a>
                <a href="edit-product?id_client=<?= $cliente->getIdCli() ?>" class="text-blue-600 hover:underline mr-4">
                    Editar
                </a>
                <button name="btn-excluir" class="text-red-600 hover:underline" data-id="<?= $cliente->getIdCli() ?>">
                Excluir
                </button>
          
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="mt-6 text-center">
      <form action="gera-pdf" method="post">
        <button type="submit" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 m-8">
          Imprimir relatório PDF
        </button>
      </form>
    </div>
  </main>

  <script src="/JS/DeleteCliModal.js"></script>
<?php 

require_once __DIR__ . "/end-html.php";

?>


