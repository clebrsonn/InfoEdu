<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 23:40
 */

namespace Paada\Controller;

use Doctrine\ORM\EntityManager;
use Paada\Model\Aluno;
use Slim\Http\Request;

class AlunoController
{

    /**
     * AlunoController constructor.
     */
    public function __construct()
    {
    }

    public function novoAluno(Request $request, EntityManager $em)
    {

        $aluno = new Aluno();
        $form = $this->createForm('AppBundle\Form\UserType', $aluno);
        $form->handleRequest($request);


        $em->persist($aluno);
        $em->flush();

    }
}