<?php
require_once "start-html.php";
?>
<aside class="w-64 bg-white shadow-lg min-h-screen hidden md:block">
    <div class="p-6 border-b">
      <h2 class="text-2xl font-bold text-gray-800">Painel Admin</h2>
    </div>
    <nav class="mt-4 space-y-2">
      <a href="/admin/dashboard" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">📊 Dashboard</a>
      <a href="/admin/clientes" class="block px-6 py-3 text-blue-600 font-semibold bg-gray-100 rounded-r-full">👤 Clientes</a>
      <a href="/admin/produtos" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">🛒 Produtos</a>
      <a href="/solicits" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">📦 Solicitações</a>
      <a href="/admin/configuracoes" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">⚙️ Configurações</a>
    </nav>
  </aside>
  <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-xl p-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 text-center">Solicitações de Produtos</h1>

    <table class="w-full text-left table-auto border-collapse">
      <thead>
        <tr class="bg-gray-200 text-gray-700">
          <th class="p-3">ID</th>
          <th class="p-3">Solicitante</th>
          <th class="p-3">Email</th>
          <th class="p-3">CPF</th>
          <th class="p-3">Endereço</th>
          <th class="p-3 text-center">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($solicitacoes as $solicitacao) : ?>
          <tr class="border-b hover:bg-gray-50">
            <td class="p-3"><?= $solicitacao->getIdCli() ?></td>
            <td class="p-3"><?= $solicitacao->getNomeCli() ?></td>
            <td class="p-3"><?= $solicitacao->getEmailCli()?></td>
            <td class="p-3"><?= $solicitacao->getCpfCli()?></td>
            <td class="p-3"><?= $solicitacao->getEnderecoCli()?></td>
           <td class="py-3 px-2 text-center">
                <a href="edit-product?id_client=<?= $solicitacao->getIdCli() ?>" class="text-green-600 hover:underline mr-4">
                    Ver
                </a>
                <a href="edit-product?id_client=<?= $solicitacao->getIdCli() ?>" class="text-blue-600 hover:underline mr-4">
                    Editar
                </a>
                <button name="btn-excluir" class="text-red-600 hover:underline" data-id="<?= $solicitacao->getIdCli() ?>">
                Excluir
                </button>
          
              </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  
<?php require_once "end-html.php"; ?>
