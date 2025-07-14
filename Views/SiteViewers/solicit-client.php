<?php
require_once "start-html.php";
?>
<body class="bg-gray-100 flex items-center justify-center">

  <div class="bg-white shadow-lg  items-center justify-center rounded-2xl p-8 max-w-md w-full">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Cadastro de Cliente</h2>

    <form action="#" method="POST" class="space-y-4">

      <div>
        <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
        <input type="text" id="nome" name="nome" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
        <input type="email" id="email" name="email" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <div>
        <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
        <input type="tel" id="telefone" name="telefone" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <div>
        <label for="endereco" class="block text-sm font-medium text-gray-700">Endereço</label>
        <input type="text" id="endereco" name="endereco" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <div>
        <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
        <input type="text" id="cpf" name="cpf" required maxlength="14" placeholder="000.000.000-00"
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <div>
        <label for="senha" class="block text-sm font-medium text-gray-700">Senha</label>
        <input type="password" id="senha" name="senha" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <button type="submit"
              class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
        Cadastrar
      </button>
    </form>
</div>



<?php
require_once "end-html.php";

?>