<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 16/06/2016
 * Time: 23:49
 */

namespace Paada\Model;


class Aluno extends Usuario
{
    use Pessoa;
    private $responsavel;
    private $data_nascimento;

    /**
     * @return mixed
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * @param mixed $responsavel
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param mixed $data_nascimento
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }


}