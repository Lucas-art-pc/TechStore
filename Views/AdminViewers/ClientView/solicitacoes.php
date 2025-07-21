<?php
require_once "start-html.php";
?>
<aside class="w-64 bg-white shadow-lg min-h-screen hidden md:block">
    <div class="p-6 border-b">
      <h2 class="text-2xl font-bold text-gray-800">Painel Admin</h2>
    </div>
    <nav class="mt-4 space-y-2">
      <a href="/admin/dashboard" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">📊 Dashboard</a>
      <a href="/list-client" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">👤 Clientes</a>
      <a href="/list-product-admin" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">🛒 Produtos</a>
      <a href="/solicits" class="block px-6 py-3 text-blue-600 font-semibold bg-gray-100 rounded-r-full">📦 Solicitações</a>
      <a href="/admin/configuracoes" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">⚙️ Configurações</a>
    </nav>
  </aside>
  <div class="max-w-6xl mx-auto bg-white shadow-xl rounded-3xl p-8">
  <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Solicitações de Produtos</h1>

  <div class="overflow-x-auto">
    <table class="w-full text-sm text-left border-collapse">
      <thead class="bg-gray-100 text-gray-700 uppercase text-xs tracking-wider">
        <tr>
          <th class="px-6 py-3">ID</th>
          <th class="px-6 py-3">Solicitante</th>
          <th class="px-6 py-3">Email</th>
          <th class="px-6 py-3">CPF</th>
          <th class="px-6 py-3">Endereço</th>
          <th class="px-6 py-3 text-center">Ações</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        <?php foreach ($solicitacoes as $solicitacao) : ?>
          <tr class="hover:bg-gray-50 transition-colors">
            <td class="px-6 py-4 font-medium text-gray-900"><?= $solicitacao->getIdCli() ?></td>
            <td class="px-6 py-4 text-gray-700"><?= $solicitacao->getNomeCli() ?></td>
            <td class="px-6 py-4 text-gray-700"><?= $solicitacao->getEmailCli() ?></td>
            <td class="px-6 py-4 text-gray-700"><?= $solicitacao->getCpfCli() ?></td>
            <td class="px-6 py-4 text-gray-700"><?= $solicitacao->getEnderecoCli() ?></td>
            <td class="px-6 py-4 text-center">
              <a 
                href="/solicit?id_solicit=<?= $solicitacao->getIdCli() ?>" 
                target="_blank" 
                class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition"
              >
                Ver
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

  
<?php require_once "end-html.php"; ?>
