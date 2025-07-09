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
      <a href="/admin/clientes" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">👤 Clientes</a>
      <a href="/admin/produtos" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">🛒 Produtos</a>
      <a href="/admin/cadastrar-produto" class="block px-6 py-3 text-blue-600 font-semibold bg-gray-100 rounded-r-full">➕ Cadastrar Produto</a>
      <a href="/admin/configuracoes" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">⚙️ Configurações</a>
    </nav>
  </aside>

  <!-- Main content -->
  <main class="flex-1 p-8">
    <h1 class="text-3xl font-bold text-gray-700 mb-6 text-center">Cadastrar Novo Produto</h1>

    <form action="edit-product" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-xl shadow-md max-w-3xl mx-auto space-y-6">
      <div>
        <label for="nome_prod" class="block text-sm font-medium text-gray-700">Nome do Produto</label>
        <input type="text" name="nome_prod" id="nome_prod" required value="<?= $product->getNome() ?>"  class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div>
        <label for="descricao_prod" class="block text-sm font-medium text-gray-700">Descrição</label>
        <textarea name="desc_prod" id="desc_prod" rows="4" required  class="mt-1 w-full p-6 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <?= $product->getDescricao() ?>
        </textarea>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
          <label for="preco_prod" class="block text-sm font-medium text-gray-700">Preço</label>
          <input type="number" step="0.01" name="preco_prod" id="preco_prod" value="<?= $product->getPreco() ?>" required class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
          <label for="quantidade_prod" class="block text-sm font-medium text-gray-700">Quantidade</label>
          <input type="number" name="qtd_prod" id="qtd_prod" required value="<?= $product->getQuantidade() ?>" class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
          <label for="categoria_prod" class="block text-sm font-medium text-gray-700">Categoria</label>
            <select name="categoria_prod" id="categoria_prod" required class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
              <option value="<?= $product->getCategoria() ?>"><?= $product->getCategoria() ?></option>
              <option value="Smartphone">Smartphone</option>
              <option value="Fones de ouvido">Fones de ouvido</option>
              <option value="Tablets">Tablets</option>
              <option value="Desktop, notebook">Desktop, notebook</option>
            </select>
        </div>
      </div>

      <div>
        <label for="imagem_prod" class="block text-sm font-medium text-gray-700">Imagem do Produto</label>
        <input type="file" name="image_prod" id="image_prod" accept="image/*" required value="<?= $product->getImagem() ?>" class="mt-1 w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div class="text-center">
        <button type="submit" name="atualiza" id="atualiza" class="bg-blue-600 text-white cursor-pointer px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 ">
          Salvar Produto
        </button>
      </div>
    </form>
  </main>
<?php

require_once __DIR__ . "/end-html.php";



