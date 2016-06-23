<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 18/06/2016
 * Time: 16:12
 */
require_once('core/vendor/autoload.php');
require_once('bootstrap.php');

$app = new \Slim\Slim(array(
    'debug' => true,
    'templates.path' => 'src/View/pages',
    'cache' => false
));

$auth = function () use ($app) {
    if (!isset($_SESSION['PHP_AUTH_USER']) or !isset($_SESSION['PHP_AUTH_PW'])) {
        $app->redirect('/login');
    }
};

$profesor = function () use ($app) {
    $permissao = $_SESSION['PHP_AUTH_USER']->getPermissao()->getTipo();
    if (strcasecmp($permissao, 'recepcao') !== 0 && strcasecmp($permissao, 'gerente') !== 0) {
        $app->redirect('Erro/acessonegado.php');
    }
};

$app->get('/login', function () use ($app) {
    $app->render('/login.html');
});

$app->post('/login', function () use ($app, $entityManager) {
//    var_dump($app->request->post());
    $controller = new Paada\Controller\UsuarioController();
    $controller->login($app->request, $entityManager);

});

//$app->get('/acompanhamento', function () use ($app, $entityManager) {
//    $app->render('/acompanhamento.html');
//});


$app->group('/professor', $auth, function () use ($app, $entityManager) {

    // Get book with ID
    $app->get('/agenda', function ($id) use ($app, $entityManager) {
        $app->render('/professor/agenda_prof.html');

    });

    // Update book with ID
    $app->put('/books/:id', function ($id) {

    });

    // Delete book with ID
    $app->delete('/books/:id', function ($id) {

    });

});


$app->group('/pais', function () use ($app, $entityManager) {

    $app->get('/', function () use ($app, $entityManager) {
        $app->render('/aluno/index.html');
    });

    $app->get('/acompanhamento', function () use ($app, $entityManager) {
        $app->render('/aluno/acompanhamento.html');

    });

    // Update book with ID
    $app->post('/acompanhamento', function ($id) {
        print($id);

    });

    // Delete book with ID
    $app->delete('/aluno/', function ($id) {

    });

});


$app->run();
