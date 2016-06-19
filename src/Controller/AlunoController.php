<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 23:40
 */

namespace Paada\Controller;

class AlunoController
{

    /**
     * AlunoController constructor.
     */
    public function __construct()
    {
    }

    public function novoAluno($request)
    {

//        $user = new User();
//        $form = $this->createForm('AppBundle\Form\UserType', $user);
//        $form->handleRequest($request);


        $em->persist($user);
        $em->flush();

    }
}