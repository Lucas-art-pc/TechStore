<?php

namespace Src\System\Controller\AdminController\AuthController;

use Src\System\Repository\LoginAdminRepository;
use Src\System\Controller\Controller;

class ControllerLogin implements Controller
{
    public function __construct(private LoginAdminRepository $loginAdminRepository)
    {
    }

    // Exibe o formulário de login
     public function processaRequisicao()
    {
    

        if (isset($_POST['autenticar'])) {
            session_start();

            $email = filter_input(INPUT_POST, 'email_admin', FILTER_SANITIZE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha_admin', FILTER_DEFAULT);
            $admin = $this->loginAdminRepository->buscarPorEmail($email);


            // Verifica se encontrou o admin e se a senha confere
            if ($admin && $email === $admin['email_admin'] && password_verify($senha, $admin['senha_admin'])) {
                $_SESSION['id_admin'] = $admin['id_admin'];
                $_SESSION['nome_admin'] = $admin['nome_admin'];
                header('Location: /list-product-admin');
                exit();
            }
            $_SESSION['erro'] = 'Email ou senha inválidos';
            header('Location: /login-admin');
            exit;
        }

        // Requisição GET, mostra o formulário de login
        require_once __DIR__ . "/../../../../Views/AdminViewers/Login/login-admin.php";


    }

}
