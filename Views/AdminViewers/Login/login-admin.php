<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
    <link href="/styles/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-sm bg-white p-8 rounded-2xl shadow-lg">
    <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Área do Administrador</h2>

    <?php if (!empty($_SESSION['erro'])): ?>
      <div class="bg-red-100 text-red-600 p-3 rounded mb-4 text-sm">
        <?= $_SESSION['erro']; unset($_SESSION['erro']); ?>
      </div>
    <?php endif; ?>

    <form action="/login-admin" method="POST" class="space-y-4">
      <div>
        <label for="email_admin" class="block text-sm font-medium text-gray-600">Email</label>
        <input type="email" name="email_admin" id="email_admin" required
          class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="senha_admin" class="block text-sm font-medium text-gray-600">Senha</label>
        <input type="password" name="senha_admin" id="senha_admin" required
          class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-xl hover:bg-blue-700 transition"
        name="autenticar"
        id="autenticar">
        Entrar
      </button>
    </form>
  </div>

</body>
</html>
