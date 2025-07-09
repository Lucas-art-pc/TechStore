<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Painel de Produtos</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background-color: #f1f5f9;
      margin: 0;
      padding: 40px;
      color: #1f2937;
    }

    h1 {
      font-size: 2.2rem;
      text-align: center;
      margin-bottom: 30px;
      color: #0f172a;
    }

    .table-container {
      max-width: 1100px;
      margin: 0 auto;
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
      overflow: hidden;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    thead {
      background-color: #e2e8f0;
    }

    thead th {
      padding: 16px;
      text-align: left;
      font-weight: 600;
      font-size: 0.95rem;
      color: #334155;
      border-bottom: 2px solid #cbd5e1;
    }

    tbody td {
      padding: 16px;
      font-size: 0.95rem;
      color: #334155;
      border-top: 1px solid #e2e8f0;
    }

    tbody tr:hover {
      background-color: #f8fafc;
    }

    .text-center {
      text-align: center;
    }

    .btn {
      display: inline-block;
      padding: 6px 12px;
      border-radius: 6px;
      font-size: 0.85rem;
      font-weight: 500;
      text-decoration: none;
      transition: background-color 0.2s;
    }

    .btn-edit {
      color: #2563eb;
      border: 1px solid #2563eb;
    }

    .btn-edit:hover {
      background-color: #2563eb;
      color: #ffffff;
    }

    .btn-delete {
      color: #dc2626;
      border: 1px solid #dc2626;
    }

    .btn-delete:hover {
      background-color: #dc2626;
      color: #ffffff;
    }

    .btn + .btn {
      margin-left: 8px;
    }
  </style>
</head>
<body>

  <h1>Painel de Produtos</h1>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Categoria</th>
        <th>Quantidade</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach($produtos as $produto): ?>
      <tr>
        <td><?= $produto->getId() ?></td>
        <td><?= $produto->getNome() ?></td>
        <td><?= $produto->getDescricao() ?></td>
        <td><?= $produto->getPrecoFormatado() ?></td>
        <td><?= $produto->getCategoria() ?></td>
        <td><?= $produto->getQuantidade() ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>