<?php


namespace App\Controller;

class LoginController extends AbstractController
{
    public function index()
    {

        return $this->twig->render('Login/index.html.twig');
    }

    public function check()
    {
        if ($_POST['username'] === 'admin'&& $_POST['password'] === 'password') {
            $_SESSION['user'] = $_POST['username'];
            if ($_POST['remember-me']) {
                setcookie('admin', $_SESSION['user'], time()+30*24*3600);
            }
            header('location: /admin/index');
        } else {
            header('location: /login/index');
        }
    }
}
