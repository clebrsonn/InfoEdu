<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 16/06/2016
 * Time: 23:48
 */

namespace Paada\Model;


use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

trait Pessoa
{

    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer")
     *
     */
    private $id;

    /**
     * @Column(type="text")
     *
     */
    private $nome;


    /**
     * @Column(type="text")
     *
     */
    private $sobrenome;


    /**
     * @Column(type="text")
     *
     */
    private $e_mail;


    /**
     * @Column(type="text")
     *
     */
    private $telefone;


    /**
     * @Column(type="text")
     *
     */
    private $endereco;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param mixed $sobrenome
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    /**
     * @return mixed
     */
    public function getEMail()
    {
        return $this->e_mail;
    }

    /**
     * @param mixed $e_mail
     */
    public function setEMail($e_mail)
    {
        $this->e_mail = $e_mail;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }


}