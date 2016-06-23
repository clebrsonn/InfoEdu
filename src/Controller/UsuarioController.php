<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 18/06/2016
 * Time: 21:08
 */

namespace Paada\Controller;

use Doctrine\ORM\EntityManager;
use Slim\Http\Request;
use Slim\Slim;

require_once(dirname(dirname(__DIR__)) . '/bootstrap.php');


class UsuarioController
{

    public function login(Request $request, EntityManager $em)
    {
        $user = $em
            ->getRepository('Paada\Model\Usuario')
            ->findOneBy(array('username' => $request->post('form-username'),
                'senha' => $request->post('form-password')));

        var_dump($user->getPermissao());
//        if (!is_null($resp) && $resp->getPermissao() instanceof Responsavel) {
//            session_start();
        $_SESSION['PHP_AUTH_USER'] = $user;
//            echo "aqui";
//
//        } elseif (!is_null($resp) && $resp->getPermissao() instanceof Professor) {
//            session_start();
//            echo "aqui222222";
//        } else {
//            $app = Slim::getInstance();
//            $app->redirect('/login');
//        }
    }

    public function logout(Request $request, EntityManager $em)
    {
        
        $usuario = $em
            ->getRepository('Paada\Model\Usuario')
            ->findOneBy(array('username' => $request->post('form-username'),
                'senha' => $request->post('form-password')));
        if (!is_null($usuario)) {
            session_start();

        } else {
            $app = Slim::getInstance();
            $app->redirect('/login');
        }
    }
}