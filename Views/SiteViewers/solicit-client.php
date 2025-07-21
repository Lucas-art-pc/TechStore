<?php
require_once "start-html.php";
?>

<main class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white shadow-lg rounded-2xl p-8 max-w-md w-full">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Solicitação de Produto</h2>

    <form action="/process-solicit" method="POST" class="space-y-4">

      <div>
        <label for="nome_cli" class="block text-sm font-medium text-gray-700">Seu nome</label>
        <input type="text" id="nome_cli" name="nome_cli" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <div>
        <label for="email_cli" class="block text-sm font-medium text-gray-700">E-mail</label>
        <input type="email" id="email_cli" name="email_cli" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <div>
        <label for="cpf_cli" class="block text-sm font-medium text-gray-700">CPF</label>
        <input type="text" id="cpf_cli" name="cpf_cli" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <div>
        <label for="endereco_cli" class="block text-sm font-medium text-gray-700">Endereço</label>
        <input type="text" id="endereco_cli" name="endereco_cli" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <div>
        <label for="descricao_cli" class="block text-sm font-medium text-gray-700">Descrição ou observações</label>
        <textarea id="descricao_cli" name="descricao_cli" rows="3"
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
      </div>

      <div>
        <label for="senha_cli" class="block text-sm font-medium text-gray-700">Senha</label>
        <input type="password" id="senha_cli" name="senha_cli" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <button type="submit"
              class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition"
              name="send"
              id="send">
        Enviar Solicitação
      </button>

      <div class="flex">
        <a href="/login-account" class="text-blue-700 text-center mx-auto">Já tenho uma conta!</a>
      </div>
    </form>
  </div>
</main>
<?php
require_once "end-html.php";
?>
