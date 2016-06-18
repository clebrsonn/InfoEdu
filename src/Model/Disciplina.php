<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 00:24
 */

namespace Paada\Model;


use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity
 * @Doctrine\ORM\Mapping\Table(name="disciplina")
 */
class Disciplina
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @ORM\OneToMany(targetEntity="Professor", mappedBy="disciplina")
     */
    private $professor;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Turma", inversedBy="disciplinas")
     * @ORM\JoinColumn(name="turma_id", referencedColumnName="id")
     */
    private $turma;
    /**
     * @ORM\Column(type="string")
     */
    private $nome_disciplina;
    /**
     * @var \Doctrine\Common\Collections\Collection|Agenda[]
     * @ORM\OneToMany(targetEntity="Agenda",mappedBy="disciplina", cascade={"all"})
     */
    private $agenda;

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
    public function getProfessor()
    {
        return $this->professor;
    }

    /**
     * @param mixed $professor
     */
    public function setProfessor(Professor $professor)
    {
        $this->professor = $professor;
    }

    /**
     * @return mixed
     */
    public function getTurma()
    {
        return $this->turma;
    }

    /**
     * @param mixed $turma
     */
    public function setTurma(Turma $turma)
    {
        $this->turma = $turma;
    }

    /**
     * @return mixed
     */
    public function getNomeDisciplina()
    {
        return $this->nome_disciplina;
    }

    /**
     * @param mixed $nome_disciplina
     */
    public function setNomeDisciplina($nome_disciplina)
    {
        $this->nome_disciplina = $nome_disciplina;
    }

    /**
     * @return mixed
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * @param mixed $agenda
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;
    }


}