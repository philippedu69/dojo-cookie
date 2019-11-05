<?php


namespace App\Controller;

class AdminController extends AbstractController
{
    public function index()
    {
        if (!isset($_SESSION['user'])) {
            header('location: /login/index');
        }
        return $this->twig->render('Admin/index.html.twig');
    }
    public function logout()
    {
        session_destroy();
        header("location: /login/index");
    }
}
