<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Ver Solicitação</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">

  <div class="bg-white shadow-2xl rounded-2xl max-w-4xl w-full p-10 space-y-8">
    
    <!-- Cabeçalho -->
    <div class="text-center">
      <h1 class="text-4xl font-extrabold text-gray-800">Detalhes da Solicitação</h1>
      <p class="text-gray-500 mt-2">Confira as informações abaixo antes de aprovar ou rejeitar.</p>
    </div>

    <!-- Informações do cliente -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700 text-lg">
      <div class="bg-gray-50 rounded-xl p-5 shadow-sm">
        <h3 class="font-semibold text-gray-600">Nome</h3>
        <p class="text-gray-900 mt-1"><?= $solicitacao->getNomeCli() ?></p>
      </div>

      <div class="bg-gray-50 rounded-xl p-5 shadow-sm">
        <h3 class="font-semibold text-gray-600">Email</h3>
        <p class="text-gray-900 mt-1"><?= $solicitacao->getEmailCli()?></p>
      </div>

      <div class="bg-gray-50 rounded-xl p-5 shadow-sm">
        <h3 class="font-semibold text-gray-600">CPF</h3>
        <p class="text-gray-900 mt-1"><?= $solicitacao->getCpfCli()?></p>
      </div>

      <div class="bg-gray-50 rounded-xl p-5 shadow-sm">
        <h3 class="font-semibold text-gray-600">Endereço</h3>
        <p class="text-gray-900 mt-1"><?= $solicitacao->getEnderecoCli()?></p>
      </div>

      <div class="md:col-span-2 bg-gray-50 rounded-xl p-5 shadow-sm">
        <h3 class="font-semibold text-gray-600">Descrição da Solicitação</h3>
        <p class="text-gray-900 mt-1"><?= $solicitacao->getDescricaoCli()?></p>
      </div>
    </div>

    <!-- Botões -->
    <div class="flex flex-col sm:flex-row justify-center gap-6 pt-6">
      <button class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-8 rounded-xl text-lg transition">
        ✅ Aprovar Solicitação
      </button>
      <button class="bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-8 rounded-xl text-lg transition">
        ❌ Rejeitar Solicitação
      </button>
    </div>

  </div>

</body>
</html>
