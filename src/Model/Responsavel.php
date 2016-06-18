<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 00:06
 */

namespace Paada\Model;


class Responsavel extends Usuario
{
    use Pessoa;
    private $aluno;

    /**
     * @return mixed
     */
    public function getAluno()
    {
        return $this->aluno;
    }

    /**
     * @param mixed $aluno
     * @return Aluno
     */
    public function setAluno(Aluno $aluno)
    {
        $this->aluno = $aluno;
        return $this;
    }



}