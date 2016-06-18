<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 00:37
 */

namespace Paada\Model;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="notas")
 */
class Notas
{

    /**
     * @ORM\OneToMany(targetEntity="Aluno", mappedBy="")
     */
    private $aluno;

    /**
     * @ORM\ManyToOne(targetEntity="Disciplina", inversedBy="notas")
     */
    private $disciplina;
    /**
     * @ORM\Column(type="float")
     */
    private $notas;

    /**
     * @return mixed
     */
    public function getAluno()
    {
        return $this->aluno;
    }

    /**
     * @param mixed $aluno
     */
    public function setAluno(Aluno $aluno)
    {
        $this->aluno = $aluno;
    }

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

    /**
     * @return mixed
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * @param mixed $notas
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;
    }


}