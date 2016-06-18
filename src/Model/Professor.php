<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 00:22
 */

namespace Paada\Model;


class Professor extends Usuario
{
    use Pessoa;
    private $disciplina;

    /**
     * @return mixed
     */
    public function getDisciplina()
    {
        return $this->disciplina;
    }

    /**
     * @param mixed $disciplina
     */
    public function setDisciplina(Disciplina $disciplina)
    {
        $this->disciplina = $disciplina;
    }




}