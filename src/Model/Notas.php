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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="Aluno", inversedBy="notas")
     * @ORM\JoinColumn(name="aluno_id", referencedColumnName="id")
     */
    private $aluno;

    /**
     * @ORM\ManyToOne(targetEntity="Disciplina", inversedBy="notas")
     * @ORM\Column(type="string")
     */
    private $disciplina;

    /**
     * @ORM\Column(type="float")
     */
    private $notas;

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
    public function setNotas($nota)
    {
        $this->notas = $nota;
    }


}