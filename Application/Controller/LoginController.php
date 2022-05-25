<?php
/**
 * Controller Login
 * Author: Maycon de Moraes
 * Date:   27/11/2019
 */

namespace App\Controller;

class LoginController extends \Core\Classes\Controller
{
    /**
     * Recebe o post do login
     */
    public function logar()
    {
        echo "test"; die;
        if ($this->checkPost()) {
            echo "test"; die;            
            $usuario = new \App\Model\Usuario;
            $usuario->setLogin($this->post['usuario']);
            $usuario->setSenha($this->post['senha']);
            $usuario->authDb();
            redirect(DEFAULTCONTROLLER.'\logado');
        } else {
            echo "test"; die;
            redirect(DEFAULTCONTROLLER);
        }
    }


    public function logof()
    {
        \Core\Classes\Security::destroy();
        redirect(DEFAULTCONTROLLER);
    }
}