<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 00:14
 */

namespace Paada\Model;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 */
class Usuario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $senha;
    /**
     * @ORM\Column(type="string")
     */
    private $username;


    /**
     * @ORM\OneToOne(targetEntity="Professor", mappedBy="usuario")
     * @ORM\OneToOne(targetEntity="Responsavel", mappedBy="usuario")
     */
    private $permissao;

//    /**
//
//     */
//    private $permissao;


    /**
     * @return mixed
     */
    public function getPermissao()
    {
        return $this->permissao;
    }

    /**
     * @param mixed $permissao
     * @return mixed
     */
    public function setPermissao($permissao)
    {
        $this->permissao = $permissao;
        return $this;
    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

}